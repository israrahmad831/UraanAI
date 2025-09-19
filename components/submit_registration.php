<?php
// Enable detailed error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create a debug log function
function log_debug($message) {
    file_put_contents('registration_errors.log', date('[Y-m-d H:i:s] ') . $message . PHP_EOL, FILE_APPEND);
}

// Start output buffering to catch any unexpected output
ob_start();

try {
    log_debug("Script execution started");
    
    // Set headers
    header('Content-Type: application/json');
    header("X-Frame-Options: DENY");
    header("X-Content-Type-Options: nosniff");
    header("X-XSS-Protection: 1; mode=block");

    // Rate limiting
    session_start();
    if (!isset($_SESSION['last_submit'])) {
        $_SESSION['last_submit'] = 0;
    }

    $current_time = time();
    if ($current_time - $_SESSION['last_submit'] < 30) {
        http_response_code(429);
        echo json_encode([
            'success' => false,
            'message' => 'Please wait before submitting again.'
        ]);
        exit;
    }

    $_SESSION['last_submit'] = $current_time;

    // Database configuration
    $db_host = 'localhost';
    $db_name = 'turnaroundpakist_uraanai';
    $db_user = 'turnaroundpakist_admin_uraanai';
    $db_pass = 'Ur@@n@1_admin';

    log_debug("Attempting database connection");
    
    // Connect to database
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);
    
    log_debug("Database connection successful");

    // Check if form data is submitted as multipart/form-data
    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        throw new Exception("Invalid request method");
    }

    log_debug("Request method is POST");

    // Validate required fields
    $required = [
        'team-name' => 'Team Name',
        'thematic-area' => 'Thematic Area',
        'team-lead-name' => 'Team Lead Name',
        'team-lead-cnic' => 'Team Lead CNIC',
        'team-lead-email' => 'Team Lead Email',
        'team-lead-phone' => 'Team Lead Phone',
        'team-lead-institution' => 'Team Lead Institution',
        'student-name' => 'Student Name',
        'university-name' => 'University Name',
        'enrollment-no' => 'Enrollment Number',
        'project-title' => 'Project Title',
        'problem-statement' => 'Problem Statement',
        'sub-problems' => 'Sub Problems',
        'abstract' => 'Abstract',
        'datasets' => 'Datasets',
        'dataset-source' => 'Dataset Source',
        'preprocessing' => 'Preprocessing Steps',
        'product-name' => 'Product Name',
        'commercial-use' => 'Commercial Use Case',
        'potential-impact' => 'Potential Impact',
        'business-model' => 'Business Model'
    ];
    
    $errors = [];
    foreach ($required as $field => $name) {
        if (!isset($_POST[$field]) || empty(trim($_POST[$field]))) {
            $errors[] = "$name is required";
        }
    }

    // Check file uploads
    $file_errors = [];
    $required_files = [
        'university-letter' => 'University Letter Proof',
        'official-email' => 'Official Email Screenshot',
        'technical-report' => 'Technical Report',
        'executive-summary' => 'Executive Summary'
    ];
    
    foreach ($required_files as $file_field => $file_name) {
        if (!isset($_FILES[$file_field]) || $_FILES[$file_field]['error'] !== UPLOAD_ERR_OK) {
            $file_errors[] = "$file_name is required";
        }
    }

    if (!empty($errors) || !empty($file_errors)) {
        throw new Exception(implode(", ", array_merge($errors, $file_errors)));
    }

    log_debug("Basic validation passed");

    // Additional validation
    if (!filter_var($_POST['team-lead-email'], FILTER_VALIDATE_EMAIL)) {
        throw new Exception("Invalid email format");
    }

    // Check for duplicate email
    $checkStmt = $pdo->prepare("SELECT id FROM uai_registrations WHERE team_lead_email = :email LIMIT 1");
    $checkStmt->bindParam(':email', $_POST['team-lead-email'], PDO::PARAM_STR);
    $checkStmt->execute();
    
    if ($checkStmt->rowCount() > 0) {
        throw new Exception("This email is already registered");
    }

    log_debug("Duplicate check passed");

    // Prepare insert statement
    $sql = "INSERT INTO uai_registrations (
        team_name, thematic_area, team_lead_name, team_lead_cnic, team_lead_email, 
        team_lead_phone, team_lead_institution, student_name, university_name, 
        enrollment_no, project_title, problem_statement, sub_problems, abstract, 
        datasets, dataset_source, preprocessing, frameworks, model_accuracy, 
        error_rate, processing_speed, test_coverage, explainability, product_name, 
        commercial_use, potential_impact, business_model, source_code_url, demo_video_url,
        ip_address, user_agent, created_at
    ) VALUES (
        :team_name, :thematic_area, :team_lead_name, :team_lead_cnic, :team_lead_email, 
        :team_lead_phone, :team_lead_institution, :student_name, :university_name, 
        :enrollment_no, :project_title, :problem_statement, :sub_problems, :abstract, 
        :datasets, :dataset_source, :preprocessing, :frameworks, :model_accuracy, 
        :error_rate, :processing_speed, :test_coverage, :explainability, :product_name, 
        :commercial_use, :potential_impact, :business_model, :source_code_url, :demo_video_url,
        :ip_address, :user_agent, NOW()
    )";
    
    log_debug("Preparing SQL: " . $sql);
    
    $stmt = $pdo->prepare($sql);
    if (!$stmt) {
        throw new Exception("Failed to prepare SQL statement");
    }

    // Process frameworks
    $frameworks = [];
    if (isset($_POST['tensorflow'])) $frameworks[] = 'TensorFlow';
    if (isset($_POST['pytorch'])) $frameworks[] = 'PyTorch';
    if (isset($_POST['scikit'])) $frameworks[] = 'Scikit-Learn';
    if (isset($_POST['huggingface'])) $frameworks[] = 'HuggingFace';
    if (isset($_POST['other-framework']) && !empty($_POST['other-framework-text'])) {
        $frameworks[] = $_POST['other-framework-text'];
    }
    $frameworks_str = implode(', ', $frameworks);

    // Sanitize and bind parameters
    $ipAddress = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
    $userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
    
    $stmt->bindValue(':team_name', htmlspecialchars($_POST['team-name'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':thematic_area', htmlspecialchars($_POST['thematic-area'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':team_lead_name', htmlspecialchars($_POST['team-lead-name'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':team_lead_cnic', htmlspecialchars($_POST['team-lead-cnic'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':team_lead_email', filter_var($_POST['team-lead-email'], FILTER_SANITIZE_EMAIL));
    $stmt->bindValue(':team_lead_phone', htmlspecialchars($_POST['team-lead-phone'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':team_lead_institution', htmlspecialchars($_POST['team-lead-institution'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':student_name', htmlspecialchars($_POST['student-name'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':university_name', htmlspecialchars($_POST['university-name'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':enrollment_no', htmlspecialchars($_POST['enrollment-no'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':project_title', htmlspecialchars($_POST['project-title'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':problem_statement', htmlspecialchars($_POST['problem-statement'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':sub_problems', htmlspecialchars($_POST['sub-problems'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':abstract', htmlspecialchars($_POST['abstract'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':datasets', htmlspecialchars($_POST['datasets'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':dataset_source', htmlspecialchars($_POST['dataset-source'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':preprocessing', htmlspecialchars($_POST['preprocessing'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':frameworks', $frameworks_str);
    $stmt->bindValue(':model_accuracy', isset($_POST['model-accuracy']) ? htmlspecialchars($_POST['model-accuracy'], ENT_QUOTES, 'UTF-8') : '');
    $stmt->bindValue(':error_rate', isset($_POST['error-rate']) ? htmlspecialchars($_POST['error-rate'], ENT_QUOTES, 'UTF-8') : '');
    $stmt->bindValue(':processing_speed', isset($_POST['processing-speed']) ? htmlspecialchars($_POST['processing-speed'], ENT_QUOTES, 'UTF-8') : '');
    $stmt->bindValue(':test_coverage', isset($_POST['test-coverage']) ? (int)$_POST['test-coverage'] : null);
    $stmt->bindValue(':explainability', isset($_POST['explainability']) ? htmlspecialchars($_POST['explainability'], ENT_QUOTES, 'UTF-8') : '');
    $stmt->bindValue(':product_name', htmlspecialchars($_POST['product-name'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':commercial_use', htmlspecialchars($_POST['commercial-use'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':potential_impact', htmlspecialchars($_POST['potential-impact'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':business_model', htmlspecialchars($_POST['business-model'], ENT_QUOTES, 'UTF-8'));
    $stmt->bindValue(':source_code_url', isset($_POST['source-code']) ? htmlspecialchars($_POST['source-code'], ENT_QUOTES, 'UTF-8') : '');
    $stmt->bindValue(':demo_video_url', isset($_POST['demo-video']) ? htmlspecialchars($_POST['demo-video'], ENT_QUOTES, 'UTF-8') : '');
    $stmt->bindValue(':ip_address', $ipAddress, PDO::PARAM_STR);
    $stmt->bindValue(':user_agent', $userAgent, PDO::PARAM_STR);

    log_debug("Parameters bound, starting transaction");
    
    // Execute transaction
    $pdo->beginTransaction();
    $stmt->execute();
    $registrationId = $pdo->lastInsertId();
    
    // Process team members if any
    if (isset($_POST['teamMembers'])) {
        $teamMembers = json_decode($_POST['teamMembers'], true);
        if (is_array($teamMembers)) {
            $memberStmt = $pdo->prepare("INSERT INTO team_members (registration_id, name, email, role, institution) VALUES (?, ?, ?, ?, ?)");
            foreach ($teamMembers as $member) {
                if (!empty($member['name']) && !empty($member['email'])) {
                    $memberStmt->execute([
                        $registrationId,
                        htmlspecialchars($member['name'], ENT_QUOTES, 'UTF-8'),
                        filter_var($member['email'], FILTER_SANITIZE_EMAIL),
                        htmlspecialchars($member['role'], ENT_QUOTES, 'UTF-8'),
                        htmlspecialchars($member['institution'], ENT_QUOTES, 'UTF-8')
                    ]);
                }
            }
        }
    }
    
    // Create upload directory for this registration
    $uploadDir = "uploads/registration_$registrationId/";
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }
    
    // Process file uploads
    $fileFields = [
        'university-letter' => 'University Letter',
        'official-email' => 'Official Email Screenshot',
        'technical-report' => 'Technical Report',
        'executive-summary' => 'Executive Summary'
    ];
    
    $filePaths = [];
    foreach ($fileFields as $field => $description) {
        if (isset($_FILES[$field]) && $_FILES[$field]['error'] === UPLOAD_ERR_OK) {
            $fileExt = pathinfo($_FILES[$field]['name'], PATHINFO_EXTENSION);
            $fileName = preg_replace('/[^A-Za-z0-9_-]/', '_', $description) . '.' . $fileExt;
            $filePath = $uploadDir . $fileName;
            
            if (move_uploaded_file($_FILES[$field]['tmp_name'], $filePath)) {
                $filePaths[$field] = $filePath;
                
                // Store file path in database
                $fileStmt = $pdo->prepare("INSERT INTO registration_files (registration_id, file_type, file_path, uploaded_at) VALUES (?, ?, ?, NOW())");
                $fileStmt->execute([$registrationId, $description, $filePath]);
            } else {
                throw new Exception("Failed to upload $description");
            }
        }
    }
    
    $pdo->commit();

    log_debug("Transaction committed successfully. New ID: $registrationId");
    
    // Clear any unexpected output
    ob_end_clean();
    
    // Return success response
    echo json_encode([
        'success' => true,
        'message' => 'Registration successful!',
        'registration_id' => $registrationId
    ]);

    exit;

} catch (PDOException $e) {
    // Clear output buffer before sending error
    ob_end_clean();
    
    if (isset($pdo) && $pdo->inTransaction()) {
        $pdo->rollBack();
    }
    
    log_debug("PDOException: " . $e->getMessage() . "\n" . $e->getTraceAsString());
    
    http_response_code(500);
    echo json_encode([
        'success' => false,
        'message' => 'Database error occurred',
        'error_info' => $e->errorInfo ?? null
    ]);
    
} catch (Exception $e) {
    // Clear output buffer before sending error
    ob_end_clean();
    
    log_debug("Exception: " . $e->getMessage());
    
    http_response_code(400);
    echo json_encode([
        'success' => false,
        'message' => $e->getMessage()
    ]);
}

// Ensure no output after this point
exit;
?>
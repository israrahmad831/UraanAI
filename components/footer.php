<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts - Inter and Noto Sans -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Noto+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <style>
        :root {
            --primary-color: #05636b;
            --secondary-color: #006b37;
             --accent-color: #05c68e;
            --accent-secondary: #15c9c0;
            --text-color: #333;
            --light-text: #fff;
            --border-color: #e1e1e1;
            --hover-color: #f5f5f5;
            --submenu-bg: #f9f9f9;
            --header-height: 120px;
            --menu-height: 50px;
            --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
            --menu-bg: #05636b;
            --box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            --danger-color: red;
            --gradient-primary: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
        }
        
        .footer {
            background-color: #044554 !important;
            color: white;
            padding: 60px 0 30px;
        }
        
        .footer-logo img {
            height: 60px;
            margin-bottom: 20px;
        }
        
        .footer-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 20px;
            color: white;
        }
        
        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            display: block;
            margin-bottom: 10px;
            transition: var(--transition);
            text-decoration: none;
        }
        
        .footer-link:hover {
            color: var(--accent-color);
            transform: translateX(5px);
        }
        
        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: var(--accent-color);
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
               text-decoration: none;
            
        }
         .social-icon i{
          
            color: var(--light-text);
             text-decoration: none;
          
        }
         .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
        }
        
        .social-icon:hover {
            background-color: var(--accent-secondary);
            transform: translateY(-3px);
        }
        
        .social-icon:hover {
            background-color: var(--accent-secondary);
            transform: translateY(-3px);
        }
        
        .copyright {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 20px;
            margin-top: 40px;
            color: rgba(255, 255, 255, 0.5);
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="footer-logo">
                        <img src="<?php echo BASE_URL; ?>assets/images/logo-uraan-ai-dark.png" alt="Uraan AI Challenge">
                        
                    </div>
                    <p>URAAN AI Techathon 1.0 is a flagship initiative under the URAAN Pakistan National Innovation Mission, organized by the Ministry of Planning, Development & Special Initiatives.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/uraan-ai-techathon" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h3 class="footer-title">Quick Links</h3>
                    <a href="<?php echo BASE_URL; ?>index.php#about" class="footer-link">About</a>
                  
                    <a href="<?php echo BASE_URL; ?>index.php#themes" class="footer-link">Problem Statements</a>
                    <a href="<?php echo BASE_URL; ?>index.php#roadmap" class="footer-link">Timeline</a>
                    <a href="<?php echo BASE_URL; ?>index.php#awards" class="footer-link">Awards</a>
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
                    <h3 class="footer-title">Resources</h3>
                    <a href="<?php echo BASE_URL; ?>guidelines.php" class="footer-link">Competition Guidelines</a>
                    <a href="<?php echo BASE_URL; ?>final-products.php"  class="footer-link">Final Products & Services</a>
                    <a href="<?php echo BASE_URL; ?>ip-data-usage.php" class="footer-link">IP Rights & Data Usage</a>
                    <a href="<?php echo BASE_URL; ?>partners.php" class="footer-link">Partners</a>
                    <a href="<?php echo BASE_URL; ?>faqs.php" class="footer-link">FAQs</a>
                     
                </div>
                <div class="col-lg-2 col-md-4 mb-4">
    <h3 class="footer-title">Legal</h3>
    <a href="<?php echo BASE_URL; ?>privacy-policy.php" class="footer-link">Privacy Policy</a>
    <a href="<?php echo BASE_URL; ?>terms-of-service.php" class="footer-link">Terms of Service</a>
    <a href="<?php echo BASE_URL; ?>cookie-policy.php" class="footer-link">Cookie Policy</a>
</div>

                <div class="col-lg-2 col-md-4 mb-4">
                    <h3 class="footer-title">Contact</h3>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Ministry of Planning, Development & Special Initiatives, Islamabad</p>
                    <!--<p><i class="fas fa-phone-alt me-2"></i> +92 51 920 0000</p>-->
                    <p><i class="fas fa-envelope me-2"></i> info.ai@pc.gov.pk</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 text-center copyright">
                    <p>&copy; 2025 URAAN AI Techathon 1.0. All rights reserved.</p>
                    <p>Designed and developed by Head of Creative Design Unit & Web Manager, DevCom — MoPD&SI, Government of Pakistan.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
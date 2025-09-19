<?php
define('BASE_URL', '/uraanai/'); 
?>

<html>

<head>
    
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>URAAN AI Techathon 1.0</title>
    <!-- Favicon -->
   <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/images/fav-icon-dark.png">
    <!-- For Apple devices -->
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>assets/images/fav-icon-dark.png">

     
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
           body {
          font-family: 'Plus Jakarta Sans' !important;
           
        }
          :root {
            --primary-color: #05636b;
            --secondary-color: #006b37;
            --accent-color: #fec51c;
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
    </style>
</head>
<body>

<?php include 'components/launch-modal.php'; ?>
 
</body>
</html>
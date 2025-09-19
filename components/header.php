<?php
define('BASE_URL', '/uraanai/'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URAAN AI Techathon 1.0</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/images/fav-icon-dark.png">
    <!-- For Apple devices -->
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>assets/images/fav-icon-dark.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
   
   
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


<!-- Slick CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<!-- Add Select2 CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



    <style>
        :root {
            --primary-color: #05636b;
            --secondary-color: #006b37;
            --accent-color: #05c68e;
            --accent-secondary: #05c68e;
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
        
        html, body {
  margin: 0;
  padding: 0;
  overflow-x: hidden;
}
        
          body {
          font-family: 'Plus Jakarta Sans' !important;
            color: var(--text-color) !important;
            overflow-x: hidden !important;
             width: 100%;
             margin: 0;
             padding: 0;
        }
        * {
  box-sizing: border-box;
}
        
      .container {
  width: 100%;
  max-width: 1200px; /* keep it responsive */
  margin: 0 auto;
}
        
    
        /* Header Styles */
        #mainHeader {
         width:100%;
            height: 80px;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: #004b4f;
            transition: all 0.3s ease;
            z-index: 1000;
            padding: 5px 0;
        }
        
        #mainHeader.scrolled {
            background-color: white !important;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        }
        
        /* Nav Link Colors */
        #mainHeader .nav-link {
            color: var(--light-text);
             cursor:default;
            
        }
        
        #mainHeader.scrolled .nav-link {
            color: var(--primary-color);
            text-shadow: none;
             cursor:default;
        }
        
        /* Logo Size Transition */
        .navbar-brand img {
            height: 45px;
        }
        
        #mainHeader.scrolled .navbar-brand img {
            height: 45px;
        }
        .nav-link {
            color: var(--primary-text);
            font-weight: 500 !important;
            margin: 0 10px !important;
            transition: var(--transition) !important;
            cursor:default;
        }
      .nav-link:hover {
    color: var(--accent-color) !important;
    text-decoration: underline;
    text-decoration-color: var(--accent-color);
    text-underline-offset: 29px;
      text-decoration-thickness: 3px;
}

        
        .scrolled .nav-link:hover {
            color: var(--accent-color);
    text-decoration: underline;
    text-decoration-color: var(--accent-color);
     text-underline-offset: 29px;
      text-decoration-thickness: 3px;
        }
        
        .reg-button {
            background: var(--accent-color) !important;
            color: var(--light-text) !important;
            
            border: none !important;
            padding: 10px 25px !important;
            border-radius: 30px !important;
            font-weight: 600 !important;
            transition: var(--transition) !important;
             cursor:default !important;
             
        }
        
        .reg-button:hover {
            background: var(--light-text) !important;
            color: var(--primary-color) !important;
            box-shadow: 0 5px 15px rgba(21, 201, 192, 0.3) !important;
              cursor:default !important;
              
            
        }
        
        .reg-button-modal{
              background: var(--accent-color) !important;
            color: var(--light-text) !important;
            
            border: none !important;
            padding: 10px 25px !important;
            border-radius: 30px !important;
            font-weight: 600 !important;
            transition: var(--transition) !important;
             cursor:default !important;
        }
        
         .reg-button-modal:hover {
           
            box-shadow: 0 5px 15px rgba(21, 201, 192, 0.3) !important;
              cursor:default !important;
              
            
        }
        
/* Scrolled state: lock styles, no hover change */
#mainHeader.scrolled .reg-button {
    background: linear-gradient(to right, #104d6c, #6fb68d) !important;
    color: white !important;
    box-shadow: none !important; 
}

#mainHeader.scrolled .reg-button:hover {
    background: linear-gradient(to right, #104d6c, #6fb68d) !important;
    color: white !important;
    box-shadow: none !important; /* remove shadow if you don’t want hover effect */
}

#mainHeader.scrolled .reg-button:hover .arrow-circle {
     transform: translateX(2px); 
    background: white !important;     /* keep same as base */
}

#mainHeader.scrolled .reg-button:hover .arrow-circle i {
    color: #1c4840 !important;        /* same as base */
}    
        
     /* Arrow circle styles */
.arrow-circle {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 24px;
    height: 24px;
    background: white;
    border-radius: 50%;
    margin-left: 8px;
    transition: var(--transition);
}

.arrow-circle i {
    color: #1c4840;
    font-size: 12px;
    transition: var(--transition);
}

/* Hover effects */
.reg-button:hover .arrow-circle {
    transform: translateX(2px);
    background:var(--accent-color);
}

.reg-button:hover .arrow-circle i {
 color:var(--primary-color);
}

.reg-button-modal:hover .arrow-circle {
    transform: translateX(2px);
}

.reg-button-modal:hover .arrow-circle i {

}
/*#mainHeader.scrolled .reg-button:hover .arrow-circle {*/
/*    transform: translateX(2px);*/
/*    transition: transform 0.3s ease;*/
/*    background: inherit;*/
/*}*/

/* #mainHeader.scrolled .reg-button:hover .arrow-circle i {*/
/* color:inherit;*/
/*}*/
       
     
        
/* Navbar toggler icon styles */
.navbar-toggler {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
}

#mainHeader.scrolled .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='black' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
}



/* Navbar toggler styles */
.navbar-toggler {
    border: none !important;
    outline: none !important;
    box-shadow: none !important;
    padding: 0.5rem 0.75rem;
}

.navbar-toggler:focus {
    box-shadow: none !important;
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='white' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
    width: 1.5em;
    height: 1.5em;
}

#mainHeader.scrolled .navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='%2305636b' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e") !important;
}



@media (max-width: 1400px) {
    
    .nav-link {
        font-size:14px;
    }
    .navbar-brand img {
            height: 32px;
        }
        
        #mainHeader.scrolled .navbar-brand img {
            height: 32px;
        }
}

/* Mobile menu styles */
@media (max-width: 991px) {
    #mainHeader .navbar-collapse {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: #004b4f;
        padding: 1rem;
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
    }
    
    #mainHeader.scrolled .navbar-collapse {
        background: white;
    }
    
    #navbarNav {
        padding: 1rem 0;
    }
    
    .nav-item {
        margin: 0.5rem 0;
    }
    
    .nav-link {
        padding: 0.5rem 1rem !important;
        color: white !important;
    }
    
    #mainHeader.scrolled .nav-link {
        color: var(--primary-color) !important;
    }
    
    .nav-link:hover {
        text-decoration: none !important;
        color: var(--accent-color) !important;
        border-radius: 4px;
    }
    
    #mainHeader.scrolled .nav-link:hover {
        color: var(--accent-color) !important;
    }
    
    .reg-button {
        margin-top: 0.5rem !important;
      
        text-align: center;
    }
    
    /* Remove underline effect from toggler button */
    .navbar-toggler:hover {
        text-decoration: none !important;
    }
    
    /* Ensure the toggler icon doesn't show underline */
    .navbar-toggler:focus, .navbar-toggler:active {
        text-decoration: none !important;
    }
     .navbar-brand img {
            height: 30px;
        }
        
        #mainHeader.scrolled .navbar-brand img {
            height: 30px;
        }
}
       
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav id="mainHeader" class="navbar navbar-expand-lg">
        <div class="container" style="margin-left:50px; margin-right:50px;">
            <a class="navbar-brand" href="<?php echo BASE_URL; ?>">
                <img src="<?php echo BASE_URL; ?>assets/images/uraan-ai-modal-logo-strip.png" alt="Uraan AI Challenge 2025">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                      <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>index.php#themes">Problem Statements</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>index.php#roadmap">Timeline</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo BASE_URL; ?>index.php#awards">Awards</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="<?php echo BASE_URL; ?>index.php#partners">Partners</a>-->
                    <!--</li>-->
                </ul>
              <a  href="#" data-bs-toggle="modal" data-bs-target="#registerModal" class="reg-button btn ms-lg-3 d-inline-flex align-items-center">
    Register Now  <span class="arrow-circle ms-2">
        <i class="fas fa-arrow-right"></i>
    </span>
</a>

                
            </div>
        </div>
    </nav>
  
  
    
    <script>
      document.addEventListener('DOMContentLoaded', function() {
    const header = document.getElementById('mainHeader');
    
    // Check for both possible hero sections
    const heroSection = document.querySelector('.hero-section, .theme-header');
    
    
    const logo = header.querySelector('.navbar-brand img');
     const defaultLogo = "<?php echo BASE_URL; ?>assets/images/uraan-ai-modal-logo-strip.png";
    const scrolledLogo = "<?php echo BASE_URL; ?>assets/images/uraan-ai-modal-logo-strip-light.png"; 
    
    
    window.addEventListener('scroll', function() {
        if (!heroSection) {
            // Fallback if no hero section exists
            header.classList.toggle('scrolled', window.scrollY > 50);
            return;
        }
        
        const heroHeight = heroSection.offsetHeight;
        const scrollPosition = window.scrollY;
        
         const isScrolled = scrollPosition > heroHeight; 
        
        header.classList.toggle('scrolled', scrollPosition > heroHeight);
         logo.src = isScrolled ? scrolledLogo : defaultLogo;
    });
    
    // Initialize on load in case page is reloaded while scrolled
    if (window.scrollY > (heroSection?.offsetHeight || 80)) {
        header.classList.add('scrolled');
         logo.src = isScrolled ? scrolledLogo : defaultLogo;
    }
});
    </script>
    
 <div id="custom-cursor"></div>
 <style>
#custom-cursor {
  position: fixed;
  top: 0;
  left: 0;
  width: 15px;
  height: 15px;
  background: linear-gradient(to right, #104d6c, #6fb68d) !important;
  border: 2px solid #05636b;
  border-radius: 50%;
  pointer-events: none;
  z-index: 9999;
}
a:hover ~ #custom-cursor {
  transform: translate(-50%, -50%) scale(1.5);
  background: var(--accent-color);
}

#custom-cursor {
  box-shadow: 0 0 15px rgba(21,201,192,0.7);
}
@media (max-width: 1024px) {
  #custom-cursor {
    display: none !important;
  }
}


</style>
<script>
document.addEventListener('DOMContentLoaded', function () {
  const cursor = document.getElementById('custom-cursor');
  let targetX = 0, targetY = 0;
  let currentX = 0, currentY = 0;

  // Desktop mouse movement
  document.addEventListener('mousemove', function(e) {
    targetX = e.clientX;
    targetY = e.clientY;
  });

  // Mobile finger movement
  document.addEventListener('touchmove', function(e) {
    if (e.touches.length > 0) {
      targetX = e.touches[0].clientX;
      targetY = e.touches[0].clientY;
    }
  });

  // Smooth follow animation
  function animate() {
    currentX += (targetX - currentX) * 0.15;
    currentY += (targetY - currentY) * 0.15;

    cursor.style.transform = `translate(${currentX}px, ${currentY}px) translate(-50%, -50%)`;

    requestAnimationFrame(animate);
  }

  animate();
});


</script>


   
</body>
</html>
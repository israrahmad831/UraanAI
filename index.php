<?php include 'components/header.php'; ?>


<body>
    <!-- Hero Section -->
<section class="hero-section" style="margin-top: 70px;">
    <!-- Desktop Version -->
    <div class="desktop-hero" >
        <div class="container hero-top-content">
            
            <div class="countdown">
             <img id="mopdsilogo" src="<?php echo BASE_URL; ?>assets/images/logo-uraan-ai-modal.png" style="height:90px;">  
             <h1 class="hero-title">URAAN AI Techathon 1.0</h1> 
                <p class="hero-subtitle mb-0">Pioneering AI for a Digitally Empowered Pakistan</p>
            </div>
        </div>    
        <div class="container hero-bottom-content">
            <div class="countdown">
                <!--<div class="countdown-item">-->
                <!--    <div class="countdown-number" id="days">00</div>-->
                <!--    <div class="countdown-label">Days</div>-->
                <!--</div>-->
                <!--<div class="countdown-item">-->
                <!--    <div class="countdown-number" id="hours">00</div>-->
                <!--    <div class="countdown-label">Hours</div>-->
                <!--</div>-->
                <!--<div class="countdown-item">-->
                <!--    <div class="countdown-number" id="minutes">00</div>-->
                <!--    <div class="countdown-label">Minutes</div>-->
                <!--</div>-->
                <!--<div class="countdown-item">-->
                <!--    <div class="countdown-number" id="seconds">00</div>-->
                <!--    <div class="countdown-label">Seconds</div>-->
                <!--</div>-->
                
                <p style="margin-bottom:0px;">A Competition by <br/> <b>Ministry of Planning, Development & Special Initiatives</b></p>
                <div class="d-flex justify-content-center">
                    <a href="#register" class="btn reg-button btn-lg mt-3 d-inline-flex align-items-center">
                        Register Your Team  
                        <span class="arrow-circle ms-2">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>   
                      <a href="#themes" class="btn reg-button btn-lg mt-3 d-inline-flex align-items-center mx-3">
                        Explore Thematic Areas 
                        <span class="arrow-circle ms-2">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>   
                      <a href="./guidelines.php" class="btn reg-button btn-lg mt-3 d-inline-flex align-items-center">
                        Submission Guidelines 
                        <span class="arrow-circle ms-2">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>   
                </div>
                <div class="header-scroll-indicator">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <!-- Mobile Version -->
    <div class="mobile-hero">
        <div class="mobile-banner"></div>
        <div class="mobile-content">
            <img id="mopdsilogo" src="<?php echo BASE_URL; ?>assets/images/logo-uraan-ai-modal.png" style="height:90px;">  
            <h1 class="hero-title">URAAN AI Techathon 1.0</h1> 
            <p class="hero-subtitle">Pioneering AI for <br/> A Digitally Empowered Pakistan</p>
            <!--<div class="countdown">-->
            <!--    <div class="countdown-item">-->
            <!--        <div class="countdown-number" id="mobile-days">00</div>-->
            <!--        <div class="countdown-label">Days</div>-->
            <!--    </div>-->
            <!--    <div class="countdown-item">-->
            <!--        <div class="countdown-number" id="mobile-hours">00</div>-->
            <!--        <div class="countdown-label">Hours</div>-->
            <!--    </div>-->
            <!--    <div class="countdown-item">-->
            <!--        <div class="countdown-number" id="mobile-minutes">00</div>-->
            <!--        <div class="countdown-label">Minutes</div>-->
            <!--    </div>-->
            <!--    <div class="countdown-item">-->
            <!--        <div class="countdown-number" id="mobile-seconds">00</div>-->
            <!--        <div class="countdown-label">Seconds</div>-->
            <!--    </div>-->
            <!--</div>-->
              <p class="mobile-comp-text" style="margin-bottom:0px;">A Competition by <br/> <b>Ministry of Planning, Development & Special Initiatives</b></p>
            <div class="d-flex justify-content-center">
                <a href="#register" class="btn reg-button btn-lg mt-3 d-inline-flex align-items-center">
                    Register Your Team  
                    <span class="arrow-circle ms-2">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>   
            </div>
              <div class="header-scroll-indicator-mob">
                    <i class="fas fa-chevron-down"></i>
                </div>
        </div>
    </div>
</section>

<style>
.hero-title { 
    font-size: 55px;  
    color: var(--light-text); 
    font-weight: 900 !important; 
    margin-bottom: 0px; 
} 

.hero-subtitle {
    font-size: 1.5rem; 
    margin-bottom: 5px; 
    font-weight: 600; 
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2); 
}

/* Common styles for both versions */
.hero-section {
    position: relative;
    color: var(--light-text);
}

/* Background image for desktop */
.desktop-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0;
    width: 100%; height: 100%;
    background: url('./assets/images/uraan-ai-banner-green.jpg') no-repeat center center;
    background-size: cover;
    z-index: -2;
}


.desktop-hero::after {
    background: linear-gradient(180deg, rgba(85, 202, 225, 0) 63.54%, #05636b 110.14%);
    height: 100%;
    content: '';
    position: absolute;
    bottom: 0; left: 0;
    width: 100%;
    z-index: -1;
}

/* Desktop version */
.desktop-hero {
    display: block;
    min-height: 100vh;
}

/* Group countdown, button, chevron */
.hero-top-content {
    padding-top:30px;
    position: absolute;
    top: 0px;
    left: 50%;
    text-align: center;
    position: absolute;
    left: 0;
    width: 100% !important;
    max-width:100% !important;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    z-index: 1;
    background: linear-gradient(180deg, rgb(0 65 68) 0%,  rgb(5 99 107 / 83%) 30%,  rgb(5 99 107 / 78%) 60%,  rgb(5 99 107 / 59%) 80%, rgba(5, 99, 107, 0) 100% );
    backdrop-filter: blur(1px);
}

.hero-bottom-content {
    position: absolute;
    bottom: 0px;
    left: 0;
    width: 100% !important;
    max-width:100% !important;
    padding-bottom:90px;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    z-index: 1;
    background: linear-gradient(
        to top, 
        rgba(0, 0, 0, 0.6) 0%,
        rgba(0, 0, 0, 0.3) 40%,
        rgba(0, 0, 0, 0) 100%
    );
    backdrop-filter: blur(1px);
}

/* Mobile version */
.mobile-hero {
    display: none;
}
.mobile-comp-text{
    font-size:12px;
}

.mobile-banner {
    height: 650px;
    background: url('./assets/images/uraan-ai-banner-green-mob-ext-2.jpg') no-repeat top center;
    background-size: cover;
}

.mobile-content {
    margin-top:-446px;
    padding: 30px 20px;
    text-align: center;
   background: linear-gradient(
        to top, 
        rgba(0, 0, 0, 0.6) 0%,
        rgba(0, 0, 0, 0.3) 40%,
        rgba(0, 0, 0, 0) 100%
    );
    backdrop-filter: blur(1px);
}

/* Countdown styles */
.countdown {
    border-radius: 15px;
    padding:0px;
    display: block;
    text-align: center;
    margin-bottom: 0px;
}

.countdown-item {
    display: inline-block;
    margin: 0 5px;
    text-align: center;
}

.countdown-number {
    font-size: 2.5rem;
    font-weight: 700;
    color: white;
    line-height: 1;
}

.countdown-label {
    font-size: 0.9rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    opacity: 0.8;
}

/* Button */
.hero-bottom-content .btn, .mobile-content .btn {
    margin-bottom: 10px;
}

/* Chevron */
.header-scroll-indicator {
    animation: bounce 1.5s infinite;
}

.header-scroll-indicator i {
    font-size: 24px;
    color: white;
}

/* Bounce animation */
@keyframes bounce {
    0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
    40% { transform: translateY(-10px); }
    60% { transform: translateY(-5px); }
}

.header-scroll-indicator-mob {
    animation: bounce 1.5s infinite;
}

.header-scroll-indicator-mob i {
    font-size: 24px;
    color: white;
}

/* Responsive styles */
@media (max-width: 768px) {
    .desktop-hero {
        display: none;
    }
    
    .mobile-hero {
        display: block;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-subtitle {
        font-size: 1.5rem;
    }
    
    .countdown-number {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .hero-subtitle {
        font-size: 1.2rem;
    }
    
    .countdown-number {
        font-size: 1.5rem;
    }
    
    .countdown-item {
        margin: 0 3px;
    }
}
</style>

    <script>
         document.querySelector('.header-scroll-indicator').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-title').scrollIntoView({
            behavior: 'smooth'
        });
    });
      document.querySelector('.header-scroll-indicator-mob').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-title').scrollIntoView({
            behavior: 'smooth'
        });
    });
    
    
    </script>

   
 
<!-- About Section -->
<!--<section id="about" class="ai-about-section py-5">-->
<!--    <div class="container py-5">-->
<!--        <div class="row justify-content-center">-->
<!--            <div class="col-lg-12 text-center">-->
<!--                <h2 class="section-title">About the Challenge</h2>-->
             
<!--                    <p class="section-subtitle">-->
<!--    <strong>Uraan AI Techathon 1.0</strong> is Pakistan’s first national AI-focused techathon, uniting <strong>students</strong>, <strong>professionals</strong>, and <strong>researchers</strong> to develop innovative solutions across <strong>12 thematic areas</strong>. This flagship initiative goes beyond traditional hackathons by offering participants a unique opportunity to transform their ideas into impactful solutions. Winning teams will receive <strong>cash awards</strong>, <strong>mentorship</strong>, <strong>incubation support</strong>, and opportunities to commercialize their solutions through collaboration with <strong>government</strong> and <strong>industry partners</strong>.-->
<!--</p>-->
<!--               </div>-->
<!--        </div>-->
        
<!--        <div class="ai-layout-container row mt-5 align-items-center">-->
         
<!--            <div class="ai-cards-column col-lg-6">-->
              
<!--                <div class="ai-capsule-card ai-card-blue">-->
<!--                    <div class="ai-card-icon">-->
<!--                      <img src="assets/images/goal-obj.png" style="height:46px;" />-->
<!--                    </div>-->
<!--                    <div class="ai-card-content">-->
<!--                        <h3>Phase 1 (1 Month Online)</h3>-->
<!--                        <p>Teams work on sub-problems using open datasets.</p>-->
<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="ai-card-spacer"></div>-->
                
<!--                <div class="ai-capsule-card ai-card-green">-->
<!--                    <div class="ai-card-icon">-->
<!--                          <img src="assets/images/goal-participant.png" style="height:46px;" />-->
<!--                    </div>-->
<!--                    <div class="ai-card-content">-->
<!--                        <h3>Phase 2 (Techathon Day, Islamabad)</h3>-->
<!--                        <p>Shortlisted teams solve advanced problems in GPU-equipped labs. Winners announced the same day.</p>-->
<!--                    </div>-->
<!--                </div>-->
                
<!--                <div class="ai-card-spacer"></div>-->
                
             
<!--                <div class="ai-capsule-card ai-card-purple">-->
<!--                    <div class="ai-card-icon">-->
<!--                         <img src="assets/images/goal-impact.png" style="height:46px;" />-->
<!--                    </div>-->
<!--                    <div class="ai-card-content">-->
<!--                        <h3>Phase 3 (5-Month Incubation)</h3>-->
<!--                        <p>Winning teams receive mentorship, cloud resources, and pilot opportunities to launch real products/services.</p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
            
            
<!--            <div class="ai-image-column col-lg-6">-->
<!--                <div class="ai-featured-image">-->
<!--                    <img src="assets/images/about-uraan-ai-techathon-2025.jpg" alt="AI Technology" class="img-fluid">-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->
<section id="about" class="ai-about-section py-5">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">About the Challenge</h2>
            </div>
        </div>
        
        <div class="ai-layout-container row mt-5">
            <div class="ai-image-column col-lg-6">
                <div class="ai-featured-image">
                    <img src="assets/images/about-uraan-ai-techathon-2025.jpg" alt="AI Technology" class="img-fluid">
                </div>
            </div>
         
            <div class="ai-cards-column col-lg-6">
                <p class="section-subtitle">
                    <strong>Uraan AI Techathon 1.0</strong> is Pakistan's first national AI-focused techathon, uniting <strong>students</strong>, <strong>professionals</strong>, and <strong>researchers</strong> to develop innovative solutions across <strong>12 thematic areas</strong>. This flagship initiative goes beyond traditional hackathons by offering participants a unique opportunity to transform their ideas into impactful solutions. Winning teams will receive <strong>cash awards</strong>, <strong>mentorship</strong>, <strong>incubation support</strong>, and opportunities to commercialize their solutions through collaboration with <strong>government</strong> and <strong>industry partners</strong>.
                </p>
              
                <div class="steps-container">
                    <!-- STEP 1 -->
                    <div class="step">
                        <div class="circle-wrapper">
                            <div class="circle">01</div>
                            <div class="dotted-line"></div>
                        </div>
                        <div class="step-content">
                            <h3>Phase 1 (1 Month Online)</h3>
                            <p>Teams work on sub-problems using <strong>licensed datasets with proof, under audit trail.</strong></p>
                        </div>
                    </div>
                
                    <!-- STEP 2 -->
                    <div class="step" style="margin-top:-10px;">
                        <div class="circle-wrapper">
                            <div class="circle">02</div>
                            <div class="dotted-line"></div>
                        </div>
                        <div class="step-content">
                            <h3>Phase 2 (Techathon Day, Islamabad)</h3>
                            <p>Shortlisted teams solve advanced problems in GPU-equipped labs. Winners announced the same day.</p>
                        </div>
                    </div>
                
                    <!-- STEP 3 -->
                    <div class="step" style="margin-top:-10px;">
                        <div class="circle-wrapper">
                            <div class="circle">03</div>
                        </div>
                        <div class="step-content">
                            <h3>Phase 3 (5-Month Incubation)</h3>
                            <p>Winning teams receive mentorship, cloud resources, and pilot opportunities to launch real products/services.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.steps-container {
    max-width: 850px;
    margin: 50px auto;
    padding: 20px;
    display: flex;
    flex-direction: column;
}

/* Each step row */
.step {
    display: flex;
    align-items: flex-start;
    gap: 20px;
    position: relative;
}

/* Wrapper to keep circle + dotted line aligned */
.circle-wrapper {
    display: flex;
    flex-direction: column;
    align-items: center;
    position: relative;
}

/* Number circles */
.circle {
    width: 60px;
    height: 60px;
    background: var(--primary-color, #4e54c8);
    color: white;
    font-size: 18px;
    font-weight: 700;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    position: relative;
    z-index: 1;
    transition: all 0.3s ease;
}

.circle:hover {
    background: white;
    color: var(--primary-color, #4e54c8);
    transform: scale(1.05);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.2);
    border: 2px solid var(--primary-color, #4e54c8);
}

/* Dotted line connecting circles */
.dotted-line {
    width: 2px;
    height: 60px;
    background-image: linear-gradient(to bottom, 
        transparent 0%, 
        transparent 10%, 
        var(--primary-color, #4e54c8) 10%, 
        var(--primary-color, #4e54c8) 30%, 
        transparent 30%, 
        transparent 70%, 
        var(--primary-color, #4e54c8) 70%, 
        var(--primary-color, #4e54c8) 90%, 
        transparent 90%, 
        transparent 100%);
    background-size: 2px 10px;
    background-repeat: repeat-y;
    margin: 5px 0;
}

/* Step content */
.step-content {
    flex: 1;
    padding-top: 10px;
}

.step-content h3 {
    margin: 0;
    font-size: 20px;
    font-weight: 700;
    color: var(--dark-color, #0b093b);
}

.step-content p {
    margin-top: 6px;
    font-size: 15px;
    color: #555;
    line-height: 1.6;
}

/* Right Column - Image */
.ai-image-column {
    position: relative;
    z-index: 1;
    padding-left: 0;
}

.ai-featured-image {
    height: 100%;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 15px 40px rgba(0, 0, 0, 0.1);
    margin-left: -50px;
}

.ai-featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.ai-featured-image:hover img {
    transform: scale(1.05);
}

/* Overlapping Effect */
@media (min-width: 992px) {
    .ai-capsule-card {
        margin-right: -30px;
    }
    
    .ai-card-blue {
        margin-left: 0px;
    }
    
    .ai-card-green {
        margin-left: 0px;
    }
    
    .ai-card-purple {
        margin-left: 0px;
    }
}

/* Responsive Design */
@media (max-width: 991.98px) {
    .ai-layout-container {
        flex-direction: column;
    }
    
    .ai-cards-column,
    .ai-image-column {
        width: 100%;
        padding: 0;
    }
    
    .ai-featured-image {
        margin-left: 0;
        margin-top: 40px;
    }
    
    .ai-capsule-card {
        margin-right: 0;
    }
    
    .steps-container {
        padding: 10px;
    }
    
    .step {
        flex-direction: column;
        align-items: flex-start;
    }
    
    .circle-wrapper {
        flex-direction: row;
        gap: 10px;
        margin-bottom: 15px;
    }
    
    .dotted-line {
        display: none;
    }
}

/* Animation for circles */
@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

.circle {
    animation: pulse 2s infinite;
}

.circle:hover {
    animation: none;
}
</style>
   
 
   
    <!-- Themes Section -->
    <section id="themes" class="pt-5 pb-0 bg-light">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center ">
                    <h2 class="section-title text-white">Problem Statements</h2>
                    <p class="section-subtitle text-white" style="margin-bottom:40px !important;">12 focus areas aligned with Pakistan's National AI Task Force framework</p>
                    <a href="#" onclick="openUaiModal(); return false;" class="btn reg-button btn-lg mt-0 d-inline-flex align-items-center">
                        Participation Guideline 
                        <span class="arrow-circle ms-2">
                            <i class="fas fa-arrow-right"></i>
                        </span>
                    </a>   
            </div>
            </div>
            
    <div class="row mt-5">
    <!-- Card 1 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/foundation-infra.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/foundation.jpg" alt="Foundations/Infrastructure">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">AI Infrastructure</h3>
                <p class="text-white text-center">Developing unified AI infrastructure for public sector datasets and localized support for Urdu/regional languages.</p>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/governance.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/governance-thumbnail.jpg" alt="Governance">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Governance</h3>
                <p class="text-white text-center">AI-powered oversight for public spending, procurement, and citizen service delivery.</p>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/healthcare.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/health.jpg" alt="Healthcare">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Healthcare</h3>
                <p class="text-white text-center">AI tools for rural diagnosis, prescription digitization, and health risk prediction.</p>
            </div>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/agriculture.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/agriculture.png" alt="Agriculture">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Agriculture</h3>
                <p class="text-white text-center">Early warning systems for pests, crop diseases, and climate-induced stress.</p>
            </div>
        </div>
    </div>

    <!-- Card 5 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/manufacturing-industry.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/manufacturing.png" alt="Manufacturing">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Manufacturing Industry</h3>
                <p class="text-white text-center">AI solutions for defect detection, quality control, and equipment maintenance.</p>
            </div>
        </div>
    </div>

    <!-- Card 6 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/software-industry.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/software.png" alt="Software Industry">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Software Industry</h3>
                <p class="text-white text-center">Localized AI tools for code quality, testing, and documentation.</p>
            </div>
        </div>
    </div>

    <!-- Card 7 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/education.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/education.png" alt="Education">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Education</h3>
                <p class="text-white text-center">Personalized learning tools supporting native languages and local curricula.</p>
            </div>
        </div>
    </div>

    <!-- Card 8 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/fintech.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/fintech.png" alt="Fintech">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Fintech</h3>
                <p class="text-white text-center">AI solutions for financial inclusion, credit scoring, and fraud detection.</p>
            </div>
        </div>
    </div>

    <!-- Card 9 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/law-judiciary.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/law.png" alt="Law & Judiciary">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Law & Judiciary</h3>
                <p class="text-white text-center">Case tagging, prioritization, and legal research assistance.</p>
            </div>
        </div>
    </div>

    <!-- Card 10 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/defense-security.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/defence.png" alt="Defense & Security">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">⁠Defense & Strategic Organizations</h3>
                <p class="text-white text-center">Threat detection, surveillance analytics, and cyber-defense systems.</p>
            </div>
        </div>
    </div>

    <!-- Card 11 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/energy-climate.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/energy.png" alt="Energy & Climate">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">Energy & Climate Change</h3>
                <p class="text-white text-center">AI forecasting for energy demand and climate event response.</p>
            </div>
        </div>
    </div>

    <!-- Card 12 -->
    <div class="col-md-6 col-lg-3 mb-4" onclick="window.open('./problem-statements/int-collaborations.php', '_blank')">
        <div class="theme-card">
            <div class="theme-card-img-container">
                <img src="assets/images/collaborations.jpg" alt="International Collaborations">
            </div>
            <div class="theme-card-content">
                <h3 class="theme-title text-white text-center">International Collaborations</h3>
                <p class="text-white text-center">Standardized datasets and tools aligned with global AI ethics.</p>
            </div>
        </div>
    </div>
</div>

        </div>
    </section>
    
  


<!-- Roadmap Section -->

<section id="roadmap" class="pt-0 pb-0">
    <div class="container pt-0 pb-0">
        <div class="col-md-12 row">
            <div class="col-md-4 d-none d-md-block">
                <div class="row h-100 py-5">
                    <div class="col-lg-12 mt-5">
                        <h2 class="section-title">Challenge Roadmap</h2>
                        <p class="section-subtitle" style="text-align:left !important;margin-left:unset; margin-right:unset; margin-bottom:0px;">Follow the journey from registration to national finals</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-sm-12 row">
                <div class="rm_container" style="display: flex; justify-content: center; align-items: center;  padding-top:0px; margin-top:0px; margin-bottom:0px !important;">
                    <img id="road-map-timeline" src="assets/images/road-main.png" alt="Road Curve" style="max-width: 100%; height: 100% !important;    transform: scaleX(-1);" />         

      <!-- Timeline Steps -->
<div class="rm_step right right-top" style="top:20%;" id="step-launch">
    <div class="rm_step-circle">
        <img id="icon-launch" src="assets/images/launch-icon.png" alt="Portal Launch" style="height:40px;" class="step-icon" />
    </div>
    <div class="rm_step-content">
        <span class="rm_step-date">01 Sept 2025 - 30 Sept 2025</span>
        <h4 class="rm_step-title">Registrations Open</h4>
        <p class="rm_step-text">Teams and individuals can register through the online portal.</p>
    </div>
</div>

<div class="rm_step left left-top" style="top:40%;" id="step-register">
    <div class="rm_step-circle">
        <img id="icon-register" src="assets/images/register-icon.png" alt="Registrations Open" style="height:40px;" class="step-icon" />
    </div>
    <div class="rm_step-content">
        <span class="rm_step-date">01 Oct 2025 - 14 Oct 2025</span>
        <h4 class="rm_step-title">Evaluation</h4>
        <p class="rm_step-text">Based on Technical Excellence (40%), Innovation (20%), Relevance (20%), Documentation (20%)</p>
    </div>
</div>

<div class="rm_step right" style="top:60%;" id="step-finale">
    <div class="rm_step-circle">
        <img id="icon-finale" src="assets/images/finale-icon.png" alt="National Finals" style="height:30px;" class="step-icon" />
    </div>
    <div class="rm_step-content">
        <span class="rm_step-date">15 Oct 2025</span>
        <h4 class="rm_step-title">National Finals</h4>
        <p class="rm_step-text">Finalists compete in Islamabad before a national jury.</p>
    </div>
</div>

<div class="rm_step left" style="top:80%;" id="step-award">
    <div class="rm_step-circle">
        <img id="icon-award" src="assets/images/award-icon.png" alt="Awards Ceremony" style="height:40px;" class="step-icon" />
    </div>
    <div class="rm_step-content">
        <span class="rm_step-date">17 Oct 2025</span>
        <h4 class="rm_step-title">Awards Ceremony</h4>
        <p class="rm_step-text">Winners announced at the closing ceremony.</p>
    </div>
</div>

                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Roadmap Container */
.rm_container {
    position: relative;
    height: 800px;
    margin-top: 50px;
    margin-bottom: 50px;
    display: flex;
    justify-content: center;
}

/* Steps */
.rm_step {
    position: absolute;
    width: 300px;
    text-align: center;
    transform: translateY(-50%);
    z-index: 10;
    opacity: 0;
    animation: fadeIn 0.5s forwards;
}

.rm_step.left {
    left: calc(50% - 435px);
    animation-delay: 0.2s;
}
.rm_step.left-top {
    left: calc(50% - 491px);
    animation-delay: 0.2s;
}

.rm_step.right {
    right: calc(50% - 393px);
    animation-delay: 0.4s;
}
.rm_step.right-top {
    right: calc(50% - 303px);
    animation-delay: 0.4s;
}


@keyframes fadeIn {
    to { opacity: 1; }
}

.rm_step-circle {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    background: transparent;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    color:var(--primary-color);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.rm_step-circle:hover{
    background:linear-gradient(to right, #104d6c, #6fb68d) !important;
}

/* Portal Launch */
#step-launch .rm_step-circle:hover #icon-launch {
    content: url("assets/images/launch-icon-white.png");
}

/* Registrations */
#step-register .rm_step-circle:hover #icon-register{
    content: url("assets/images/register-icon-white.png");
}

/* National Finals */
#step-finale .rm_step-circle:hover #icon-finale {
    content: url("assets/images/finale-icon-white.png");
}

/* Awards */
#step-award .rm_step-circle:hover #icon-award {
    content: url("assets/images/award-icon-white.png");
}



.rm_step-content {
    background: white;
    border-radius: 12px;
    padding: 15px;
    margin-top: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.15);
    font-size:11px;
    position: relative;
}

.rm_step.left .rm_step-content:after {
    content: '';
    position: absolute;
    top: 20px;
    right: -12px;
    width: 0;
    height: 0;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-left: 12px solid white;
}

.rm_step.right .rm_step-content:after {
    content: '';
    position: absolute;
    top: 20px;
    left: -12px;
    width: 0;
    height: 0;
    border-top: 12px solid transparent;
    border-bottom: 12px solid transparent;
    border-right: 12px solid white;
}

/* Mobile Layout */
@media (max-width: 768px) {
   
    .rm_container {
        height: 350px !important;
    }
    
    .rm_step {
        width: 120px;
    }
    .rm_step-circle {
    width: 50px;
    height: 50px;
   
}
.rm_step-circle img {
   height:23px !important;
}
#icon-finale{
    height:19px !important;
}

.rm_step.left {
        left: 36px;
           top:77% !important;
    }
    
    .rm_step.right {
        right: -6px;
        top:60% !important;
    }
    
    .rm_step.right-top {
        right: 69px;
        top:20% !important;
    }
    
    .rm_step.left-top {
   left: 18px;
    top:35% !important;
}



.rm_step-title{
    font-size:12px !important;
    font-weight:700;
    line-height:1 !important;
}

.rm_step-content{
    max-width:107px !important;
    margin-top:5px !important;
}

.rm_step-text{
     display:none;
}

.rm_step.left .rm_step-content:after {
    top: 30px;
}
.rm_step.left-top .rm_step-content:after {
    top: 27px;
}

.rm_step.right .rm_step-content:after {
    top: 27px;
}
#road-map-timeline {
    margin-left:56px !important;
}


}
</style>


<section id="awards" class="py-5" style="background: #054554; overflow: hidden; margin-top:-1px;">
  <!-- Animated Background (optional) -->
  <div class="particle-layer" id="award-particles"></div>
  <div class="glow-effect"></div>

  <div class="container py-5 position-relative">
    <div class="row justify-content-center">
      <div class="col-lg-10 text-center">
        <h2 class="section-title text-white mb-4">Awards & Recognition</h2>
        <p class="section-subtitle" style="color: white; font-size: 1.15rem;">
          Prizes that propel innovation forward
        </p>
      </div>
    </div>

    <div class="award-carousel">
      <!-- GOLD -->
      <div class="award-card gold-award">
        <div class="award-image">
        <!-- Gold Shield SVG -->
<img src="assets/images/gold-trophy1.png" style="height:350px;" />
        </div>
        <div class="award-info">
          <h3>GOLD CHAMPION</h3>
          <div class="prize-amount">25,00,000 <span>PKR</span></div>
          <div class="plus-benefits">+ Incubation Program</div>
        </div>
      </div>

      <!-- SILVER -->
      <div class="award-card silver-award">
        <div class="award-image">
      <img src="assets/images/silver-trophy1.png" style="height:350px;" />
        </div>
        <div class="award-info">
          <h3>SILVER EXCELLENCE</h3>
          <div class="prize-amount">20,00,000 <span>PKR</span></div>
          <div class="plus-benefits">+ Mentorship</div>
        </div>
      </div>

      <!-- BRONZE -->
      <div class="award-card bronze-award">
        <div class="award-image">
          <img src="assets/images/bronze-trophy1.png" style="height:350px;" />
        </div>
        <div class="award-info">
          <h3>BRONZE INNOVATOR</h3>
          <div class="prize-amount">15,00,000 <span>PKR</span></div>
          <div class="plus-benefits">+ Mentorship</div>
        </div>
      </div>

      <!-- WOMEN-LED CHAMPIONS -->
      <div class="award-card special-award">
        <div class="award-image">
            <img src="assets/images/women-led1.png" style="height:350px;" />
        </div>
        <div class="award-info">
          <h3>WOMEN IN TECH</h3>
          <div class="prize-amount">10,00,000 <span>PKR</span></div>
          <div class="plus-benefits">+ Mentorship</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Floating Orbs (optional) -->
  <div class="floating-orb gold-orb"></div>
  <div class="floating-orb silver-orb"></div>
  <div class="floating-orb bronze-orb"></div>
</section>



<style>
 
/* Layout (unchanged where possible) */
#awards{position:relative;min-height:100vh;display:flex;align-items:center}
.holographic-text{
  color:white !important;
  background: transparent !important;
    
}

.award-carousel{display:flex;justify-content:center;flex-wrap:wrap;gap:32px;padding:40px 0}
.award-card{position:relative;width:240px;height:430px;display:flex;flex-direction:column;align-items:center}
.award-image{width:200px;height:300px;display:flex;justify-content:center;align-items:center;margin-bottom:14px}
.award-image svg{width:100%;height:100%}
.award-info{text-align:center;color:#fff;padding:0 10px;width:100%; margin-top:15px;}
.award-info h3{font-size:1.2rem;margin-bottom:8px;text-shadow:0 2px 5px rgba(0,0,0,.5)}
.prize-amount{font-size:1.9rem;font-weight:800;margin-bottom:4px}
.prize-amount span{font-size:1rem;font-weight:400}
.plus-benefits{font-size:1rem;opacity:1; font-weight:600;}

.gold-award .award-info h3{color:#FFD700;text-shadow:0 0 10px rgba(255,215,0,.3)}
.silver-award .award-info h3{color:#C0C0C0;text-shadow:0 0 10px rgba(192,192,192,.3)}
.bronze-award .award-info h3{color:#CD7F32;text-shadow:0 0 10px rgba(205,127,50,.3)}
.special-award .award-info h3{color:#FF6EA0;text-shadow:0 0 10px rgba(255,110,160,.3)}

.particle-layer{position:absolute;inset:0;z-index:0}
.glow-effect{position:absolute;top:50%;left:50%;width:320px;height:320px;background:radial-gradient(circle,rgba(0,255,255,.08) 0%,transparent 70%);transform:translate(-50%,-50%);z-index:0}
.floating-orb{position:absolute;border-radius:50%;filter:blur(30px);opacity:.24;z-index:0}
.gold-orb{width:200px;height:200px;background:radial-gradient(circle,#FFD700,transparent 70%);top:18%;left:10%;animation:float 12s ease-in-out infinite}
.silver-orb{width:150px;height:150px;background:radial-gradient(circle,#C0C0C0,transparent 70%);bottom:15%;right:15%;animation:float 15s ease-in-out infinite reverse}
.bronze-orb{width:180px;height:180px;background:radial-gradient(circle,#CD7F32,transparent 70%);top:60%;left:20%;animation:float 18s ease-in-out infinite 2s}
@keyframes float{0%{transform:translate(0,0)}50%{transform:translate(30px,50px)}100%{transform:translate(0,0)}}

@media (max-width: 992px){.award-card{width:220px;height:410px}}
@media (max-width: 768px){
  .award-carousel{flex-direction:column;align-items:center}
  .award-card{margin-bottom:28px}
  .holographic-text{font-size:2.4rem}
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function () {
  // Sparkles always on; minimal interactivity (no hover repulse)
  if (document.getElementById('award-particles')) {
    particlesJS('award-particles', {
      particles: {
        number: { value: 70, density: { enable: true, value_area: 800 } },
        color: { value: "#ffffff" },
        shape: { type: "circle" },
        opacity: { value: 0.5, random: true },
        size: { value: 2.5, random: true },
        line_linked: { enable: true, distance: 140, color: "#ffffff", opacity: 0.25, width: 1 },
        move: { enable: true, speed: 1.4, direction: "none", random: true, straight: false, out_mode: "out" }
      },
      interactivity: { events: { onhover: { enable: false }, onclick: { enable: false } } },
      retina_detect: true
    });
  }
});
</script>



<!-- Datasets & Resources Section -->
<section id="datasets-resources" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-5">
                <h2 class="section-title">Datasets & Resources</h2>
                <p class="section-subtitle">All Phase-1 problems must be solved using <strong>licensed datasets with proof, under audit trail</strong>. Suggested but not limited sources:</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="resources-grid">
                    <div class="resource-item">
                        <div class="resource-icon">
                            <i class="fas fa-database"></i>
                        </div>
                        <h4>Kaggle</h4>
                    </div>
                    
                    <div class="resource-item">
                        <div class="resource-icon">
                            <i class="fas fa-chart-bar"></i>
                        </div>
                        <h4>UCI ML Repository</h4>
                    </div>
                    
                    <div class="resource-item">
                        <div class="resource-icon">
                            <i class="fas fa-globe-americas"></i>
                        </div>
                        <h4>WHO, FAO, World Bank, UNDP</h4>
                    </div>
                    
                    <div class="resource-item">
                        <div class="resource-icon">
                            <i class="fas fa-language"></i>
                        </div>
                        <h4>HuggingFace (NLP)</h4>
                    </div>
                    
                    <div class="resource-item">
                        <div class="resource-icon">
                            <i class="fas fa-cloud-sun"></i>
                        </div>
                        <h4>OpenWeather API</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    #datasets-resources {
        background: #f5f5f5;
        position: relative;
        overflow: hidden;
    }
    
    /* Slick slider customizations */
        .resources-slider {
            margin: 0 -15px;
        }
        
        .slick-track{
            padding:10px !important;
        }
        
        .resource-item {
            display: flex !important;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 1.5rem 1rem;
            margin: 0 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            cursor: pointer;
            height: auto;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .resource-item:hover {
            background: #fff;
            border-color: var(--primary-color, #4e54c8);
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .resource-icon {
            width: 70px;
            height: 70px;
            background: rgba(5, 99, 107, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }
        
        .resource-item:hover .resource-icon {
            background: var(--primary-color, #4e54c8);
            transform: scale(1.1);
        }
        
        .resource-icon i {
            font-size: 1.8rem;
            color: var(--primary-color, #4e54c8);
            transition: all 0.3s ease;
        }
        
        .resource-item:hover .resource-icon i {
            color: white;
        }
        
        .resource-item h4 {
            margin: 0;
            color: #343a40;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 1.1rem;
            line-height: 1.4;
        }
        
        .resource-item:hover h4 {
            color: var(--primary-color, #4e54c8);
        }
        
        /* Slick slider arrows */
        .slick-prev, .slick-next {
            width: 40px;
            height: 40px;
            z-index: 10;
        }
        
        .slick-prev:before, .slick-next:before {
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 30px;
            color: var(--primary-color);
            opacity: 0.7;
        }
        
        .slick-prev:before {
            content: '\f053';
        }
        
        .slick-next:before {
            content: '\f054';
        }
        
        .slick-prev {
            left: -45px;
        }
        
        .slick-next {
            right: -45px;
        }
        
        /* Slick dots */
        .slick-dots {
            bottom: -40px;
        }
        
        .slick-dots li button:before {
            font-size: 12px;
            color: var(--primary-color);
            opacity: 0.5;
        }
        
        .slick-dots li.slick-active button:before {
            opacity: 1;
            color: var(--primary-color);
        }
        
      
        @media (max-width: 1200px) {
            .slick-prev {
                left: -25px;
            }
            .slick-next {
                right: -25px;
            }
        }
        
        @media (max-width: 768px) {
         
            .resource-item {
                padding: 1rem 0.5rem;
            }
            
            .resource-icon {
                width: 50px;
                height: 50px;
                margin-bottom: 0.8rem;
            }
            
            .resource-icon i {
                font-size: 1.4rem;
            }
            
            .resource-item h4 {
                font-size: 0.95rem;
            }
            
            .slick-prev, .slick-next {
                display: none !important;
            }
        }
</style>

<script>



$(document).ready(function(){
 
     $('.resources-grid').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    focusOnSelect: false,
    focusOnChange: false,
    accessibility: false,
    pauseOnFocus: false,
    pauseOnHover: false,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          infinite: true,
          dots: false
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    
    ]
  });
});

</script>

<!-- IP & Data Usage Policy Teaser Section -->
<section id="ip-policy-teaser" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center mb-5">
                <h2 class="section-title">Intellectual Property & Data Usage</h2>
                <p class="section-subtitle">Understanding your rights and responsibilities for the Uraan AI Techathon</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <!-- Policy Point 1 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-copyright"></i>
                    </div>
                    <h4 class="policy-point">IP Ownership</h4>
                    <p class="policy-desc">Teams retain ownership of all intellectual property created during the competition</p>
                </div>
            </div>
            
            <!-- Policy Point 2 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h4 class="policy-point">License Terms</h4>
                    <p class="policy-desc">Government receives license for evaluation and public service implementation</p>
                </div>
            </div>
            
            <!-- Policy Point 3 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-database"></i>
                    </div>
                    <h4 class="policy-point">Data Usage</h4>
                    <p class="policy-desc">Strict guidelines on dataset usage and confidentiality requirements</p>
                </div>
            </div>
            
            <!-- Policy Point 4 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h4 class="policy-point">Compliance</h4>
                    <p class="policy-desc">Clear rules to ensure fair competition and legal compliance</p>
                </div>
            </div>
            
            <!-- Policy Point 5 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h4 class="policy-point">Incubation Terms</h4>
                    <p class="policy-desc">Special agreements for winning teams entering the incubation program</p>
                </div>
            </div>
            
            <!-- Policy Point 6 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <h4 class="policy-point">Confidentiality</h4>
                    <p class="policy-desc">NDA requirements for sensitive government data access</p>
                </div>
            </div>
            
            <!-- Policy Point 7 -->
            <div class="col-md-6 col-lg-3 mb-4">
                <div class="policy-teaser-card h-100">
                    <div class="policy-icon mb-3">
                        <i class="fas fa-exclamation-triangle"></i>
                    </div>
                    <h4 class="policy-point">Non-Compliance</h4>
                    <p class="policy-desc">Immediate disqualification for policy violations</p>
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-12 text-center">
                <a href="ip-data-usage.php" style="background: linear-gradient(to right, #104d6c, #6fb68d) !important;" class="btn reg-button-modal btn-lg mt-4 d-inline-flex align-items-center"> 
                    Read Full Policy    
                    <span class="arrow-circle ms-2">
                        <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<style>
    /* IP Policy Teaser Section Styles */
    #ip-policy-teaser {
        background: #fff;
        position: relative;
        overflow: hidden;
    }
    
    .section-title, .section-subtitle {
        color: var(--primary-color);
    }
   
    .policy-teaser-card {
        background: var(--primary-color);
        border-radius: 12px;
        padding: 2rem 1.5rem;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
        text-align: center;
        color: white;
    }
    
    .policy-teaser-card:hover {
        background: white;
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
    }
    
    .policy-icon {
        width: 70px;
        height: 70px;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.5rem;
        transition: all 0.3s ease;
    }
    
    .policy-teaser-card:hover .policy-icon {
        background: var(--primary-color);
        transform: scale(1.1) rotate(5deg);
    }
    
    .policy-icon i {
        font-size: 1.8rem;
        color: white;
        transition: all 0.3s ease;
    }
    
    .policy-teaser-card:hover .policy-icon i {
        color: white;
    }
    
    .policy-point {
        font-size: 1.3rem;
        font-weight: 600;
        margin-bottom: 1rem;
        color: white;
        transition: all 0.3s ease;
    }
    
    .policy-teaser-card:hover .policy-point {
        color: var(--primary-color);
    }
    
    .policy-desc {
        color: rgba(255, 255, 255, 0.9);
        font-size: 0.95rem;
        line-height: 1.5;
        margin-bottom: 0;
        transition: all 0.3s ease;
    }
    
    .policy-teaser-card:hover .policy-desc {
        color: #495057;
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .policy-point {
            font-size: 1.2rem;
        }
        
        .policy-icon {
            width: 60px;
            height: 60px;
        }
        
        .policy-icon i {
            font-size: 1.5rem;
        }
    }
    
    @media (max-width: 768px) {
        .policy-teaser-card {
            padding: 1.5rem;
        }
    }
    
    @media (max-width: 576px) {
        .policy-point {
            font-size: 1.1rem;
        }
        
        .policy-desc {
            font-size: 0.9rem;
        }
        
        .policy-icon {
            width: 50px;
            height: 50px;
        }
        
        .policy-icon i {
            font-size: 1.3rem;
        }
    }
</style>

<script>
    // Add animation to the policy cards when they come into view
    document.addEventListener('DOMContentLoaded', function() {
        const policyCards = document.querySelectorAll('.policy-teaser-card');
        
        // Intersection Observer to animate cards when they enter viewport
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = 1;
                    entry.target.style.transform = 'translateY(0)';
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });
        
        // Initialize cards with hidden state and observe them
        policyCards.forEach((card, index) => {
            card.style.opacity = 0;
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
            card.style.transitionDelay = (index * 0.1) + 's';
            
            observer.observe(card);
        });
    });
</script>

 <section id="faq-teaser" class="py-5" >
        <div class="container">
            <div class="row mt-5">
                <div class="col-lg-6">
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="section-title" style="text-align:left !important; width:100%;">Frequently Asked Questions</h2>
                        <img src="assets/images/faq-image.jpg" alt="FAQs" class="faq-image">
                    </div>
                </div>
                <div class="ai-cards-column col-lg-6">
                    <div class="faq-category mb-5" id="faqAccordion">
                        <div class="faq-item mb-4">
                            <div class="faq-question" data-bs-toggle="collapse" data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                                <span>Q1. What is Uraan AI Techathon 1.0?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div id="q1" class="collapse show" data-bs-parent="#faqAccordion">
                                <div class="card card-body">
                                    A national-level AI competition under the E-Pakistan Uraan Program by the Ministry of Planning, Development & Special Initiatives. Participants will solve Pakistan-specific challenges in 12 thematic areas, with solutions evolving into real-world products/services.
                                </div>
                            </div>
                        </div>
                        
                        <div class="faq-item mb-4">
                            <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false" aria-controls="q2">
                                <span>Q2. Who can participate?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div id="q2" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card card-body">
                                    <ul>
                                        <li>Teams of up to 4 members (maximum).</li>
                                        <li>Each team must include at least 1 currently enrolled university student.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="faq-item mb-4">
                            <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false" aria-controls="q3">
                                <span>Q3. Why is one university student mandatory?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div id="q3" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card card-body">
                                    To ensure strong academia-industry linkages and provide learning opportunities for students.
                                </div>
                            </div>
                        </div>
                        
                        <div class="faq-item mb-4">
                            <div class="faq-question collapsed" data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false" aria-controls="q4">
                                <span>Q4. What are the timelines?</span>
                                <i class="fas fa-chevron-down"></i>
                            </div>
                            <div id="q4" class="collapse" data-bs-parent="#faqAccordion">
                                <div class="card card-body">
                                    <ul>
                                        <li>Registrations & Submission Start: 1 Sept</li>
                                        <li>Submission Deadline: 30 Sept</li>
                                        <li>Initial Evaluation Completed: 14 Oct</li>
                                        <li>Results Announced: 15 Oct</li>
                                        <li>Techathon Day (Islamabad): 17 Oct (Winners awarded the same day)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 text-center">
                        <a href="faqs.php" style="background: linear-gradient(to right, #104d6c, #6fb68d) !important;" class="btn reg-button-modal btn-lg mt-4 d-inline-flex align-items-center"> 
                            View All FAQs <span class="arrow-circle ms-2"><i class="fas fa-arrow-right"></i></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <style>
     #faq-teaser{
         background: #f5f5f5;
     }
        .faq-image {
            height: 350px;
            border-radius: 20px;
            object-fit: cover;
            width: 100%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .faq-item {
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 15px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.08);
            background: white;
        }
        .faq-question {
            padding: 18px 20px;
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            color: #104d6c;
            transition: all 0.3s ease;
        }
        .faq-question:hover {
            background: linear-gradient(to right, #e9ecef, #dde1e6);
        }
        .faq-question[aria-expanded="true"] {
            background: linear-gradient(to right, #104d6c, #6fb68d);
            color: white;
        }
        .faq-question[aria-expanded="true"] i {
            transform: rotate(180deg);
        }
        .faq-question i {
            transition: transform 0.3s ease;
        }
        .faq-answer .card-body {
            padding: 20px;
            line-height: 1.6;
            transition: all 0.3s ease;
        }
        
        /* Gradient applied immediately when card is open */
        .faq-item .collapse.show .card-body {
            background: linear-gradient(to right, #104d6c, #6fb68d);
            color: white;
            border: none;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
        }
      
     
    </style>
     <script>
        // Additional JavaScript to ensure smooth transitions
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.faq-question');
            
            faqItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Remove the gradient from all answers first
                    document.querySelectorAll('.faq-answer .card-body').forEach(answer => {
                        answer.style.background = '';
                        answer.style.color = '';
                    });
                    
                    // Apply gradient to the active answer immediately
                    const targetId = this.getAttribute('data-bs-target');
                    const targetAnswer = document.querySelector(`${targetId} .card-body`);
                    if (targetAnswer) {
                        targetAnswer.style.background = 'linear-gradient(to right, #104d6c, #6fb68d)';
                        targetAnswer.style.color = 'white';
                    }
                });
            });
        });
    </script>
    
    <section id="partners-sec" class="py-5">
        
          <div class="row justify-content-center">
                <div class="col-lg-8 text-center ">
                    <h2 class="section-title text-white">Partners & Stakeholders</h2>
                    <p class="section-subtitle text-white" style="margin-bottom:0px !important;">Collaborating organizations supporting the URAAN AI Challenge</p>
                   
            </div>
            </div>
        
     <div class="container-fluid pt-0 pb-0">
   

    <!-- Unified Swiper -->
    <div class="swiper myPartnersSwiper mt-5">
      <div class="swiper-wrapper">

        <!-- Slide 1: IT Industry Lead Partner -->
        <div class="swiper-slide text-center">
          <h3 class="text-white mb-4"><strong>IT Industry Lead Partner</strong></h3>
          <img src="assets/images/pasha-logo.png" style="height:120px;" alt="PASHA" class="partner-logo img-fluid">
        </div>

        <!-- Slide 2: Supporting Partners -->
        <div class="swiper-slide text-center">
          <h3 class="text-white mb-4"><strong>Supporting Partners</strong></h3>
          <div class="row justify-content-center">
            <div class="col-6 col-md-3 mb-3">
              <img src="https://pc.gov.pk/images/logo-white.png" alt="MoPDSI" class="partner-logo img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-3">
              <img src="assets/images/inno-support-fund-logo.png" style="height:90px;" alt="Innovation Support Fund" class="partner-logo img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-3">
              <img src="assets/images/ncai-logo.png" style="height:110px;" alt="NCAI" class="partner-logo img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-3">
              <img src="https://crystalpng.com/wp-content/uploads/2025/04/hec-logo.png" alt="HEC" style="height:90px;background:white;" class="partner-logo img-fluid">
            </div>
          </div>
        </div>

      </div>

      <!-- Navigation + Pagination -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
      <div class="swiper-pagination"></div>
    </div>
  </div>

    </section>
    
    
    
    <style>
         #partners-sec {
        background: url('assets/images/bg-grad.jpg') no-repeat center center;
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    
     .swiper {
  padding: 20px 0;
}

.swiper-slide img {
  max-height: 120px;
  object-fit: contain;
  margin: 0 auto;
}
/* Make Swiper arrows white */
.swiper-button-next,
.swiper-button-prev {
  color: #fff !important;
}

/* Make Swiper pagination dots white */
.swiper-pagination-bullet {
  background: #fff !important;
  opacity: 0.7;
}

.swiper-pagination-bullet-active {
  background: #fff !important;
  opacity: 1;
}
    
    </style>
    
    <!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
    <script>
 var partnersSwiper = new Swiper(".myPartnersSwiper", {
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>

   <!-- Register Section -->
    <section id="register" class="py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Ready to Compete?</h2>
                    <p class="section-subtitle mb-0 pb-0">Register your team now and be part of Pakistan's AI revolution</p>
                    <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" style="background: linear-gradient(to right, #104d6c, #6fb68d) !important;" class="btn reg-button-modal btn-lg mt-4 d-inline-flex align-items-center">Register Now   <span class="arrow-circle ms-2">
        <i class="fas fa-arrow-right"></i>
    </span></a>
                </div>
            </div>
        </div>
    </section>
   
 
 <?php include 'components/footer.php'; ?>
 
    <?php include 'components/register-now.php'; ?>
      <?php include 'components/participation-guidelines.php'; ?>
    <!-- Countdown Timer -->
      
<style type="text/css">
       
       #partners, #themes{
            background:url('assets/images/bg-grad.jpg') no-repeat center center;
            background-size:cover;
        }

.section-title {
  font-size: 2.5rem;
  font-weight: 700;
  color: var(--primary-color);
  margin-bottom: 40px; /* Increased to accommodate underline */
  position: relative;
  display: inline-block;
  line-height: 1.3; /* Better for multi-line */
}

/* Solution 1: Simple underline (works for both single and multi-line) */
.section-title::after {
  content: '';
  position: absolute;
  bottom: -15px; /* Adjust based on your preference */
  left: 0;
  width: 60px;
  height: 4px;
  background: var(--accent-color);
  border-radius: 2px;
}
        
        .section-subtitle {
            color: #666;
            font-size: 1.2rem;
            margin-bottom: 50px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .card-feature {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            border-top: 3px solid var(--accent-color);
        }
        
        .card-feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .card-icon {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .category-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: var(--transition);
            height: 100%;
            border-top: 5px solid var(--secondary-color);
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .category-card .card-header {
            background-color: white;
            border-bottom: none;
            padding: 20px;
            font-weight: 600;
            color: var(--primary-color);
        }
        
        .category-card .card-body {
            padding: 20px;
        }
        
       
      
        
        .partner-logo {
            height: 80px;
            margin: 15px;
            opacity: 1;
            transition: var(--transition);
        }
        
        .partner-logo:hover {
             transform: scale(1.1);
        }
        
        .footer {
            background-color: var(--primary-color);
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
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin-right: 10px;
            transition: var(--transition);
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
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .hero-subtitle {
                font-size: 1.2rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .timeline::after {
                left: 31px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 25px;
            }
            
            .timeline-item::after {
                left: 18px;
            }
            
            .left::before, .right::before {
                border-width: 10px 10px 10px 0;
                border-color: transparent white transparent transparent;
                left: 60px;
            }
            
            .left::after, .right::after {
                left: 18px;
            }
            
          
        }
        
      /* Enhanced Card Design Using Your Variables */
.theme-card {
    border-radius: 12px;
    overflow: hidden;
    transition: var(--transition);
    cursor: pointer;
    position: relative;
    height: 100%;
    display: flex;
    flex-direction: column;
    padding:20px;
 
    
     /* From https://css.glass */
background: rgba(255, 255, 255, 0.2) !important;
border-radius: 16px !important;
box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1) !important;
backdrop-filter: blur(5px) !important;
-webkit-backdrop-filter: blur(5px) !important;
border: 1px solid rgba(255, 255, 255, 0.3) !important;
}

.theme-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
}

.theme-card-img-container {
    position: relative;
    height: 300px;
    overflow: hidden;
    border-radius:12px;
}

.theme-card img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.5s ease;
    
   
}

.theme-card:hover img {
    transform: scale(1.05);
}



/* Card Content */
.theme-card-content {
  padding-top:20px;
    flex-grow: 1;
   
   
}

.theme-card-content p
{
     color: black;
    text-align: justify;
     font-size:13px;
}


.theme-title {
    margin: 0 0 0.5rem;
    font-size: 1.25rem;
    font-weight: 600;
    color: var(--accent-color);
}



/* Overlay Title (shown on image hover) */
.overlay-title {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    padding: 1rem;
    background: rgba(5, 99, 107, 0.9);
    color: var(--light-text);
    transform: translateY(100%);
    transition: var(--transition);
}

.theme-card:hover .overlay-title {
    transform: translateY(0);
}


/* Individual backgrounds */
.card-foundation { background-image: url('assets/images/foundations-infrastructure.jpg'); }
.card-governance { background-image: url('assets/images/governance.jpg'); }
.card-health { background-image: url('assets/images/health.jpg'); }
.card-agriculture { background-image: url('assets/images/agriculture.jpg'); }
.card-manufacturing { background-image: url('assets/images/manufacturing.jpg'); }
.card-software { background-image: url('assets/images/software.jpg'); }
.card-education { background-image: url('assets/images/education.jpg'); }
.card-fintech { background-image: url('assets/images/fintech.jpg'); }
.card-law { background-image: url('assets/images/law.jpg'); }
.card-defense { background-image: url('assets/images/defense.jpg'); }
.card-energy { background-image: url('assets/images/energy.jpg'); }
.card-international { background-image: url('assets/images/international.jpg'); }
   </style>
</body>
</html>
<?php include '../components/header.php'; ?>

<!-- Theme Header -->
<header class="theme-header">
    <div class="header-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <h1 class="header-title">Healthcare</h1>
                <p class="header-subtitle">AI-powered tools for rural and public health institutions</p>
                <div class="header-scroll-indicator">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Problem Statement Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h2 class="section-title">Problem Statement / Scenario</h2>
                
                <div class="p-4 mb-4" style="background: rgba(255, 255, 255, 0.1); border-left: 4px solid var(--accent-color); border-radius: 0 8px 8px 0;">
                    <p class="lead">Rural Pakistan lacks diagnostic tools, digitized prescriptions, and predictive health monitoring.</p>
                </div>

                <!-- Commercialization Vision Section -->
                <div class="commercialization-card mb-5">
                    <div class="commercialization-icon">
                        <i class="fas fa-rocket"></i>
                    </div>
                    <div class="commercialization-content">
                        <h3 class="commercialization-title">Commercialization Vision</h3>
                        <p class="commercialization-text">If the winner team solves all the problems in Phase 1 (Online 1 Month), Phase 2 (Techathon Day) and Phase 3 (Incubation + Mentorship only for Winners), what product or service will it actually become at the commercialization stage?</p>
                        <div class="commercialization-product">
                            <div class="product-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <div class="product-details">
                                <h4 class="product-name">SehatAI</h4>
                                <p class="product-description">AI-powered rural diagnostic + prescription + epidemic prediction platform, integrated with NADRA e-Health ID</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <h3 class="mt-5 mb-3" style="color: var(--primary-color);">Phase-1 (1 Month Online Work) - Sub-Problems</h3>
                <ul>
                    <li>AI for X-ray or image analysis (TB, pneumonia)</li>
                    <li>Prescription digitization and validation system</li>
                    <li>Risk scoring model for diabetes/heart disease</li>
                </ul>
                
                <h3 class="mt-5 mb-3" style="color: var(--primary-color);">Technical Requirements</h3>
                <ul>
                    <li>Train CNN on TB/chest X-ray dataset (open-source like NIH Chest X-rays)</li>
                    <li>OCR-based prescription digitization (Urdu + English)</li>
                    <li>Risk scoring model using demographic + health survey data</li>
                </ul>
                
                <h3 class="mt-5 mb-3" style="color: var(--primary-color);">Evaluation Criteria</h3>
                <ul>
                    <li>Diagnostic accuracy ≥ 85% (30%)</li>
                    <li>Prescription OCR accuracy ≥ 80% (25%)</li>
                    <li>Risk scoring AUC ≥ 0.8 (25%)</li>
                    <li>Code quality & reproducibility (20%)</li>
                </ul>
                
                <h3 class="mt-5 mb-3" style="color: var(--primary-color);">Why It's Relevant (Pakistan-specific)</h3>
                <ul>
                    <li>Over 60% of the population depends on public or rural clinics</li>
                    <li>Pakistan's digital health systems lack local AI integration, despite increasing disease burden</li>
                    <li>Enables early detection, reduces referrals, and improves patient outcomes with minimal additional cost</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<?php include '../components/footer.php'; ?>
<?php include '../components/register-now.php'; ?>

<style>
    /* Header Styles */
    .theme-header {
        position: relative;
        height: 100vh;
        min-height: 600px;
        background: url('../assets/images/health.jpg') no-repeat center center;
        background-size: cover;
        color: var(--light-text);
        display: flex;
        align-items: center;
        overflow: hidden;
    }
    
    .header-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(5, 99, 107, 0.7);
        background: linear-gradient(135deg, rgba(5, 99, 107, 0.9) 0%, rgba(0, 107, 55, 0.8) 100%);
    }
    
    .header-title {
        font-size: 3.5rem;
        font-weight: 800;
        margin-bottom: 1rem;
        text-shadow: 0 2px 10px rgba(0,0,0,0.3);
        position: relative;
        animation: fadeInDown 1s ease;
    }
    
    .header-subtitle {
        font-size: 1.5rem;
        margin-bottom: 2rem;
        opacity: 0.9;
        text-shadow: 0 1px 5px rgba(0,0,0,0.2);
        animation: fadeInUp 1s ease 0.3s both;
    }
    
    .header-scroll-indicator {
        position: absolute;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        font-size: 1.5rem;
        animation: bounce 2s infinite;
        cursor: pointer;
    }
    
    /* Section Styles */
    .section-title {
        font-size: 2.2rem;
        font-weight: 700;
        color: var(--primary-color);
        margin-bottom: 2rem;
        position: relative;
        padding-bottom: 15px;
    }
    
    .section-title:after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 60px;
        height: 4px;
        background: var(--accent-color);
    }
    
    .highlight-box {
        background: rgba(255, 255, 255, 0.1);
        border-left: 4px solid var(--accent-color);
        border-radius: 0 8px 8px 0;
        backdrop-filter: blur(5px);
    }
    
    /* Commercialization Section Styles */
    .commercialization-card {
        display: flex;
        background: linear-gradient(135deg, rgba(5, 99, 107, 0.1) 0%, rgba(0, 107, 55, 0.1) 100%);
        border-radius: 12px;
        padding: 25px;
        border-left: 4px solid var(--accent-color);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    
    .commercialization-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
    }
    
    .commercialization-icon {
        width: 70px;
        height: 70px;
        background: rgba(254, 197, 28, 0.15);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-color);
        font-size: 1.8rem;
        margin-right: 20px;
        flex-shrink: 0;
    }
    
    .commercialization-content {
        flex: 1;
    }
    
    .commercialization-title {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 10px;
        font-size: 1.4rem;
    }
    
    .commercialization-text {
        color: var(--dark-text);
        margin-bottom: 20px;
        line-height: 1.6;
    }
    
    .commercialization-product {
        display: flex;
        align-items: center;
        background: rgba(255, 255, 255, 0.8);
        padding: 15px;
        border-radius: 8px;
        border-left: 3px solid var(--primary-color);
    }
    
    .product-icon {
        width: 50px;
        height: 50px;
        background: rgba(5, 99, 107, 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
        font-size: 1.3rem;
        margin-right: 15px;
        flex-shrink: 0;
    }
    
    .product-name {
        color: var(--primary-color);
        font-weight: 700;
        margin-bottom: 5px;
        font-size: 1.2rem;
    }
    
    .product-description {
        color: var(--dark-text);
        margin-bottom: 0;
        font-size: 0.95rem;
    }
    
    /* Animations */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {
            transform: translateY(0) translateX(-50%);
        }
        40% {
            transform: translateY(-20px) translateX(-50%);
        }
        60% {
            transform: translateY(-10px) translateX(-50%);
        }
    }
    
    /* Responsive Styles */
    @media (max-width: 992px) {
        .header-title {
            font-size: 3rem;
        }
        
        .header-subtitle {
            font-size: 1.3rem;
        }
    }
    
    @media (max-width: 768px) {
        .theme-header {
            min-height: 500px;
            height: 80vh;
        }
        
        .header-title {
            font-size: 2.5rem;
        }
        
        .header-subtitle {
            font-size: 1.1rem;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
        
        .commercialization-card {
            flex-direction: column;
            text-align: center;
        }
        
        .commercialization-icon {
            margin-right: 0;
            margin-bottom: 15px;
        }
        
        .commercialization-product {
            flex-direction: column;
            text-align: center;
        }
        
        .product-icon {
            margin-right: 0;
            margin-bottom: 10px;
        }
    }
    
    @media (max-width: 576px) {
        .header-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.6rem;
        }
    }
</style>

<script>
    // Smooth scroll for the header indicator
    document.querySelector('.header-scroll-indicator').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.section-title').scrollIntoView({
            behavior: 'smooth'
        });
    });
</script>
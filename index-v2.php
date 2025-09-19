<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Uraan AI Techathon 2025 - Harnessing AI for Pakistan</title>
    <!-- Header content will be loaded from header.html -->
</head>
<body>
   <?php
   include('components/header.php');
?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 hero-content">
                    <h1 class="hero-title">Uraan AI Techathon 2025</h1>
                    <p class="hero-subtitle">Harnessing Artificial Intelligence for Uraan Pakistan</p>
                    <div class="countdown mt-5">
                        <div class="countdown-item">
                            <div class="countdown-number" id="days">00</div>
                            <div class="countdown-label">Days</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="hours">00</div>
                            <div class="countdown-label">Hours</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="minutes">00</div>
                            <div class="countdown-label">Minutes</div>
                        </div>
                        <div class="countdown-item">
                            <div class="countdown-number" id="seconds">00</div>
                            <div class="countdown-label">Seconds</div>
                        </div>
                    </div>
                    <div class="mt-4">
                        <a href="register.html" class="btn btn-tech btn-lg me-3">Register Now</a>
                        <a href="about.html" class="btn btn-outline-tech btn-lg">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="assets/images/ai-hero-image.png" alt="AI Innovation" class="img-fluid floating">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">About the Techathon</h2>
                    <p class="section-subtitle">A national AI innovation competition aimed at mobilizing Pakistan's brightest minds to develop AI solutions for priority sectors aligned with national policy objectives.</p>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="tech-card p-4 h-100">
                        <div class="card-icon mb-4">
                            <i class="fas fa-bullseye fa-3x" style="color: var(--secondary-color);"></i>
                        </div>
                        <h3>Objectives</h3>
                        <p>Mobilize Pakistan's youth and professionals to solve real-world challenges using AI, build national capacity, and promote inclusive participation.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="tech-card p-4 h-100">
                        <div class="card-icon mb-4">
                            <i class="fas fa-users fa-3x" style="color: var(--secondary-color);"></i>
                        </div>
                        <h3>Participants</h3>
                        <p>Open to students, professionals, and researchers across Pakistan with categories for different age groups and expertise levels.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="tech-card p-4 h-100">
                        <div class="card-icon mb-4">
                            <i class="fas fa-trophy fa-3x" style="color: var(--secondary-color);"></i>
                        </div>
                        <h3>Impact</h3>
                        <p>Cultivate national AI talent, develop scalable solutions, strengthen academia-industry-policy nexus, and enhance Pakistan's global AI visibility.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section id="categories" class="section bg-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="section-title">Participation Categories</h2>
                    <p class="section-subtitle">Three inclusive categories designed to engage participants at all levels of expertise</p>
                </div>
            </div>
            
            <div class="row mt-5">
                <div class="col-md-4 mb-4">
                    <div class="tech-card h-100">
                        <div class="card-header text-center">
                            <i class="fas fa-user-tie fa-3x mb-3" style="color: var(--secondary-color);"></i>
                            <h3>AI Experts</h3>
                            <p class="mb-0">25 years and above</p>
                        </div>
                        <div class="card-body">
                            <p>For professionals, graduates, and researchers to develop MVPs and near-deployable solutions.</p>
                            <ul class="list-unstyled">
                                <li><i class="fas fa-check-circle me-2" style="color: var(--secondary-color);"></i> Functional prototypes</li>
                                <li><i class="fas fa-check-circle me-2" style="color: var(--secondary-color);"></i> Real-world implementation</li>
                                <li><i class="fas fa-check-circle me-2" style="color: var(--secondary-color);"></i> Industry collaboration</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Other category cards -->
            </div>
        </div>
    </section>

   <?php
   include('components/footer.php');
?>
</body>
</html>
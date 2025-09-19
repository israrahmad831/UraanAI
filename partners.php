<?php include './components/header.php'; ?>


<!-- Swiper CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Theme Header -->
<header class="theme-header">
    <div class="header-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <h1 class="header-title">Partners & Stakeholders</h1>
                <p class="header-subtitle">Collaborating organizations supporting the URAAN AI Challenge</p>
                <div class="header-scroll-indicator">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Partners Section -->
<section id="partners" class="py-5">
  <div class="container-fluid pt-5 pb-0">
   

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

<?php include './components/footer.php'; ?>

<style>
    /* Header Styles */
    .theme-header {
        position: relative;
        height: 100vh;
        min-height: 600px;
        background: url('../assets/images/partners-bg.jpg') no-repeat center center;
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
    
    /* Partners Section Styles */
    #partners {
        background: url('assets/images/bg-grad.jpg') no-repeat center center;
        padding-top: 3rem !important;
        padding-bottom: 3rem !important;
    }
    
    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
        color: #fff;
    }
    
    .section-subtitle {
        font-size: 1.1rem;
        opacity: 0.9;
        color: #fff;
    }
    
    .partner-logo {
        width: auto;
        margin: 1.5rem 0;
        transition: transform 0.3s ease;
    }
    
    .partner-logo:hover {
        transform: scale(1.05);
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
            font-size: 2rem;
        }
        
       
    }
    
    @media (max-width: 576px) {
        .header-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.8rem;
        }
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

<script>
    // Smooth scroll for the header indicator
    document.querySelector('.header-scroll-indicator').addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('#partners').scrollIntoView({
            behavior: 'smooth'
        });
    });
</script>

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

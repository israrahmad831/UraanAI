<?php
define('BASE_URL', '/uraanai/'); 
?>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>URAAN AI Techathon 1.0</title>
  <link rel="icon" type="image/png" href="<?php echo BASE_URL; ?>assets/images/fav-icon-dark.png">
    <!-- For Apple devices -->
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>assets/images/fav-icon-dark.png">

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/mo-js@1.0.0/build/mo.min.js"></script>


   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">


<div class="launch-modal" id="launchModal">
    <div id="particles-js"></div>
    <div class="modal-content">
        <div class="logos-container">
          <div class="top-logos">
    <div class="logo-container">
        <picture>
            <source srcset="<?php echo BASE_URL; ?>assets/images/uraan-ai-modal-logo-strip.png" media="(max-width: 768px)">
            <img id="mopdsilogo" src="<?php echo BASE_URL; ?>assets/images/uraan-ai-modal-logo-strip.png" alt="Partner 1">
        </picture>
    </div>
  
</div>

           
        </div>
         <div class="bottom-logo">
                <div class="logo-container">
                    <img src="<?php echo BASE_URL; ?>assets/images/logo-uraan-ai-modal.png" alt="Uraan AI" style="height:120px;">
                </div>
            </div>
        <h1 class="title">URAAN AI Techathon 1.0</h1>
        <p class="subtitle">Pioneering AI for a Digitally Empowered Pakistan</p>
        
        <button class="circular-launch-button" id="launchButton">
            <div class="circle-animation"></div>
            <div class="circle-animation delay-1"></div>
            <div class="circle-animation delay-2"></div>
            <span class="launch-text">Launch</span>
            <svg class="launch-arrow" viewBox="0 0 13 10" height="10px" width="15px">
                <path d="M1,5 L11,5"></path>
                <polyline points="8 1 12 5 8 9"></polyline>
            </svg>
        </button>
    </div>
</div>

<style>


 body {
          font-family: 'Plus Jakarta Sans' !important;           
        }

/* Launch Modal Styles */
#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: transparent;
  top: 0;
  left: 0;
  z-index: -1;
}

.launch-modal {
    overflow:hidden;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('assets/images/bg-grad.jpg') no-repeat center center;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999;
    opacity: 1;
    transition: opacity 0.8s cubic-bezier(0.645, 0.045, 0.355, 1), visibility 0.8s;
}

.launch-modal.hide {
    opacity: 0;
    visibility: hidden;
}

.modal-content {
    text-align: center;
    padding: 2rem;
    max-width: 600px;
    width: 90%;
    z-index: 99999;
    animation: fadeInUp 0.8s cubic-bezier(0.645, 0.045, 0.355, 1);
    max-width:1200px;
}

/* Logos Container */
.logos-container {
    margin-bottom: 2rem;
    width: 100%;
}

.top-logos {
    display: flex;
    justify-content: center;
    gap: 30px;
    margin-bottom: 20px;
    flex-wrap: wrap;
}

.bottom-logo {
    display: flex;
    justify-content: center;
}

.logo-container {
    display: flex;
    justify-content: center;
    align-items: center;
}

.logo-container img {
    height: 45px;
    width: auto;
    max-width: 100%;
    filter: drop-shadow(0 4px 8px rgba(0,0,0,0.2));
    object-fit: contain;
}

.title {
    
    font-size: 55px;
    color: var(--light-text);
    font-weight: 900 !important;
    margin-bottom: 0px;
    margin-top:0px;
}

.subtitle {
 
 font-size: 1.5rem;
    margin-bottom: 0px;
    font-weight: 600;
    text-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
    color:white !important;
}

/* Circular Launch Button */
.circular-launch-button {
    position: relative;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    background: transparent;
    color: var(--light-text);
    border: none;
    font-size: 1.2rem;
    font-weight: 600;
    cursor: pointer;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 0;
    margin: 0 auto;
    box-shadow: 0 10px 30px rgba(#fff);
    transition: all 0.3s ease;
    overflow: hidden;
}

.circular-launch-button:hover {
    transform: scale(1.05);
    box-shadow: 0 15px 40px rgba(#fff);
}

.circular-launch-button:active {
    transform: scale(0.98);
}

.launch-text {
    position: relative;
    z-index: 2;
    margin-bottom: 5px;
}

.launch-arrow {
    position: relative;
    z-index: 2;
    stroke: var(--light-text);
    stroke-width: 3;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
    transition: all 0.3s ease;
}

.circular-launch-button:hover .launch-arrow {
    transform: translateX(5px);
}

/* Circle Animation */
.circle-animation {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    border: 2px solid var(--light-text);
    border-radius: 50%;
    animation: pulse 2s infinite;
    opacity: 0;
    z-index: 1;
}

.circle-animation.delay-1 {
    animation-delay: 0.66s;
}

.circle-animation.delay-2 {
    animation-delay: 1.33s;
}

/* Animations */
@keyframes pulse {
    0% {
        transform: scale(0.8);
        opacity: 0.7;
    }
    70% {
        transform: scale(1.3);
        opacity: 0;
    }
    100% {
        transform: scale(1.3);
        opacity: 0;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@media (max-width: 768px) {
    .top-logos {
        gap: 15px;
    }
    
    .logo-container img {
        max-height: 60px;
    }
    
    .title {
        font-size: 2rem;
    }
    
    .subtitle {
        font-size: 1rem;
    }
    
    .circular-launch-button {
        width: 120px;
        height: 120px;
        font-size: 1rem;
    }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('launchModal');
    const launchButton = document.getElementById('launchButton');
    const particlesContainer = document.getElementById('particles-js');
    const modalContent = document.querySelector('.modal-content');

    document.body.style.overflow = 'hidden';

    launchButton.addEventListener('click', function() {
        // Disable button to prevent multiple clicks
        launchButton.disabled = true;
        
        let redirecting = false;
        
        // Extraordinary animation sequence
        const animation = anime.timeline({
            complete: function() {
                if (!redirecting) {
                    redirecting = true;
                    modal.style.display = 'none';
                    window.location.href = "<?php echo BASE_URL; ?>";
                }
            }
        });
        
        // Add animations to the timeline
        animation
            .add({
                targets: modalContent,
                scale: 0.8,
                opacity: 0,
                duration: 800,
                easing: 'easeInOutQuad'
            })
            .add({
                targets: particlesContainer,
                scale: 3,
                opacity: 0,
                duration: 1200,
                easing: 'easeInExpo'
            }, '-=400') // Start 400ms before previous animation ends
            .add({
                targets: modal,
                backgroundColor: ['rgba(0,0,0,0.8)', 'rgba(0,0,0,0)'],
                duration: 1500,
                easing: 'easeInOutQuad'
            }, '-=800'); // Start 800ms before previous animation ends
        
        // Star burst effect (won't delay redirect)
        createStarBurst();
        
        localStorage.setItem('uraanModalShown', 'true');
    });

    // Initialize particles
    particlesJS('particles-js', {
        "particles": {
            "number": { "value": 80 },
            "size": { "value": 3 },
            "move": { "speed": 2 },
            "line_linked": { "enable": true }
        }
    });
    
    // Create a star burst effect
    function createStarBurst() {
        const burst = new mojs.Burst({
            parent: modal,
            radius: { 0: 200 },
            count: 20,
            children: {
                shape: 'star',
                fill: ['#ffcc00', '#ff0066', '#00ffcc', '#ff6600'],
                strokeWidth: 0,
                angle: { 0: 360 },
                radius: { 10: 5 },
                duration: 1500,
                easing: 'quint.out'
            }
        }).play();
    }
});
</script>
<!-- Add these CSS styles for the animation -->
<style>
#launchModal {
    transition: background-color 1.5s ease-in-out;
}

.modal-content {
    transition: all 0.8s ease-in-out;
    will-change: transform, opacity;
}

#particles-js {
    transition: all 1.2s ease-in-out;
    will-change: transform, opacity;
}
</style>
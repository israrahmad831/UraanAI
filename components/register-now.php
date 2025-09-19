<style>
  /* Register Pending Modal Styles - Enhanced UI */
  .rp-modal-overlay {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.7);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 10000;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.3s ease;
    padding: 20px;
  }

  .rp-modal-overlay.active {
    visibility: visible;
    opacity: 1;
  }

  .rp-modal {
    width: 90%;
    max-width: 650px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.4);
    padding: 30px 30px 25px 30px;
    color: white;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
  }

  .rp-close-btn {
    position: absolute;
    top: 15px;
    right: 15px;
    background: rgba(255, 255, 255, 0.2);
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    transition: all 0.3s ease;
    z-index: 10;
  }

  .rp-close-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: rotate(90deg);
  }

  .rp-modal-header {
    text-align: center;
    margin-bottom: 25px;
    position: relative;
  }

  .rp-modal-icon {
    font-size: 48px;
    margin-bottom: 15px;
    color: var(--accent-color);
    text-shadow: 0 0 15px rgba(79, 195, 247, 0.5);
  }

  .rp-modal-title {
    font-size: 26px;
    font-weight: 700;
    margin-bottom: 8px;
    background: linear-gradient(to right, #ffffff, var(--accent-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  }

  .rp-modal-subtitle {
    font-size: 16px;
    opacity: 0.9;
    font-weight: 500;
    margin-top: 5px;
  }

  .rp-modal-content {
    line-height: 1.6;
  }

  .rp-message-container {
    background: rgba(255, 255, 255, 0.08);
    border-radius: 16px;
    padding: 25px;
    margin-bottom: 20px;
    position: relative;
    border-left: 4px solid var(--accent-color);
  }

  .rp-message-text {
    font-size: 17px;
    margin-bottom: 15px;
    text-align: center;
  }

  .rp-highlight {
    border-radius: 12px;
    padding: 15px;
    margin: 20px 0;
    text-align: center;
    border: 1px solid var(--accent-color);
  }

  .rp-date {
    display: inline-block;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    padding: 8px 18px;
    border-radius: 30px;
    font-weight: 700;
    font-size: 18px;
    margin: 10px 0;
    box-shadow: 0 4px 15px rgba(41, 182, 246, 0.3);
  }

  .rp-cta {
    text-align: center;
    margin-top: 25px;
    padding-top: 20px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
  }

  .rp-cta-text {
    font-size: 15px;
    opacity: 0.9;
    margin-bottom: 15px;
  }

  .rp-action-btn {
    display: inline-block;
    background: linear-gradient(to right, var(--primary-color), var(--accent-color));
    color: white;
    padding: 12px 30px;
    border-radius: 30px;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(41, 182, 246, 0.3);
    border: none;
    cursor: pointer;
    font-size: 16px;
  }

  .rp-action-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(41, 182, 246, 0.4);
  }
</style>

<div class="rp-modal-overlay" id="rp-modal">
  <div class="rp-modal">
    <div class="rp-close-btn" id="rp-close-modal">
      <i class="fas fa-times"></i>
    </div>

    <div class="rp-modal-header">
      <div class="rp-modal-icon">
        <i class="fas fa-hourglass-half"></i>
      </div>
      <h2 class="rp-modal-title">Submission Portal Update</h2>
      <p class="rp-modal-subtitle">Focus on perfecting your projects</p>
    </div>

    <div class="rp-modal-content">
      <div class="rp-message-container">
        <p class="rp-message-text">
          <i class="fas fa-info-circle" style="color: var(--accent-color); margin-right: 8px;"></i>
          The submission portal is all set, but for now, we encourage every team to focus on completing their projects and give it your best shot!
        </p>
        
        <div class="rp-highlight">
          <i class="fas fa-calendar-check" style="color: var(--accent-color); margin-right: 8px;"></i>
          No rush — the portal will officially go live after
          <div class="rp-date">September 25, 2025</div>
          to welcome your entries.
        </div>
      </div>

    
    </div>
  </div>
</div>

<script>

 document.addEventListener("DOMContentLoaded", function () {
    // Intercept all clicks that target #registerModal
    document.querySelectorAll('[data-bs-target="#registerModal"]').forEach(btn => {
      btn.addEventListener("click", function (e) {
        e.preventDefault(); // Stop Bootstrap modal from opening
        openRpModal();      // Call your custom modal instead
      });
    });
  });
  let rpScrollPosition = 0;

  function openRpModal() {
    const modal = document.getElementById('rp-modal');
    rpScrollPosition = window.pageYOffset || document.documentElement.scrollTop;

    document.body.style.overflow = 'hidden';
    document.body.style.position = 'fixed';
    document.body.style.width = '100%';
    document.body.style.top = `-${rpScrollPosition}px`;

    modal.classList.add('active');
  }

  function closeRpModal() {
    const modal = document.getElementById('rp-modal');
    modal.classList.remove('active');

    document.body.style.overflow = '';
    document.body.style.position = '';
    document.body.style.width = '';
    document.body.style.top = '';
    
    window.scrollTo({
      top: rpScrollPosition,
      behavior: 'instant'
    });
  }

  document.getElementById('rp-close-modal').addEventListener('click', closeRpModal);

  document.getElementById('rp-modal').addEventListener('click', function(e) {
    if (e.target === this) {
      closeRpModal();
    }
  });
  
  

  document.addEventListener('keydown', function(e) {
    const modal = document.getElementById('rp-modal');
    if (e.key === 'Escape' && modal.classList.contains('active')) {
      closeRpModal();
    }
  });
</script>
<style>
  /* Enhanced Uraan AI Modal Styles - Compact Version */
  .uai-modal-overlay {
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
  
  .uai-modal-overlay.active {
    visibility: visible;
    opacity: 1;
  }
  
  .uai-modal {
    width: 90%;
    max-width: 1200px;
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.4);
    padding: 30px 25px 25px 25px;
    color: white;
    position: relative;
    max-height: 90vh;
    overflow-y: auto;
  }
  
  .uai-close-btn {
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
  
  .uai-close-btn:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: rotate(90deg);
  }
  
  .uai-modal-header {
    text-align: center;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 0px;
  }
  
 
  
  .uai-modal-title {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 8px;
    background: linear-gradient(to right, #ffffff, var(--accent-color));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow: 0 2px 8px rgba(0, 0, 0, 0.2);
  }
  
  .uai-modal-subtitle {
    font-size: 16px;
    opacity: 0.9;
    font-weight: 500;
  }
  
  .uai-modal-content {
    line-height: 1.6;
  }
  
  .option-card {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 14px;
    padding: 10px;
    margin: 0px 0;
    border-left: 4px solid rgba(255, 255, 255, 0.3);
    transition: all 0.3s ease;
  }
  
  .option-card:hover {
    background: rgba(255, 255, 255, 0.15);
    transform: translateY(-2px);
  }
  
  .option-title {
    display: flex;
    align-items: center;
    margin-bottom: 12px;
    font-size: 18px;
    font-weight: 600;
  }
  
  .option-icon {
    margin-right: 10px;
    width: 32px;
    height: 32px;
    background: rgba(255, 255, 255, 0.2);
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }
  
  .option-content {
    font-size: 15px;
    margin-bottom: 0;
  }
  
  .divider {
    text-align: center;
    position: relative;
    margin: 10px 0;
  }
  
  .divider-text {
    display: inline-block;
    padding: 0 12px;
    background: rgba(255, 255, 255, 0.1);
    border-radius: 16px;
    font-weight: 600;
    font-size: 14px;
    position: relative;
    z-index: 1;
  }
  
  .divider:before {
    content: '';
    position: absolute;
    top: 50%;
    left: 0;
    right: 0;
    height: 1px;
    background: rgba(255, 255, 255, 0.2);
    z-index: 0;
  }
  
  .criteria-list {
    background: rgba(255, 255, 255, 0.08);
    border-radius: 12px;
    padding: 16px;
    margin: 16px 0;
  }
  
  .criteria-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 10px;
  }
  
  .criteria-item:last-child {
    margin-bottom: 0;
  }
  
  .criteria-icon {
    margin-right: 10px;
    color: var(--accent-color);
    font-size: 13px;
    margin-top: 4px;
    flex-shrink: 0;
  }
  
  .criteria-text {
    flex: 1;
    font-size: 14px;
  }
  
  .uai-modal-footer {
    text-align: center;
    margin-top: 20px;
    padding-top: 15px;
    border-top: 1px solid rgba(255, 255, 255, 0.1);
    font-size: 14px;
    opacity: 0.9;
  }
</style>

<div class="uai-modal-overlay" id="uai-modal">
  <div class="uai-modal">
    <div class="uai-close-btn" id="uai-close-modal">
      <i class="fas fa-times"></i>
    </div>
    
    <div class="uai-modal-header">
      <h2 class="uai-modal-title">Participation Guidelines</h2>
    
    </div>
    
    <div class="uai-modal-content">
      <p class="option-content" style="text-align: center; margin-bottom: 20px;">
        Participants in the Uraan AI Techathon 1.0 have the flexibility to choose from the following options:
      </p>
      
      <div class="option-card">
        <div class="option-title">
          <div class="option-icon">
            <i class="fas fa-tasks"></i>
          </div>
          Official Problem Statements
        </div>
        <p class="option-content">
          Each of the 12 thematic areas includes carefully designed problem statements that reflect Pakistan's real challenges. Teams may select one and develop their solution accordingly.
        </p>
      </div>
      
      <div class="divider">
        <span class="divider-text">OR</span>
      </div>
      
      <div class="option-card">
        <div class="option-title">
          <div class="option-icon">
            <i class="fas fa-lightbulb"></i>
          </div>
          Bring Your Own Projects/Startups
        </div>
        <p class="option-content">
          Teams already working on ongoing AI projects or startups may also participate, provided that:
        </p>
        
        <div class="criteria-list">
          <div class="criteria-item">
            <div class="criteria-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <div class="criteria-text">
              The project fits into one of the 12 thematic areas
            </div>
          </div>
          <div class="criteria-item">
            <div class="criteria-icon">
              <i class="fas fa-check-circle"></i>
            </div>
            <div class="criteria-text">
              It addresses a Pakistan-specific challenge with measurable national relevance
            </div>
          </div>
        </div>
      </div>
      
      <div class="uai-modal-footer">
        <p>
          All submissions — whether based on official problem statements or self-proposed projects — will be evaluated using the same criteria to ensure fairness, transparency, and equal opportunity.
        </p>
      </div>
    </div>
  </div>
</div>

<script>
  let scrollPosition = 0;
  
  // Function to open modal
  function openUaiModal() {
      const modal = document.getElementById('uai-modal');
      
      // Save scroll position
      scrollPosition = window.pageYOffset || document.documentElement.scrollTop;
      
      // Disable body scrolling without jumping to top
      document.body.style.overflow = 'hidden';
      document.body.style.position = 'fixed';
      document.body.style.width = '100%';
      document.body.style.top = `-${scrollPosition}px`;
      
      // Show modal
      modal.classList.add('active');
  }
  
  // Function to close modal
  function closeUaiModal() {
      const modal = document.getElementById('uai-modal');
      
      // Hide modal
      modal.classList.remove('active');
      
      // Re-enable scrolling and restore position
      document.body.style.overflow = '';
      document.body.style.position = '';
      document.body.style.width = '';
      document.body.style.top = '';
      
       window.scrollTo({
    top: scrollPosition,
    behavior: 'instant' // no animation
  });
  }
  
  // Close modal when clicking the close button
  document.getElementById('uai-close-modal').addEventListener('click', closeUaiModal);
  
  // Close modal when clicking outside content
  document.getElementById('uai-modal').addEventListener('click', function(e) {
      if (e.target === this) {
          closeUaiModal();
      }
  });
  
  // Close modal with Escape key
  document.addEventListener('keydown', function(e) {
      const modal = document.getElementById('uai-modal');
      if (e.key === 'Escape' && modal.classList.contains('active')) {
          closeUaiModal();
      }
  });
</script>
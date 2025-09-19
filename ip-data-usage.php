<?php include './components/header.php'; ?>

<!-- Theme Header -->
<header class="theme-header">
    <div class="header-overlay"></div>
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-lg-10 mx-auto text-center">
                <h1 class="header-title">Intellectual Property Rights & Data Usage Policy</h1>
                <p class="header-subtitle">Uraan AI Techathon 1.0 – Guidelines for IP and Data Usage</p>
                <div class="header-scroll-indicator">
                    <i class="fas fa-chevron-down"></i>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- IP Rights Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-11 mx-auto">
                <h2 class="section-title">Intellectual Property (IP) Rights & Data Usage Policy</h2>
                
                <!-- 1. Ownership of Intellectual Property -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">1. Ownership of Intellectual Property</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>All teams participating in Uraan AI Techathon 1.0 will retain ownership of the intellectual property (IP) created by them during the competition.</li>
                            <li>Teams may continue to further develop, commercialize, and scale their solutions independently after the Techathon.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- 2. License Granted to the Planning Commission -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">2. License Granted to the Planning Commission</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>By submitting a solution, each team grants the Planning Commission, Ministry of Planning, Development & Special Initiatives (MoPDSI) a perpetual, royalty-free, non-exclusive, and worldwide license to:
                                <ul class="nested-list">
                                    <li>Use, reproduce, and showcase the submitted solution for publicity, evaluation, and reporting purposes.</li>
                                    <li>Pilot the solution with relevant government agencies and public sector organizations within Pakistan.</li>
                                </ul>
                            </li>
                            <li>This license does not transfer ownership; it ensures that solutions can be showcased and tested in the national interest.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- 3. Incubation Phase IP Arrangements -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">3. Incubation Phase IP Arrangements</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>For winning teams entering the 5-month incubation program, a separate Incubation Agreement will be signed, defining commercialization and IP terms.</li>
                            <li>This agreement will typically include:
                                <ul class="nested-list">
                                    <li><strong>National Rights:</strong> The Government of Pakistan will retain a royalty-free license for use of the solution within Pakistan for public services.</li>
                                    <li><strong>Commercial Rights:</strong> Teams will retain ownership and may commercialize their solutions nationally and internationally, subject to compliance with Pakistan's legal and regulatory frameworks.</li>
                                    <li><strong>Shared IP or Joint Ownership (if applicable):</strong> In cases where significant government resources (funding, data, or infrastructure) are used to further develop the solution, joint IP rights may be established to protect mutual interests.</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- 4. Use of Datasets and Tools -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">4. Use of Datasets and Tools</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>During Phase-1, participants must use only <strong>licensed datasets and tools with proof, under audit trail.</strong></li>
                            <li>Any proprietary datasets used in later phases (Techathon Day or Incubation) will be provided by the Planning Commission or relevant ministries under controlled access agreements.</li>
                            <li>Teams are prohibited from using any dataset or tool for which they do not have a valid license or usage rights.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- 5. Confidentiality & Sensitive Information -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">5. Confidentiality & Sensitive Information</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>If a solution incorporates sensitive or restricted government datasets (in later phases), the team will be required to sign a Non-Disclosure Agreement (NDA) before gaining access.</li>
                            <li>Participants agree not to share, replicate, or redistribute any restricted data outside the scope of the Techathon.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- 6. Attribution -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">6. Attribution</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>When Planning Commission showcases or deploys any submitted solution, appropriate credit will always be given to the team or individuals who created it.</li>
                            <li>Teams may publicly showcase their work, provided they acknowledge Uraan AI Techathon 1.0 as the competition where the solution originated.</li>
                        </ul>
                    </div>
                </div>
                
                <!-- 7. Disqualification for Non-Compliance -->
                <div class="policy-section mb-5">
                    <h3 class="policy-heading">7. Disqualification for Non-Compliance</h3>
                    <div class="policy-content">
                        <ul class="styled-list">
                            <li>Any violation of the IP & Data Usage Policy — including plagiarism, use of unauthorized datasets, or misrepresentation of ownership — will result in immediate disqualification.</li>
                            <li>Planning Commission reserves the right to take legal action in cases of fraud or misuse of confidential data.</li>
                        </ul>
                    </div>
                </div>
                
                <div class="alert alert-info mt-4">
                    <i class="fas fa-info-circle me-2"></i>
                    For any questions regarding these policies, please contact us at <strong>info.ai@pc.gov.pk</strong>
                </div>
            </div>
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
        background: url('../assets/images/ip-bg.jpg') no-repeat center center;
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
    
    /* Policy Section Styles */
    .policy-section {
        background: rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        padding: 25px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    
    .policy-heading {
        font-size: 1.5rem;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid var(--accent-color);
    }
    
    .policy-content {
        padding-left: 10px;
    }
    
    .styled-list {
        list-style-type: none;
        padding-left: 0;
    }
    
    .styled-list li {
        position: relative;
        padding-left: 30px;
        margin-bottom: 12px;
        line-height: 1.6;
    }
    
    .styled-list li:before {
        content: '•';
        color: var(--accent-color);
        font-size: 1.5rem;
        position: absolute;
        left: 0;
        top: -5px;
    }
    
    .nested-list {
        list-style-type: none;
        padding-left: 20px;
        margin-top: 10px;
    }
    
    .nested-list li {
        position: relative;
        padding-left: 25px;
        margin-bottom: 8px;
    }
    
    .nested-list li:before {
        content: '○';
        color: var(--primary-color);
        font-size: 1rem;
        position: absolute;
        left: 0;
        top: 0;
    }
    
    .alert {
        border-radius: 8px;
        border-left: 4px solid var(--accent-color);
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
        
        .policy-heading {
            font-size: 1.3rem;
        }
    }
    
    @media (max-width: 576px) {
        .header-title {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.6rem;
        }
        
        .policy-section {
            padding: 15px;
        }
        
        .styled-list li {
            padding-left: 25px;
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
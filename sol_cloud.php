<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
  <div class="container py-5">
    <div class="row g-3 align-items-center">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-1 mb-0 animated slideInLeft">Cloud Solutions</h1>
      </div>
      <div class="col-lg-6 animated slideInRight">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
            <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="solutions.php">Solutions</a></li>
            <li class="breadcrumb-item text-secondary active" aria-current="page">Cloud Solutions</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- Content Start -->
<div class="container-fluid py-5" style="background-color:#eef7ff;">
  <div class="container">
    <div class="text-center mb-5">
      <h1>
        <span class="text-uppercase text-primary bg-white px-2">Cloud Solutions</span>
        by F1 Infotech
      </h1>
    </div>
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <img src="img/deploy5.jpg" class="img-fluid rounded shadow" alt="Cloud Solutions">
      </div>
      <div class="col-lg-6">
        <h3 class="fw-bold mb-3">Scale without limits, secure without compromise.</h3>
        <p class="mb-3">
          F1 InfoTech empowers businesses to embrace the cloud with confidence. From strategy and
          migration to management and optimization, our Cloud Solutions simplify IT, enhance agility, and
          reduce costs. Whether it’s private, public, or hybrid cloud, we help you unlock innovation while
          ensuring security and compliance.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Content End -->

<!-- Challenges Section -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #eef7ff, #ffffff);">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Key Challenges Faced by Industry</h2>
      <p class="text-muted">Cloud adoption hurdles organizations must overcome</p>
    </div>

    <div class="row g-4">
      <!-- Challenge 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-dollar-sign"></i>
          </div>
          <h5 class="fw-bold">High Costs & Complexity</h5>
          <p class="small">Cloud bills and complex setups spiral without proper planning.</p>
        </div>
      </div>

      <!-- Challenge 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-shield-alt"></i>
          </div>
          <h5 class="fw-bold">Security & Compliance Risks</h5>
          <p class="small">Sensitive data demands strong protection and regulatory adherence.</p>
        </div>
      </div>

      <!-- Challenge 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-exclamation-triangle"></i>
          </div>
          <h5 class="fw-bold">Downtime & Migration Risks</h5>
          <p class="small">Poorly planned migrations can cause disruptions to critical services.</p>
        </div>
      </div>

      <!-- Challenge 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-eye"></i>
          </div>
          <h5 class="fw-bold">Lack of Visibility & Control</h5>
          <p class="small">Without monitoring, cloud sprawl leads to inefficiency and risk.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Who Can Benefit Section -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #ffffff, #eef7ff);">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Who Can Benefit?</h2>
      <p class="text-muted">Industries gaining the most from Cloud adoption</p>
    </div>

    <div class="timeline">
      <!-- Step 1 -->
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fa fa-building"></i>
        </div>
        <div class="timeline-content">
          <h5 class="fw-bold">Enterprises</h5>
          <p class="small">Looking for scalable and cost-effective IT infrastructure.</p>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fa fa-landmark"></i>
        </div>
        <div class="timeline-content">
          <h5 class="fw-bold">Government & Public Sector</h5>
          <p class="small">Needing compliance-ready and secure platforms for critical operations.</p>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fa fa-university"></i>
        </div>
        <div class="timeline-content">
          <h5 class="fw-bold">BFSI</h5>
          <p class="small">Requiring high availability, resilience, and data protection.</p>
        </div>
      </div>

      <!-- Step 4 -->
      <div class="timeline-item">
        <div class="timeline-icon">
          <i class="fa fa-hospital"></i>
        </div>
        <div class="timeline-content">
          <h5 class="fw-bold">Healthcare & Education</h5>
          <p class="small">Seeking secure collaboration and remote access for continuity.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Custom CSS for Challenges -->
<style>
  .challenge-card {
    background: #fff;
    border-radius: 16px;
    transition: all 0.3s ease-in-out;
    position: relative;
    overflow: hidden;
    border: 1px solid #e6e6e6;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
  }
  .challenge-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
    border-color: #0d6efd;
  }
  .challenge-icon {
    width: 70px;
    height: 70px;
    border-radius: 50%;
    margin: 0 auto;
    background: linear-gradient(135deg, #0d6efd, #0a58ca);
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 28px;
    transition: all 0.3s ease-in-out;
  }
  .challenge-card:hover .challenge-icon {
    background: linear-gradient(135deg, #0a58ca, #084298);
    transform: rotate(10deg) scale(1.1);
  }
</style>

<!-- Timeline CSS -->
<style>
  .timeline {
    position: relative;
    margin: 0 auto;
    padding-left: 40px;
    border-left: 3px solid #0d6efd;
    max-width: 700px;
  }

  .timeline-item {
    position: relative;
    margin-bottom: 40px;
  }

  .timeline-icon {
    position: absolute;
    left: -67px;
    top: 0;
    width: 50px;
    height: 50px;
    background: linear-gradient(135deg, #0d6efd, #0a58ca);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    font-size: 20px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.2);
  }

  .timeline-content {
    background: #fff;
    
    padding: 20px;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.05);
    transition: all 0.3s ease-in-out;
  }

  .timeline-content:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
  }

  .timeline-content h5 {
    margin-bottom: 5px;
  }

  .timeline-content p {
    margin: 0;
    color: #555;
  }
</style>

<?php require("bot_getintouch2.php"); ?>
<?php require("bot_footer.php"); ?>

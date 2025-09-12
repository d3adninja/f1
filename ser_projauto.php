<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
  <div class="container py-5">
    <div class="row g-3 align-items-center">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-1 mb-0 animated slideInLeft">Project Automation</h1>
      </div>
      <div class="col-lg-6 animated slideInRight">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
            <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="solutions.php">Solutions</a></li>
            <li class="breadcrumb-item text-secondary active" aria-current="page">Project Automation</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- Intro Start -->
<div class="container-fluid py-5" style="background-color:#eef7ff;">
  <div class="container">
    <div class="text-center mb-5">
      <h1>
        <span class="text-uppercase text-primary bg-white px-2">Project Automation</span>
        by F1 Infotech
      </h1>
      <p class="lead text-muted">Deliver projects faster, smarter, and with confidence.</p>
    </div>
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <img src="img/projectautomation.png" class="img-fluid rounded shadow" alt="Project Automation">
      </div>
      <div class="col-lg-6">
        <p class="mb-3">
          Managing projects manually often leads to delays, inefficiencies, and missed deadlines. At F1 InfoTech, we bring automation into project management, enabling businesses to streamline workflows, improve collaboration, and optimize resource utilization.
        </p>
        <p class="mb-3">
          With automated dashboards, reporting, and scheduling, we eliminate repetitive tasks and give leaders real-time visibility into project progress, ensuring projects are delivered faster, smarter, and more efficiently.
        </p>
      </div>
    </div>
  </div>
</div>
<!-- Intro End -->

<!-- Challenges Section -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #eef7ff, #ffffff);">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Key Challenges Faced by Industry</h2>
      <p class="text-muted">Common hurdles businesses face before automation</p>
    </div>

    <div class="row g-4">
      <!-- Challenge 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-clock"></i>
          </div>
          <h5 class="fw-bold">Missed Deadlines & Delays</h5>
          <p class="small">Delays due to inefficient manual tracking.</p>
        </div>
      </div>

      <!-- Challenge 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-cogs"></i>
          </div>
          <h5 class="fw-bold">Inefficient Resource Utilization</h5>
          <p class="small">Lack of collaboration across teams leads to poor use of resources.</p>
        </div>
      </div>

      <!-- Challenge 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-users"></i>
          </div>
          <h5 class="fw-bold">Poor Collaboration Across Teams</h5>
          <p class="small">High project costs from lack of teamwork and coordination.</p>
        </div>
      </div>

      <!-- Challenge 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-chart-line"></i>
          </div>
          <h5 class="fw-bold">Limited Project Visibility</h5>
          <p class="small">Limited visibility into project status reduces control and efficiency.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Challenges End -->

<!-- Who Can Benefit Section -->
<div class="container-fluid py-5" style="background: linear-gradient(135deg, #ffffff, #eef7ff);">
  <div class="container">
    <div class="text-center mb-5">
      <h2 class="fw-bold">Who Can Benefit?</h2>
      <p class="text-muted">Industries and organizations that gain the most from Backup Solutions</p>
    </div>

    <div class="row g-4 justify-content-center">
      <!-- Benefit 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-building"></i>
          </div>
          <h5 class="fw-bold">IT service providers.</h5>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-university"></i>
          </div>
          <h5 class="fw-bold">Enterprises managing large-scale projects.</h5>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-landmark"></i>
          </div>
          <h5 class="fw-bold">Government and public sector projects.</h5>
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

<!-- Contact Us Start -->
<div class="container" style="max-width:1200px; margin:5rem auto;">
  <div class="card shadow-sm border-0 rounded-3 bg-light mb-5">
    <div class="card-body p-5 d-flex flex-column flex-md-row align-items-start gap-4">

      <!-- Decorative line -->
      <div class="d-none d-md-block" style="width:5px; background-color:#0d6efd; border-radius:3px;"></div>

      <!-- Text Content -->
      <div class="flex-grow-1">
        <div class="text-center text-md-start">
          <h2 class="fw-bold text-primary mb-3 text-center" style="font-size:2rem;">
            F1 Can Help! Here’s How
          </h2>
        </div>
        <p class="mb-3" style="font-size:1.1rem; line-height:1.8;">
          At <strong>F1 InfoTech</strong>, our project automation services help enterprises, government agencies, and service providers
accelerate delivery while reducing costs. We implement smart tools that align with your existing
systems, ensuring better control over timelines, budgets, and quality. The result is faster
execution, reduced risk, and higher success rates in projects of all scales.
        </p>
        

        <!-- Centered Button -->
        
      </div>

    </div>
  </div>
</div>
<!-- Contact Us End -->



<?php require("bot_getintouch.php"); ?>
<?php require("bot_footer.php"); ?>

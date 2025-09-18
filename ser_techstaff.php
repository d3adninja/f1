<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
  <div class="container py-5">
    <div class="row g-3 align-items-center">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-1 mb-0 animated slideInLeft">Technology Staffing</h1>
      </div>
      <div class="col-lg-6 animated slideInRight">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
            <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
            <li class="breadcrumb-item"><a class="text-primary" href="solutions.php">Solutions</a></li>
            <li class="breadcrumb-item text-secondary active" aria-current="page">Technology Staffing</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- Intro Start -->
<div class="container-fluid py-5" style="background-color:#d3d3d3;">
  <div class="container">
    <div class="text-center mb-5">
      <h1>
        <span class="text-uppercase text-white bg-dark px-2">Technology Staffing</span>
        by F1 Infotech
      </h1>
    </div>
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <img src="img/techstaffing.avif" class="img-fluid rounded shadow" alt="Technology Staffing">
      </div>
      <div class="col-lg-6">
        <h3 class="fw-bold mb-3">The right talent, when you need it.</h3>
        <p class="mb-3">
          Finding the right IT talent at the right time is one of the biggest challenges businesses face.
          At F1 InfoTech, we specialize in bridging this gap by providing pre-vetted professionals across
          a wide spectrum of technologies.
        </p>
        <p class="mb-3">
          From short-term projects to long-term roles, our staffing services bring flexibility, agility,
          and scalability to your workforce strategy. With our domain expertise, we understand not just
          the technical skills but also the cultural fit required to make a placement successful.
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
      <p class="text-muted">Why businesses struggle with staffing without the right partner</p>
    </div>

    <div class="row g-4">
      <!-- Challenge 1 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-users"></i>
          </div>
          <h5 class="fw-bold">Shortage of Skilled Talent</h5>
          <p class="small">Limited availability of qualified IT professionals for critical roles.</p>
        </div>
      </div>

      <!-- Challenge 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-clock"></i>
          </div>
          <h5 class="fw-bold">Long Recruitment Cycles</h5>
          <p class="small">Time-consuming hiring processes delay project timelines.</p>
        </div>
      </div>

      <!-- Challenge 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-dollar-sign"></i>
          </div>
          <h5 class="fw-bold">High Hiring & Training Costs</h5>
          <p class="small">Onboarding, training, and recruitment add heavy overheads.</p>
        </div>
      </div>

      <!-- Challenge 4 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-exchange-alt"></i>
          </div>
          <h5 class="fw-bold">Mismatch in Skill & Culture Fit</h5>
          <p class="small">Difficulty scaling teams with the right balance of expertise and culture.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Challenges End -->

<!-- Who Can Benefit Section -->
<div class="container-fluid py-5" style="background: #d3d3d3">
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
          <h5 class="fw-bold">Enterprises needing flexible workforce models.</h5>
        </div>
      </div>

      <!-- Benefit 2 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-university"></i>
          </div>
          <h5 class="fw-bold">Government and public sector projects.</h5>
        </div>
      </div>

      <!-- Benefit 3 -->
      <div class="col-md-6 col-lg-3">
        <div class="challenge-card h-100 text-center p-4">
          <div class="challenge-icon mb-3">
            <i class="fa fa-landmark"></i>
          </div>
          <h5 class="fw-bold">Startups scaling quickly with new technologies.</h5>
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
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
  }

  .challenge-card:hover {
    transform: translateY(-10px) scale(1.03);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.15);
    border-color: #0d6efd;
  }

.challenge-icon {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin: 0 auto;
  background: #fff;   /* white background instead of blue */
  display: flex;
  align-items: center;
  justify-content: center;
  color: #000;        /* black icon instead of white */
  font-size: 28px;
  transition: all 0.3s ease-in-out;
}

.challenge-card:hover .challenge-icon {
  background: #000;   /* black background on hover */
  color: #fff;        /* white icon on hover */
  transform: rotate(10deg) scale(1.1);
}

</style>

<!-- Contact Us Start -->
<!-- Contact Us Start -->
<div class="contact-section position-relative" style="overflow:hidden;">

  <div class="container" style="max-width:1200px; margin:5rem auto; position:relative; z-index:2;">
    <div class="card shadow-sm border-0 text-white mb-5 video-card">

      <!-- Background Video (only inside card) -->
      <video autoplay muted loop playsinline class="card-video">
        <source src="img/livevid4.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <!-- Overlay -->
      <div class="card-overlay"></div>

      <div class="card-body p-2 d-flex flex-column flex-md-row align-items-start gap-4 position-relative" style="z-index:2;">
        <!-- Decorative line -->
        <div class="d-none d-md-block" style="width:5px; background-color:#0d6efd;"></div>
        <!-- Text Content -->
        <div class="flex-grow-1 text-start py-4">
          <h2 class="fw-bold text-white mb-3 px-5" style="font-size:3rem;">
            F1 Can Help! Here’s How
          </h2>
          <p class="mb-3 px-5 " style="font-size:1.1rem; line-height:1.8; color:#f8f9fa; ">
                      At <strong>F1 InfoTech</strong>, We draw from a vast pool of certified professionals to provide experts in niche and emerging technologies. Whether it’s cloud specialists, cybersecurity experts, or project managers, we ensure faster onboarding, reduced hiring costs, and access to highly skilled resources. Trusted by 300+ clients, our staffing model is flexible—contract, permanent, or project-based—giving organizations the right mix of talent without the burden of lengthy recruitment cycles.

          </p>
          <br>
          <!-- Button -->
          <a href="contact.php" class="btn btn-light rounded-pill px-3 py-2 fw-bold text-dark custom-btn">
            Get in Touch <span style="font-size:1.2rem; margin-left:8px;">&#8594;</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Us End -->

<!-- CSS -->
<style>
  .video-card {
    position: relative;
    overflow: hidden;
    margin-left: -50px;
    margin-right: -50px;
  }

  .card-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;

  }

  .card-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.65);
    /* dark overlay for contrast */
    z-index: 1;

  }

  /* Paragraph Styling */
  .video-card p {
    max-width: 70%;
    /* only use 70% of width */
    font-size: 1.5rem;
    /* slightly bigger */
    line-height: 1.9;
    /* more spacing */
  }

  /* Custom Button Hover */
  .custom-btn {
    transition: all 0.3s ease-in-out;
    margin-left: 50px;
  }

  .custom-btn:hover {
    transform: scale(1.05);
    /* zoom */
    box-shadow: 0 8px 20px rgba(255, 255, 255, 0.4);
    /* soft white glow */
  }
</style>



<?php require("bot_footer.php"); ?>
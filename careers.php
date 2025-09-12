<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Careers</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Careers</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->



<!-- Careers Content Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="text-center mb-5">
      <h1>
        Careers
        <span class="text-uppercase text-primary bg-white px-2">
        With F1 Infotech
        </span>
      </h1>
      <p class="lead mt-3">
        Where innovation, collaboration, and growth are at the core of everything we do!
      </p>
    </div>

    <!-- Intro Cards -->
    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card feature-card h-100 p-4 text-center">
          <i class="fa fa-users fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Our People</h5>
          <p>
            At F1 Infotech, we believe our people are our greatest strength. For over two decades, 
            we’ve been at the forefront of delivering innovative IT solutions that empower enterprises, 
            BFSI, and government organizations to thrive in a rapidly evolving digital world.
          </p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card feature-card h-100 p-4 text-center">
          <i class="fa fa-handshake fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Collaboration</h5>
          <p>
            Joining F1 Infotech means becoming part of a dynamic team where innovation, collaboration, 
            and growth are at the core of everything we do. We foster a culture that encourages learning, 
            rewards performance, and supports career aspirations.
          </p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4 col-md-6">
        <div class="card feature-card h-100 p-4 text-center">
          <i class="fa fa-rocket fa-3x text-primary mb-3"></i>
          <h5 class="fw-bold">Opportunities</h5>
          <p>
            Whether you’re an experienced professional or just starting your career, F1 Infotech offers 
            exciting opportunities to work on cutting-edge technologies, solve complex challenges, 
            and make an impact that matters.
          </p>
        </div>
      </div>
    </div>

    <br><br>

    <!-- Why Work With Us -->
    <div >
      <div class="text-center mb-5" >
        <h2 class="fw-bold">Why Work With Us?</h2>
      </div>

      <div class="row g-4">
        <!-- Card 1 -->
        <div class="col-md-6 col-lg-6">
          <div class="card feature-card h-100 p-4 text-center">
            <i class="fa fa-hand-holding-heart fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Trust & Collaboration</h5>
            <p>A culture built on trust, integrity, and collaboration.</p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-6 col-lg-6">
          <div class="card feature-card h-100 p-4 text-center">
            <i class="fa fa-project-diagram fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Diverse Projects</h5>
            <p>Exposure to diverse projects across industries and domains.</p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-6 col-lg-6">
          <div class="card feature-card h-100 p-4 text-center">
            <i class="fa fa-graduation-cap fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Learning & Upskilling</h5>
            <p>Continuous learning and upskilling opportunities.</p>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="col-md-6 col-lg-6">
          <div class="card feature-card h-100 p-4 text-center">
            <i class="fa fa-lightbulb fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Innovation</h5>
            <p>A platform to innovate and shape the future of IT.</p>
          </div>
        </div>
      </div>
    </div>

    <br><br>
  </div>
</div>
<!-- Careers Content End -->


<!-- Call To Action Section -->
<div class="container-fluid" >
  <div class="container">
    <div class="row g-0 align-items-center shadow-lg rounded overflow-hidden">
      <!-- Left: Text -->
      <div class="col-md-6 bg-white p-5 text-center">
        <h2 class="fw-bold mb-3 text-primary">Grow With Us. Lead With Us.</h2>
        <p class="mb-4">
          Be a part of F1 Infotech’s journey to drive digital transformation across industries. 
          Explore opportunities and build your future with us.
        </p>
        <style>
                  .custom-outline-btn {
  font-size: 1.1rem;
  padding: 0.9rem 2rem;
  border-radius: 50px;             /* more rounded */
  border: 2px solid #0d6efd;       /* blue border */
  background-color: transparent;   /* no background */
  color: #0d6efd !important;       /* blue text */
  font-weight: 600;
  transition: all 0.3s ease;
}

.custom-outline-btn:hover {
  background-color: #0d6efd;  /* blue background on hover */
  color: #fff !important;     /* white text on hover */
}
</style>
                  <a class="btn custom-outline-btn px-5 py-3 me-2" href="#.php">Explore Opportunities</a>
        
      </div>

      <!-- Right: Background Image -->
      <div class="col-md-6" 
           style="background: url('img/handshake.jpeg') center/cover no-repeat; min-height: 300px;">
      </div>
    </div>
  </div>
</div>
<!-- Careers Content End -->


<!-- Custom Hover Effect CSS -->
<!-- Custom Hover Effect CSS -->
<style>
  .feature-card {
    transition: all 0.3s ease-in-out;
    border: 1px solid #eee;
    border-radius: 12px;
    background: #fff;
  }
  .feature-card:hover {
    transform: translateY(-8px) scale(1.02);
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    border-color: #0d6efd;
  }
  .feature-card i {
    transition: color 0.3s ease-in-out;
  }
  .feature-card:hover i {
    color: #0a58ca;
  }
</style>

<?php require("bot_getintouch.php"); ?>
<?php require("bot_footer.php"); ?>

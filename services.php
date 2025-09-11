<?php require('top_nav.php'); ?>


    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Services</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


<!-- Services Start -->
<div class="container-fluid py-5 " style="background-color:#eef7ff;">
  <div class="container">
    <div class="text-center mb-5">
      <h1>
        Explore Services
        <span class="text-uppercase text-primary bg-white px-2">
        With F1 Infotech
        </span>
      </h1>
    </div>
    <div class="row g-4">

      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_amc.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-tools fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">AMC Services</h5>
            <p class="mb-0 small">Reliable IT upkeep, so your business never slows down.</p>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_manserv.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-headset fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Managed Services</h5>
            <p class="mb-0 small">Simplify IT. Focus on growth—we’ll handle the rest.</p>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_techstaff.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-users fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Technology Staffing</h5>
            <p class="mb-0 small">The right talent, when you need it.</p>
          </div>
        </a>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_processauto.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-robot fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Process Automation</h5>
            <p class="mb-0 small">Automate routine tasks, accelerate business outcomes.</p>
          </div>
        </a>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_secngov.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-shield-alt fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Security & Governance</h5>
            <p class="mb-0 small">Protecting your data, securing your trust.</p>
          </div>
        </a>
      </div>

      <!-- Card 6 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_projauto.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-project-diagram fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Project Automation</h5>
            <p class="mb-0 small">Deliver projects faster, smarter, and with confidence.</p>
          </div>
        </a>
      </div>

      <!-- Card 7 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_compaudit.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-clipboard-check fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Compliance Audit</h5>
            <p class="mb-0 small">Stay compliant. Stay confident.</p>
          </div>
        </a>
      </div>

      <!-- Card 8 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_locsupp.php" class="text-decoration-none text-dark">
          <div class="card feature-card h-100 text-center p-4">
            <i class="fa fa-globe fa-3x text-primary mb-3"></i>
            <h5 class="fw-bold">Multi-Vendor & Location Support</h5>
            <p class="mb-0 small">One partner for all your IT support needs.</p>
          </div>
        </a>
      </div>

    </div>
  </div>
</div>
<!-- Services End -->


<!-- Custom Hover Effect CSS -->
<style>
  .feature-card {
    transition: all 0.3s ease-in-out;
    border: 1px solid #eee;
    border-radius: 12px;
    background: #fff;
  }
  .feature-card:hover {
    transform: translateY(-8px) scale(1.03);
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

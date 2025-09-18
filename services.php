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
<style>
/* Card styling */
.sol-card {
  position: relative;
  aspect-ratio: 3 / 4;
  overflow: hidden;
  color: #fff;
  background-size: cover;
  background-position: center;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: transform 0.3s ease;
  min-height: 350px;
}

/* Background images for 8 cards */
.row > div:nth-child(1) .sol-card { background-image: url('img/managedservices.png'); }
.row > div:nth-child(2) .sol-card { background-image: url('img/processautomation.png'); }
.row > div:nth-child(3) .sol-card { background-image: url('img/securityandgovernance.png'); }
.row > div:nth-child(4) .sol-card { background-image: url('img/projectautomation.png'); }
.row > div:nth-child(5) .sol-card { background-image: url('img/audit.jpg'); }
.row > div:nth-child(6) .sol-card { background-image: url('img/managedservices.png'); }
.row > div:nth-child(7) .sol-card { background-image: url('img/amcservices.jpg'); }
.row > div:nth-child(8) .sol-card { background-image: url('img/techstaffing.avif'); }

/* Overlay */
.sol-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
}

/* Text + Icon */
.sol-content {
  position: relative;
  z-index: 2;
  padding: 25px;
  text-align: center;
}

.sol-content i {
  color: #fff;
  font-size: 3.2rem;
  transition: color 0.3s ease;
}

.sol-content h5 {
  color: #fff !important;
  font-size: 1.4rem;
  margin-bottom: 10px;
}

.sol-content p {
  font-size: 1rem;
  line-height: 1.6;
}

/* Hover effect */
.sol-card:hover {
  transform: translateY(-12px);
}

/* Section heading */
.sol-heading h1 {
  font-size: 2.5rem;
  font-weight: 700;
}
</style>

<!-- Feature Start -->
<!-- Feature Start -->
<div class="container-fluid py-5">
  <div class="container">
    <div class="text-center mb-5 sol-heading">
      <h1>
        Explore Services
        <span class="text-uppercase text-white bg-dark px-2">
          With F1 Infotech
        </span>
      </h1>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_manserv.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-headset mb-3"></i>
              <h5 class="fw-bold">Managed Services</h5>
              <p class="mb-0 small">Simplify IT. Focus on growth—we’ll handle the rest.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_processauto.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-robot mb-3"></i>
              <h5 class="fw-bold">Process Automation</h5>
              <p class="mb-0 small">Automate routine tasks, accelerate business outcomes.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_secngov.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-shield-alt mb-3"></i>
              <h5 class="fw-bold">Security & Governance</h5>
              <p class="mb-0 small">Protecting your data, securing your trust.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_projauto.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-project-diagram mb-3"></i>
              <h5 class="fw-bold">Project Automation</h5>
              <p class="mb-0 small">Deliver projects faster, smarter, and with confidence.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_compaudit.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-clipboard-check mb-3"></i>
              <h5 class="fw-bold">Compliance Audit</h5>
              <p class="mb-0 small">Stay compliant. Stay confident.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 6 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_locsupp.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-globe mb-3"></i>
              <h5 class="fw-bold">Multi-Vendor & Location Support</h5>
              <p class="mb-0 small">One partner for all your IT support needs.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 7 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_amc.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-tools mb-3"></i>
              <h5 class="fw-bold">AMC Services</h5>
              <p class="mb-0 small">Reliable IT upkeep, so your business never slows down.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 8 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_techstaff.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-users mb-3"></i>
              <h5 class="fw-bold">Technology Staffing</h5>
              <p class="mb-0 small">The right talent, when you need it.</p>
            </div>
          </div>
        </a>
      </div>
    </div>

  </div>
</div>
<!-- Feature End -->

<?php require("bot_getintouch.php"); ?>
<?php require("bot_footer.php"); ?>

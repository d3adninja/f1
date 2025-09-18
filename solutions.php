<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
  <div class="container py-5">
    <div class="row g-3 align-items-center">
      <div class="col-lg-6 text-center text-lg-start">
        <h1 class="display-1 mb-0 animated slideInLeft">Solutions</h1>
      </div>
      <div class="col-lg-6 animated slideInRight">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
            <li class="breadcrumb-item"><a class="text-primary" href="index.html">Home</a></li>
            <li class="breadcrumb-item text-secondary active" aria-current="page">Solutions</li>
          </ol>
        </nav>
      </div>
    </div>
  </div>
</div>
<!-- Hero End -->

<!-- Custom CSS -->
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
.row > div:nth-child(1) .sol-card { background-image: url('img/virtualization.jpg'); }
.row > div:nth-child(2) .sol-card { background-image: url('img/last.jpg'); }
.row > div:nth-child(3) .sol-card { background-image: url('img/deploy6.jpg'); }
.row > div:nth-child(4) .sol-card { background-image: url('img/deploy7.webp'); }
.row > div:nth-child(5) .sol-card { background-image: url('img/networksecurity.png'); }
.row > div:nth-child(6) .sol-card { background-image: url('img/IOT.jpg'); }
.row > div:nth-child(7) .sol-card { background-image: url('img/infrastructure.jpg'); }
.row > div:nth-child(8) .sol-card { background-image: url('img/deploy5.jpg'); }

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
<div class="container-fluid py-5">
  <div class="container">
    <div class="text-center mb-5 sol-heading">
      <h1>
        Explore Solutions
        <span class="text-uppercase text-white bg-dark px-2">
          With F1 Infotech
        </span>
      </h1>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_virtualization.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-server mb-3"></i>
              <h5 class="fw-bold">Virtualization</h5>
              <p class="mb-0 small">Latest breakthroughs in AI and cloud technologies.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_network.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-network-wired mb-3"></i>
              <h5 class="fw-bold">Network & Surveillance</h5>
              <p class="mb-0 small">Secure, reliable, and intelligent connectivity for a safer tomorrow.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_security.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-lock mb-3"></i>
              <h5 class="fw-bold">Security</h5>
              <p class="mb-0 small">Shielding your data, powering your future.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_devndep.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-code mb-3"></i>
              <h5 class="fw-bold">Software Development & Deployment</h5>
              <p class="mb-0 small">Turning your ideas into scalable, reliable, and secure software.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 5 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_infra.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-shield-alt mb-3"></i>
              <h5 class="fw-bold">Converged &amp; Hyperconverged Infrastructure</h5>
              <p class="mb-0 small">Simplify, accelerate, and scale your IT with next-gen infrastructure.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 6 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_iot.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-cogs mb-3"></i>
              <h5 class="fw-bold">Internet of Things</h5>
              <p class="mb-0 small">Connecting devices, creating possibilities.</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 7 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_backup.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-users mb-3"></i>
              <h5 class="fw-bold">Backup</h5>
              <p class="mb-0 small">Because business continuity starts with backup!</p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 8 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_cloud.php" class="text-decoration-none">
          <div class="card sol-card">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-robot mb-3"></i>
              <h5 class="fw-bold">Cloud Services</h5>
              <p class="mb-0 small">Flexible, scalable, and secure cloud solutions for your business.</p>
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

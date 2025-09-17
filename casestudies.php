<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Case Studies</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Case Studies</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Case Studies Content Start -->
<div class="container-fluid py-5 bg-light">
  <div class="container ">
    <div class="text-center mb-5">
      <h1>
        <span class="text-uppercase text-primary bg-white px-2">
          Case Studies
        </span>
      </h1>
      <p class="lead mt-3">
        
      </p>
    </div>

    <!-- Cards Row -->
<div class="d-flex flex-column flex-md-row gap-4 justify-content-center">
  
  <!-- Card 1 -->
  <div class="card equal-card">
    <img src="img/DPDP2.jpg" alt="TechSplash 2025">
    <div class="card-content">
      <h3>DPDP for one of India’s largest PSU!</h3>
      <div class="card-footer">
        <a href="#">Explore More →</a>
      </div>
    </div>
  </div>

  <!-- Card 2 -->
  <div class="card equal-card">
    <img src="img/futureready.jpg" alt="Cloud Migration">
    <div class="card-content">
      <h3>The IT arm of a Leading State Government Builds a Future-Ready,
Disaster Recovery Setup with F1 InfoTech</h3>
      <div class="card-footer">
        <a href="#">Read More →</a>
      </div>
    </div>
  </div>

</div>

<?php require("bot_getintouch.php"); ?>

  </div>
</div>

<!-- CSS -->
<style>
.card {
  position: relative;
  overflow: hidden;
  border-radius: 14px;
  box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
  height: 45vh;
  min-width: 280px;
  cursor: pointer;
}

.equal-card {
  flex: 1 1 0;   /* equal width distribution */
}

.card img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  transition: transform 0.5s ease;
}

.card:hover img {
  transform: scale(1.1);
}

.card-content {
  position: absolute;
  bottom: -100%;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.65);
  padding: 20px;
  text-align: left;
  transition: bottom 0.4s ease;
}

.card:hover .card-content {
  bottom: 0;
}

.card-content h3 {
  margin: 0 0 10px;
  font-size: 1.5rem;
  color: #fff;
}

.card-content a {
  color: #fff;
  font-weight: 700;
  text-decoration: none;
}

.card-content a:hover {
  text-decoration: underline;
}

</style>
<!-- Case Studies Content End -->

<?php require("bot_footer.php"); ?>

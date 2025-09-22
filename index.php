<?php require('top_nav.php'); ?>



<div class="container-fluid pb-5 hero-header bg-light mb-sm-3 mb-5">
    <div class="container py-sm-3 py-5">
        <div class="row g-sm-3 g-5 align-items-center mb-sm-3 mb-5">
            <div class="col-lg-6">
                <h1 class="display-3 mb-4 animated slideInRight">
                    Simplifying Complex
                    <span class="text-white">IT Landscapes</span>
                </h1>
                <h5 class="d-inline-block border border-2 border-white py-2 px-3 mb-0 animated slideInRight">
                    From virtualization to migration — we design, deploy, and manage
                    technology that works for your business.
                </h5>
            </div>
            <div class="col-lg-6">
                <div class="owl-carousel header-carousel animated fadeIn">
                    <img class="img-fluid" src="img/c3.jpg" alt="" />
                    <img class="img-fluid" src="img/c7.jpg" alt="" />
                    <img class="img-fluid" src="img/c2.jpg" alt="" />
                </div>
            </div>
        </div>
        <div class="row g-sm-3 g-5 animated fadeIn">
            <div class="col-sm-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-trophy text-white"></i>
                    </div>
                    <h5 class="lh-base mb-0">60+ Industry & OEM Awards</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-history text-white"></i>
                    </div>
                    <h5 class="lh-base mb-0">23+ Years of Proven Expertise</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-globe text-white"></i>
                    </div>
                    <h5 class="lh-base mb-0">300+ Global <br> Customers</h5>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="d-flex align-items-center">
                    <div class="flex-shrink-0 btn-square border border-2 border-white me-3">
                        <i class="fa fa-users text-white"></i>
                    </div>
                    <h5 class="lh-base mb-0">100+ Skilled Professionals</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->


<!--  Technology is central to everything we do-->
<!--  Technology is central to everything we do-->

<div class="container-fluid my-6 py-6 bg">
  <div class="container text-center">
    <br><br>
    <h1 class="display-4 fw-bold mb-4 custom-heading">
      Technology is central to everything we do, and
      <span class="text-primary">F1 is thriving</span>
    </h1>
    <br><br>

    <p class="lead mb-5 px-lg-5 custom-text">
      We offer a comprehensive suite of IT solutions designed to simplify complexity, enhance security,
      and drive operational excellence. From cloud and infrastructure to cybersecurity and managed services,
      our offerings are built to support digital transformation across industries.
    </p>

    <br><br>

    <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mt-4">
      <a href="solutions.php" class="btn custom-btn btn-lg px-4 py-2">Explore Our Solutions</a>
      <a href="feature.php" class="btn custom-btn btn-lg px-4 py-2">About the Company</a>
    </div>
    <br><br>
  </div>
</div>
<!-- Intro Text Section End -->

<style>
  /* Bigger heading */
  .custom-heading {
    font-size: 4rem; /* Larger than Bootstrap’s display-4 */
    line-height: 1.3;
  }

  /* Bigger paragraph */
  .custom-text {
    font-size: 1.5rem;
    line-height: 1.6;
  }

  /* Outlined button style */
  .custom-btn {
    font-size: 1.1rem;
    padding: 0.8rem 2rem;
    border-radius: 50px; /* Rounded pill shape */
    border: 2px solid #0088cc;
    background-color: transparent !important;
    color: #0088cc !important;
    transition: all 0.3s ease;
  }

  .custom-btn:hover {
    background-color: #0088cc !important;
    color: #fff !important;
  }


  /* Make icons inside solution cards white */
.sol-card i {
  color: #fff !important;
  
}
</style>
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
  min-height: 350px; /* Make cards taller */
  border: 2px solid #ffffff; /* Dodger Blue border */
}

/* Background images (local) */
.row > div:nth-child(1) .sol-card {
  background-image: url('img/virtualization.jpg');
}
.row > div:nth-child(2) .sol-card {
  background-image: url('img/last.jpg');
}
.row > div:nth-child(3) .sol-card {
  background-image: url('img/deploy6.jpg');
}
.row > div:nth-child(4) .sol-card {
  background-image: url('img/deploy7.webp');
}

/* Background images (local) */
.row > div:nth-child(1) .ser-card {
  background-image: url('img/securityandgovernance.png');
}
.row > div:nth-child(2) .ser-card {
  background-image: url('img/managedservices.png');
}
.row > div:nth-child(3) .ser-card {
  background-image: url('img/techstaffing.avif');
}
.row > div:nth-child(4) .ser-card {
  background-image: url('img/processautomation.png');
}


.ser-card {
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
  min-height: 350px; /* Make cards taller */
  border: 2px solid #ffffff; /* Dodger Blue border */
}
.ser-card i {
  color: #fff !important;
}/* Hover effect */
.ser-card:hover {
  transform: translateY(-12px);
}





/* Dark overlay */
.sol-overlay {
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
}

/* Text + Icon overlay */
.sol-content {
  position: relative;
  z-index: 2;
  padding: 25px;
}

.sol-content i {
  color: #0088cc;
  font-size: 3.2rem; /* Bigger icons */
}

.sol-content h5 {
  color: #fff !important;
  font-size: 1.4rem; /* Bigger heading */
  margin-bottom: 10px;
}

.sol-content p {
  font-size: 1rem; /* Slightly bigger body text */
  line-height: 1.6;
}

/* Hover effect */
.sol-card:hover {
  transform: translateY(-12px);
}

/* Custom button style */
.sol-btn {
  font-size: 1.1rem;
  padding: 0.8rem 2rem;
  border-radius: 50px;
  border: 2px solid #ffffff;
  background-color: transparent !important;
  color: #ffffff !important;
  transition: all 0.3s ease;
}
.sol-btn:hover {
  background-color: #ffffff !important;
  color: #000000 !important;
}

/* Section heading */
.sol-heading h1 {
  font-size: 2.5rem; /* Bigger heading above cards */
  font-weight: 700;
  color: #ffffff;
}
</style>





<!-- Feature Start -->
<div class="container-fluid py-5" style="background-color: #000000;">
  <div class="container">
    <div class="text-center mb-5 sol-heading">
      <h1>
        Explore Solutions
        <!-- <span class="text-uppercase text-primary bg-white px-2">
           with F1 Infotech
        </span> -->
        <span class="text-uppercase text-dark bg-white px-2">
           with F1 Infotech
        </span>
      </h1>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_virtualization.php" class="text-decoration-none">
          <div class="card sol-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-server fa-3x mb-3"></i>
              <h5 class="fw-bold">Virtualization</h5>
              <p class="mb-0 small">
                Latest breakthroughs in AI and cloud technologies.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_network.php" class="text-decoration-none">
          <div class="card sol-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-network-wired fa-3x mb-3"></i>
              <h5 class="fw-bold">Network &amp; Surveillance</h5>
              <p class="mb-0 small">
                Secure, reliable, and intelligent connectivity for a safer tomorrow.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_security.php" class="text-decoration-none">
          <div class="card sol-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-lock fa-3x mb-3"></i>
              <h5 class="fw-bold">Security</h5>
              <p class="mb-0 small">
                Shielding your data, powering your future.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="sol_devndep.php" class="text-decoration-none">
          <div class="card sol-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-code fa-3x mb-3"></i>
              <h5 class="fw-bold">Software Development &amp; Deployment</h5>
              <p class="mb-0 small">
                Turning your ideas into scalable, reliable, and secure software.
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- Button -->
    <div class="text-center mt-5">
      <!-- <a href="solutions.php" class="btn sol-btn px-4 py-2">
        Explore our Solutions
      </a> -->
      <a href="solutions.php" class="btn sol-btn px-4 py-2">
        Explore our Solutions
      </a>
    </div>
  </div>
</div>
<!-- Feature End -->


<<<<<<< Updated upstream

<hr style="margin:1px;  padding:0px">






=======
>>>>>>> Stashed changes
<!-- Services -->

<!-- Services Start -->
<div class="container-fluid py-5" style="background-color: #000000;">
  <div class="container">
    <div class="text-center mb-5 sol-heading">
      <h1>
        Explore Services
        <!-- <span class="text-uppercase text-primary bg-white px-2">
          With F1 Infotech
        </span> -->
        <span class="text-uppercase text-dark bg-white px-2">
          With F1 Infotech
        </span>
      </h1>
    </div>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_secngov.php" class="text-decoration-none">
          <div class="card ser-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-tools fa-3x mb-3"></i>
              <h5 class="fw-bold">Security & Governance</h5>
              <p class="mb-0 small">
                Protecting your data, securing your trust.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_manserv.php" class="text-decoration-none">
          <div class="card ser-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-cogs fa-3x mb-3"></i>
              <h5 class="fw-bold">Managed Services</h5>
              <p class="mb-0 small">
                Simplify IT. Focus on growth—we’ll handle the rest.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_techstaff.php" class="text-decoration-none">
          <div class="card ser-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-users fa-3x mb-3"></i>
              <h5 class="fw-bold">Technology Staffing</h5>
              <p class="mb-0 small">
                The right talent, when you need it.
              </p>
            </div>
          </div>
        </a>
      </div>

      <!-- Card 4 -->
      <div class="col-12 col-sm-6 col-md-3">
        <a href="ser_processauto.php" class="text-decoration-none">
          <div class="card ser-card text-center">
            <div class="sol-overlay"></div>
            <div class="sol-content">
              <i class="fa fa-robot fa-3x mb-3"></i>
              <h5 class="fw-bold">Process Automation</h5>
              <p class="mb-0 small">
                Automate routine tasks, accelerate business outcomes.
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <!-- Button -->
    <div class="text-center mt-5">
      <a href="services.php" class="btn sol-btn px-4 py-2">
        Explore our Services
      </a>
    </div>
  </div>
</div>
<!-- Services End -->


<style>
  .btn-primary {
    transition: all 0.3s ease-in-out;
  }

  .btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.2);
  }
</style>



<!-- Feature End -->

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
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    border-color: #0088cc;
  }

  .feature-card i {
    transition: color 0.3s ease-in-out;
  }

  .feature-card:hover i {
    color: #0a58ca;
  }
</style>








<!-- Testimonial Start -->
<div class="container-xxl py-5">
  <div class="container py-5">
    <!-- Section Heading -->
    <div class="row justify-content-center mb-5">
      <div class="col-lg-8 text-center">
        <h2 class="display-5 fw-bold mb-3">Latest at F1</h2>
        <div
          class="mx-auto"
          style="
                width: 180px;
                height: 3px;
                background: #000;     /* changed from #0088cc to black */
                border-radius: 2px;
              "></div>
      </div>
    </div>

    <div class="row justify-content-center border border-dark border-4 p-4">
      <!-- changed border-primary to border-dark -->
      <div class="col-md-12 col-lg-9">
        <div
          class="owl-carousel testimonial-carousel wow fadeIn"
          data-wow-delay="0.2s">
          
          <!-- Item 1 -->
          <div class="testimonial-item">
            <div class="row g-5 align-items-center">
              <div class="col-md-6">
                <div class="testimonial-img">
                  <img
                    class="img-fluid"
                    src="img/innovate (2).jpg"
                    alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial-text pb-5 pb-md-0">
                  <h3>Innovate & Migrate Nutanix</h3>
                  <p>
                    F1 InfoTech hosts “Innovate and Migrate” roundtable in
                    partnership with Nutanix – July 2025
                  </p>
                 <a class="btn custom-outline-btn " href="events.php">View More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="testimonial-item">
            <div class="row g-5 align-items-center">
              <div class="col-md-6">
                <div class="testimonial-img">
                  <img class="img-fluid" src="img/Pteam.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial-text pb-5 pb-md-0">
                  <h3>Annual Business Meet 2025</h3>
                  <p>
                    Celebrating success while prepping for the year ahead –
                    May 2025
                  </p>
                  <a class="btn custom-outline-btn" href="events.php">View More</a>
                </div>
              </div>
            </div>
          </div>

          <!-- Item 3 -->
          <div class="testimonial-item">
            <div class="row g-5 align-items-center">
              <div class="col-md-6">
                <div class="testimonial-img">
                  <img class="img-fluid" src="img/techsplash.jpg" alt="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="testimonial-text pb-5 pb-md-0">
                  <h3>TechSplash 2025</h3>
                  <p>
                    Showcasing cutting-edge innovations and real-world
                    solutions at India’s top IT conference – March 2025
                  </p>
                  
                  <!-- keep button blue -->
                  <style>
                  .custom-outline-btn {
                    font-size: 1.1rem;
                    padding: 0.5rem 1rem;
                    border-radius: 50px;
                    border: 2px solid  #000000;   /* keep blue */
                    background-color: transparent;
                    color: #000000!important;   /* keep blue */
                    font-weight: 600;
                    transition: all 0.3s ease;
                  }

                  .custom-outline-btn:hover {
                    background-color: #000000;
                    color: #fff !important;
                  }
                  </style>

                  <a class="btn custom-outline-btn " href="events.php">View More</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- carousel end -->
      </div>
    </div>
  </div>
</div>
<!-- Testimonial End -->





<!-- About Start -->
<!-- <div class="container-fluid py-5 my-6">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/history1.jpg" alt="" />
              </div>
              <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid h-75" src="img/award3.jpg" alt="" />
                <div
                  class="h-25 d-flex align-items-center text-center bg-primary px-4"
                >
                  <h4 class="text-white lh-base mb-0">
                    Started in 2003, now we are here
                  </h4>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <h1 class="mb-5">
              <span class="text-uppercase text-primary bg-light px-2">Our</span>
              Story
            </h1>
            <p class="mb-4">
              F1 InfoTech was founded in 2003 with a clear purpose: to help organizations harness the power of technology 
              in the simplest and most effective way. Starting as a small, passionate team, we focused on building trust with 
              every project we delivered. Over time, our dedication, customer-first approach, and problem-solving mindset helped 
              us grow into a recognized IT solutions partner for enterprises, BFSI, government, and telecom sectors.
            </p>
            <div class="row g-3">
              <div class="col-sm-6">
                <h6 class="mb-3">
                  <i class="fa fa-check text-primary me-2"></i>Award Winning
                </h6>
                <h6 class="mb-0">
                  <i class="fa fa-check text-primary me-2"></i>Professional
                  Staff
                </h6>
              </div>
              <div class="col-sm-6">
                <h6 class="mb-3">
                  <i class="fa fa-check text-primary me-2"></i>24/7 Support
                </h6>
                <h6 class="mb-0">
                  <i class="fa fa-check text-primary me-2"></i>Fair Prices
                </h6>
              </div>
            </div>
            <div class="d-flex align-items-center mt-5">
              <a class="btn btn-primary px-4 me-2" href="">Read More</a>
              <a
                class="btn btn-outline-primary btn-square border-2 me-2"
                href=""
                ><i class="fab fa-facebook-f"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square border-2 me-2"
                href=""
                ><i class="fab fa-twitter"></i
              ></a>
              <a
                class="btn btn-outline-primary btn-square border-2 me-2"
                href=""
                ><i class="fab fa-instagram"></i
              ></a>
              <a class="btn btn-outline-primary btn-square border-2" href=""
                ><i class="fab fa-linkedin-in"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </div> -->
<!-- About End -->

<!-- Customers Start -->
<div class="container-fluid py-5" style="background-color: #d3d3d3;">


  <div class="text-center mb-5">
    <h1>Our
       <!-- <span class="text-uppercase text-primary bg-white px-2">  Customers</span> -->
       <span class="text-uppercase text-dark bg-white px-2">  Customers</span>
    </h1>
    <p class="text-white">Trusted by leading enterprises across industries</p>
  </div>

  <!-- Second Row of Carousels -->
  <div class="customer-carousel d-flex align-items-center">
    <div class="customer-logos reverse">

      <img src="img/Customers/aiims.png" alt="Customer 1" />
      <img src="img/Customers/bp.png" alt="Customer 2" />
      <img src="img/Customers/coforge.png" alt="Customer 3" />
      <img src="img/Customers/cris.png" alt="Customer 4" />
      <img src="img/Customers/dhani.png" alt="Customer 5" />
      <img src="img/Customers/encore.png" alt="Customer 6" />
      <img src="img/Customers/indianoil.png" alt="Customer 7" />
      <!-- <img src="img/Customers/infoedge" alt="Customer 8" /> -->
      <img src="img/Customers/irctc.png" alt="Customer 9" />
      <img src="img/Customers/mahakumbh.png" alt="Customer 10" />
      <img src="img/Customers/mahindra.png" alt="Customer 11" />
      <img src="img/Customers/maruti.png" alt="Customer 12" />
      <img src="img/Customers/nic.png" alt="Customer 13" />
      <img src="img/Customers/niit.png" alt="Customer 14" />
      <img src="img/Customers/ongc.png" alt="Customer 15" />
      <img src="img/Customers/paytm.png" alt="Customer 16" />
      <img src="img/Customers/pnb.png" alt="Customer 17" />
      <img src="img/Customers/powergrid.png" alt="Customer 18" />
      <img src="img/Customers/pti.png" alt="Customer 19" />
      <!-- <img src="img/Customers/railtel.png" alt="Customer 20" /> -->
      <img src="img/Customers/sgrh.png" alt="Customer 21" />
      <img src="img/Customers/startek.png" alt="Customer 22" />
      <img src="img/Customers/suzuki.png" alt="Customer 23" />
      <img src="img/Customers/tpd.png" alt="Customer 24" />
      <!-- duplicate set for seamless loop -->

      <img src="img/Customers/aiims.png" alt="Customer 1" />
      <img src="img/Customers/bp.png" alt="Customer 2" />
      <img src="img/Customers/coforge.png" alt="Customer 3" />
      <img src="img/Customers/cris.png" alt="Customer 4" />
      <img src="img/Customers/dhani.png" alt="Customer 5" />
      <img src="img/Customers/encore.png" alt="Customer 6" />
      <img src="img/Customers/indianoil.png" alt="Customer 7" />
      <!-- <img src="img/Customers/infoedge" alt="Customer 8" /> -->
      <img src="img/Customers/irctc.png" alt="Customer 9" />
      <img src="img/Customers/mahakumbh.png" alt="Customer 10" />
      <img src="img/Customers/mahindra.png" alt="Customer 11" />
      <img src="img/Customers/maruti.png" alt="Customer 12" />
      <img src="img/Customers/nic.png" alt="Customer 13" />
      <img src="img/Customers/niit.png" alt="Customer 14" />
      <img src="img/Customers/ongc.png" alt="Customer 15" />
      <img src="img/Customers/paytm.png" alt="Customer 16" />
      <img src="img/Customers/pnb.png" alt="Customer 17" />
      <img src="img/Customers/powergrid.png" alt="Customer 18" />
      <img src="img/Customers/pti.png" alt="Customer 19" />
      <!-- <img src="img/Customers/railtel.png" alt="Customer 20" /> -->
      <img src="img/Customers/sgrh.png" alt="Customer 21" />
      <img src="img/Customers/startek.png" alt="Customer 22" />
      <img src="img/Customers/suzuki.png" alt="Customer 23" />
      <img src="img/Customers/tpd.png" alt="Customer 24" />
    </div>
  </div>
  <br>
  <br>
  <br>




    <div class="text-center mb-5" style="background-color: #d3d3d3;">
    <h1>Our
      <!-- <span class="text-uppercase text-primary bg-white px-2"> Partners</span> -->
       <span class="text-uppercase text-dark bg-white px-2"> Partners</span>
    </h1>
    <p class="text-white">Trusted by leading enterprises across industries</p>
  </div>

  <!-- First Row of Carousels -->
  <div class="customer-carousel d-flex align-items-center mb-4">
    <div class="customer-logos">
      <img src="img/Parteners/aws.png" alt="Customer 1" />
      <img src="img/Parteners/azure.png" alt="Customer 2" />
      <img src="img/Parteners/cisco.png" alt="Customer 3" />
      <img src="img/Parteners/dell.png" alt="Customer 4" />
      <img src="img/Parteners/dlink.png" alt="Customer 5" />
      <img src="img/Parteners/fortinet.png" alt="Customer 6" />
      <img src="img/Parteners/nutanix.png" alt="Customer 7" />
      <!-- <img src="img/Partners/oracle.png" alt="Customer 8" /> -->
      <img src="img/Parteners/redhat.png" alt="Customer 9" />
      <img src="img/Parteners/veeam.png" alt="Customer 10" />
      <img src="img/Parteners/vmware.png" alt="Customer 11" />


      <!-- duplicate set for seamless loop -->
      <img src="img/Parteners/aws.png" alt="Customer 1" />
      <img src="img/Parteners/azure.png" alt="Customer 2" />
      <img src="img/Parteners/cisco.png" alt="Customer 3" />
      <img src="img/Parteners/dell.png" alt="Customer 4" />
      <img src="img/Parteners/dlink.png" alt="Customer 5" />
      <img src="img/Parteners/fortinet.png" alt="Customer 6" />
      <img src="img/Parteners/nutanix.png" alt="Customer 7" />
      <!-- <img src="img/Parteners/oracle.png" alt="Customer 8" /> -->
      <img src="img/Parteners/redhat.png" alt="Customer 9" />
      <img src="img/Parteners/veeam.png" alt="Customer 10" />
      <img src="img/Parteners/vmware.png" alt="Customer 11" />

    </div>
  </div>
</div>
<!-- Customers End -->

<style>
  .customer-carousel {
    overflow: hidden;
    position: relative;
    height: 100px;
    width: 100%;
    /* full width */
  }

  .customer-logos {
    display: flex;
    gap: 40px;
    animation: scrollLeft 25s linear infinite;
    width: max-content;
    /* ensures continuous flow */
  }

  .customer-logos.reverse {
    animation: scrollRight 30s linear infinite;

  }

  .customer-logos img {
    max-height: 80px;
    object-fit: contain;
    filter: grayscale(100%);
    transition: all 0.3s ease-in-out;
  }

  .customer-logos img:hover {
    filter: grayscale(0%);
    transform: scale(1.1);
  }

  @keyframes scrollLeft {
    0% {
      transform: translateX(0);
    }

    100% {
      transform: translateX(-50%);
    }
  }

  @keyframes scrollRight {
    0% {
      transform: translateX(-50%);
    }

    100% {
      transform: translateX(0);
    }
  }
</style>


<!-- Feature Start -->
<!-- <div class="container-fluid py-5">
      <div class="container">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
          <h1 class="mb-5">
            Why Clients
            <span class="text-uppercase text-primary bg-light px-2"
              >Trust F1 Infotech</span
            >
          </h1>
        </div>
        <div class="row g-5 align-items-center text-center">
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <i class="fa fa-calendar-alt fa-5x text-primary mb-4"></i>
            <h4>Expertise Across IT Domains</h4>
            <p class="mb-0">
              Delivering best-in-class solutions across IT Infrastructure,
              Security, Automation, Development, and Healthcare sectors.
            </p>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <i class="fa fa-shield-alt fa-5x text-primary mb-4"></i>
            <h4>Secure & Cost-Efficient Solutions</h4>
            <p class="mb-0">
              Committed to providing high-quality, highly-secured technology at
              competitive prices for enterprises and government organizations.
            </p>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-bullseye fa-5x text-primary mb-4"></i>
            <h4>Client-Centric Approach</h4>
            <p class="mb-0">
              Responsive and relevant in our engagements, always aiming to
              consistently deliver value and build long-term relationships.
            </p>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
            <i class="fa fa-users fa-5x text-primary mb-4"></i>
            <h4>Trusted Partnerships</h4>
            <p class="mb-0">
              We enhance value for our partners and customers through our deep
              market understanding and technical excellence.
            </p>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
            <i class="fa fa-lightbulb fa-5x text-primary mb-4"></i>
            <h4>Innovation & Learning Culture</h4>
            <p class="mb-0">
              Driven by innovation, perseverance, and continuous learning to
              address challenges creatively and reliably.
            </p>
          </div>
          <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
            <i class="fa fa-handshake fa-5x text-primary mb-4"></i>
            <h4>Integrity & Passion in Action</h4>
            <p class="mb-0">
              Guided by honesty, responsibility, and a passion to
              excel—delighting clients through quality and genuine commitment.
            </p>
          </div>
        </div>
      </div>
    </div> -->

<!-- Feature End -->

<!-- Project Start -->
<!-- <div class="container-fluid mt-5">
        <div class="container mt-5">
            <div class="row g-0">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
                        <h1 class="text-white mb-5">Our Latest <span
                                class="text-uppercase text-primary bg-light px-2">Updates</span></h1>
                        <h4 class="text-white mb-0"><span class="display-1">6</span> of our latest updates</h4>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.2s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-1.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Kitchen</h4>
                                    <small class="text-white">72 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                            <div class="project-item position-relative overflow-hidden">
                                < class="img-fluid w-100" src="img/project-2.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Bathroom</h4>
                                    <small class="text-white">67 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.4s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-3.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Bedroom</h4>
                                    <small class="text-white">53 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-4.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Living Room</h4>
                                    <small class="text-white">33 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.6s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-5.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Furniture</h4>
                                    <small class="text-white">87 Projects</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.7s">
                            <div class="project-item position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/project-6.jpg" alt="">
                                <a class="project-overlay text-decoration-none" href="">
                                    <h4 class="text-white">Rennovation</h4>
                                    <small class="text-white">69 Projects</small>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- Project End -->

<!-- Service Start -->
<!-- <div class="container-fluid py-5">
      <div class="container py-5">
        <div class="row g-5 align-items-center">
          <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="mb-5">
              Our
              <span class="text-uppercase text-primary bg-light px-2"
                >Approach</span
              >
            </h1>
            <p>
              We follow a Discover–Design–Deploy–Retain model, ensuring every
              solution is thoughtfully crafted, efficiently executed, and
              consistently optimized. Our goal is to deliver measurable value,
              not just services.
            </p>
            <p class="mb-5"></p>
            <p>
              Our approach is rooted in continuous improvement and
              client-focused excellence. Guided by our values of integrity,
              innovation, perseverance, and learning, we don’t just deliver
              solutions—we cultivate sustainable, high-impact partnerships that
              consistently drive measurable business results.
            </p>
            <div class="d-flex align-items-center bg-light">
              <div
                class="btn-square flex-shrink-0 bg-primary"
                style="width: 100px; height: 100px"
              >
                <i class="fa fa-phone fa-2x text-white"></i>
              </div>
              <div class="px-3">
                <h3>+011 499 685 67</h3>
                <span>Call us for a free consultation</span>
              </div>
            </div>
          </div>
          <div class="col-lg-7">
            <div class="row g-0">
              <div class="col-md-6 wow fadeIn" data-wow-delay="0.2s">
                <div
                  class="service-item h-100 d-flex flex-column justify-content-center bg-primary"
                >
                  <a href="" class="service-img position-relative mb-4">
                    <img
                      class="img-fluid w-100"
                      src="img/discover.jpeg"
                      alt=""
                    />
                    <h3>Discover</h3>
                  </a>
                  <p class="mb-0">
                    Identify goals, problems and gather detailed requirements.
                  </p>
                </div>
              </div>
              <div class="col-md-6 wow fadeIn" data-wow-delay="0.4s">
                <div
                  class="service-item h-100 d-flex flex-column justify-content-center bg-light"
                >
                  <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="img/design.jpg" alt="" />
                    <h3>Design</h3>
                  </a>
                  <p class="mb-0">
                    Craft seamless wireframes, flows, and UI mockups.
                  </p>
                </div>
              </div>
              <div class="col-md-6 wow fadeIn" data-wow-delay="0.6s">
                <div
                  class="service-item h-100 d-flex flex-column justify-content-center bg-light"
                >
                  <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="img/deploy.jpg" alt="" />
                    <h3>Deploy</h3>
                  </a>
                  <p class="mb-0">
                    Build, test, and deploy scalable solutions with precision.
                  </p>
                </div>
              </div>
              <div class="col-md-6 wow fadeIn" data-wow-delay="0.8s">
                <div
                  class="service-item h-100 d-flex flex-column justify-content-center bg-primary"
                >
                  <a href="" class="service-img position-relative mb-4">
                    <img class="img-fluid w-100" src="img/retain.webp" alt="" />
                    <h3>Retain</h3>
                  </a>
                  <p class="mb-0">
                    Monitor, support, and continuously evolve solutions.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
<!-- Service End -->

<!-- Team Start -->
<!-- <div class="container-fluid bg-light py-5">
      <div class="container py-5">
        <h1 class="mb-5">
          Our<span class="text-uppercase text-primary bg-light px-2">
            Professionals
          </span>
        </h1>
        <div class="row g-4">
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.1s">
            <div class="team-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/Manishsir1.jpg" alt="" />
              <div class="team-overlay">
                <small class="mb-2">CEO</small>
                <h4 class="lh-base text-light">Manish Manocha</h4>
                <div class="d-flex justify-content-center">
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
            <div class="team-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/SunilGupta2.jpg" alt="" />
              <div class="team-overlay">
                <small class="mb-2">Director</small>
                <h4 class="lh-base text-light">Sunil Gupta</h4>
                <div class="d-flex justify-content-center">
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
            <div class="team-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/team-3.jpg" alt="" />
              <div class="team-overlay">
                <small class="mb-2">CTO</small>
                <h4 class="lh-base text-light">Bradley Gordon</h4>
                <div class="d-flex justify-content-center">
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.7s">
            <div class="team-item position-relative overflow-hidden">
              <img class="img-fluid w-100" src="img/team-4.jpg" alt="" />
              <div class="team-overlay">
                <small class="mb-2">Director</small>
                <h4 class="lh-base text-light">Alexander Bell</h4>
                <div class="d-flex justify-content-center">
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-facebook-f"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-instagram"></i>
                  </a>
                  <a
                    class="btn btn-outline-primary btn-sm-square border-2 me-2"
                    href=""
                  >
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
<!-- Team End -->



<!-- Testimonial End -->

<?php require("bot_getintouch.php"); ?>
<?php require("bot_footer.php"); ?>
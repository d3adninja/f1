<?php require('top_nav.php'); ?>



    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">About the Company</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                  <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="index.html">Home</a></li>
                            
                            <li class="breadcrumb-item text-secondary active" aria-current="page">About the Company</li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6">
            <div class="row">
              <div class="col-6 wow fadeIn" data-wow-delay="0.1s">
                <img class="img-fluid" src="img/ourstory8.jpg " alt="" />
              </div>
              <div class="col-6 wow fadeIn" data-wow-delay="0.3s">
                <img class="img-fluid h-75" src="img/ourstory7.jpg" alt="" />
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
            
            <!-- <div class="d-flex align-items-center mt-5">
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
                ><i class="fab fa-linkedin-in"></i></a>
            </div> -->
          </div>
        </div>
      </div>
    </div>
    <!-- About End -->


    
<!-- Timeline Start -->
<div class="container-fluid py-6" style="background-color:#eef7ff" >
  <div class="container" style="min-height:500px;">
    <br>
   
    
    <div class="text-center mb-3 wow fadeIn" data-wow-delay="0.1s">
      <h1 class="mb-1 py-3">
        Our <span class="text-uppercase text-primary bg-white px-2">Milestones</span>
      </h1>
      
    </div>
    <br>
    <br>
    
    <div class="timeline position-relative">
      <!-- Timeline line -->
      <div class="timeline-line"></div>
      <div class="timeline-items d-flex justify-content-between text-center">
        
        <!-- Item 1 -->
        <div class="timeline-item top">
          <div class="timeline-content">
            <h5>2003</h5>
            <p class="small">Company recieved the status of Incorporated</p>
          </div>
          <div class="timeline-connector"></div>
          <div class="timeline-dot"></div>
          <div class="timeline-arrow up"></div>
        </div>

        <!-- Item 2 -->
        <div class="timeline-item bottom">
          <div class="timeline-arrow down"></div>
          <div class="timeline-dot"></div>
          <div class="timeline-connector"></div>
          <div class="timeline-content">
            <h5>2006</h5>
            <p class="small">F1 gained the status oof private limited.</p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="timeline-item top">
          <div class="timeline-content">
            <h5>2009</h5>
            <p class="small">F1 recieved an ISO certification</p>
          </div>
          <div class="timeline-connector"></div>
          <div class="timeline-dot"></div>
          <div class="timeline-arrow up"></div>
        </div>

        <!-- Item 4 -->
        <div class="timeline-item bottom">
          <div class="timeline-arrow down"></div>
          <div class="timeline-dot"></div>
          <div class="timeline-connector"></div>
          <div class="timeline-content">
            <h5>2020</h5>
            <p class="small">Quality certifications all India Spread</p>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="timeline-item top">
          <div class="timeline-content">
            <h5>2022</h5>
            <p class="small">ISO 27001, CMM Level 5 Certified</p>
          </div>
          <div class="timeline-connector"></div>
          <div class="timeline-dot"></div>
          <div class="timeline-arrow up"></div>
        </div>

        <!-- Item 6 -->
        <div class="timeline-item bottom">
          <div class="timeline-arrow down"></div>
          <div class="timeline-dot"></div>
          <div class="timeline-connector"></div>
          <div class="timeline-content">
            <h5>2025</h5>
            <p class="small">30+ Million USD enterprise with 300+ customers.</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Timeline End -->

<style>
  .timeline {
    position: relative;
    padding: 140px 0 120px 0; /* increased vertical space */
  }
  .timeline-line {
    position: absolute;
    top: 50%;
    left: 6%;
    width: 88%;
    height: 4px;
    background: #0d6efd;
    z-index: 1;
    transform: translateY(-50%);
    pointer-events: none;
  }
  .timeline-items {
    position: relative;
    z-index: 2;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .timeline-item {
    position: relative;
    flex: 1 1 0%;
    min-width: 100px;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .timeline-dot {
    width: 30px;
    height: 30px;
    background: #0d6efd;
    border-radius: 50%;
    border: 4px solid #fff;
    box-shadow: 0 0 5px rgba(0,0,0,0.2);
    z-index: 3;
    position: absolute;
    left: 50%;
    top: 43%;
    transform: translate(-50%, -80%);
  }
  .timeline-connector {
    width: 2px;
    background: #0d6efd;
    position: absolute;
    left: 50%;
    z-index: 2;
    transform: translateX(-50%);
  }
  .timeline-item.top .timeline-connector {
    height: 60px;
    top: calc(50% - 60px);
  }
  .timeline-item.bottom .timeline-connector {
    height: 60px;
    top: 50%;
  }
  .timeline-arrow {
    width: 0;
    height: 0;
    position: absolute;
    left: 50%;
    z-index: 2;
    transform: translateX(-50%);
  }
  .timeline-arrow.up {
    top: calc(50% - 68px);
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-bottom: 12px solid #0d6efd;
  }
  .timeline-arrow.down {
    top: calc(50% + 55px);
    border-left: 10px solid transparent;
    border-right: 10px solid transparent;
    border-top: 12px solid #0d6efd;
  }
  .timeline-item.top .timeline-content {
    position: absolute;
    left: 50%;
    top: calc(50% - 156px); /* lowered from -285px */
    transform: translateX(-50%);
    background: white;
    padding: 12px 16px; /* reduced padding */
    border-radius: 10px;
    min-width: 150px;
    max-width: 200px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    z-index: 4;
  }
  .timeline-item.bottom .timeline-content {
    position: absolute;
    left: 50%;
    top: calc(50% + 24px); /* slightly more spacing */
    transform: translateX(-50%);
    background: white;
    padding: 12px 16px; /* reduced padding */
    border-radius: 10px;
    min-width: 150px;
    max-width: 200px;
    box-shadow: 0 2px 6px rgba(0,0,0,0.08);
    z-index: 4;
  }
  .timeline-content h5 {
    margin-bottom: 6px;
    font-size: 16px;
  }
  .timeline-content p {
    font-size: 13px;
    line-height: 1.4;
  }
  @media (max-width: 991px) {
    .timeline-line {
      left: 25px;
      top: 0;
      width: 4px;
      height: 100%;
      transform: none;
    }
    .timeline-items {
      flex-direction: column;
      align-items: flex-start;
    }
    .timeline-item {
      min-width: 0;
      width: 100%;
      text-align: left;
      margin-bottom: 80px;
      flex-direction: row;
    }
    .timeline-dot {
      position: static;
      margin: 0 20px 0 0;
      transform: none;
    }
    .timeline-content {
      position: static !important;
      margin: 0;
      min-width: 0;
      max-width: 100%;
      box-shadow: none;
      padding: 10px 12px;
      border-radius: 8px;
    }
    .timeline-arrow,
    .timeline-connector {
      display: none;
    }
  }
</style>












    <!-- Vision & Mission Start -->
    <div class="container-fluid py-5">
      <div class="container">
        <br>
          <br>
          <br>
        <div class="row g-4">
          
          <!-- Vision Card -->
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
            <div class="card h-100 shadow border-0">
              <div class="card-body d-flex flex-column p-4">
                <div class="d-flex align-items-center mb-3">
                  <i class="fa fa-eye fa-2x text-primary me-3" aria-hidden="true"></i>
                  <h3 class="mb-0 text-center">Vision</h3>
                </div>
                <br>
                <p class="mb-4">
                  To be the most trusted partner for enterprises by delivering secure, scalable, and future-ready IT solutions that accelerate digital transformation.</p>
  
                <a href="#" class="btn btn-primary mt-auto align-self-start">Read More</a>
              </div>
            </div>
          </div>

          <!-- Mission Card -->
          <div class="col-md-6 wow fadeIn" data-wow-delay="0.3s">
            <div class="card h-100 shadow border-0">
              <div class="card-body d-flex flex-column p-4">
                <div class="d-flex align-items-center mb-3">
                  <i class="fa fa-bullseye fa-2x text-primary me-3" aria-hidden="true"></i>
                  <h3 class="mb-0">Mission</h3>
                </div>
                <br>
                <p class="mb-4">
                  Our mission is to discover each client’s unique challenges, design innovative and tailored IT solutions, deploy them with speed, security, and efficiency, and build long-lasting partnerships that deliver measurable business value.</p>
   
                <a href="#" class="btn btn-primary mt-auto align-self-start">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Vision & Mission End -->



<!-- Service Start -->
   <div class="container-fluid py-5" style="background-color:#eef7ff">
  <div class="container py-5 text-center">
    <!-- Section Header -->
    <h1 class="mb-4 wow fadeIn" data-wow-delay="0.1s">
      Our
      <span class="text-uppercase text-primary bg-light px-2">Approach</span>
    </h1>
    <p class="mb-5 wow fadeIn" data-wow-delay="0.2s">
      We follow a Discover–Design–Deploy–Retain model, ensuring every
      solution is thoughtfully crafted, efficiently executed, and
      consistently optimized. Our goal is to deliver measurable value,
      not just services.
    </p>

    <!-- Steps Grid -->
    <div class="row g-4 justify-content-center">
      <!-- Discover -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.3s">
        <div class="service-item h-100 d-flex flex-column align-items-center bg-primary text-center p-4 rounded-3 shadow">
          <img class="img-fluid mb-3" src="img/discover3.png" alt="Discover" />
          <h3 class="mb-2">Discover</h3>
          <p>Identify goals, problems and gather detailed requirements.</p>
        </div>
      </div>

      <!-- Design -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.4s">
        <div class="service-item h-100 d-flex flex-column align-items-center bg-light text-center p-4 rounded-3 shadow">
          <img class="img-fluid mb-3" src="img/design3.png" alt="Design" />
          <h3 class="mb-2">Design</h3>
          <p>Craft seamless wireframes, flows, and UI mockups.</p>
        </div>
      </div>

      <!-- Deploy -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.5s">
        <div class="service-item h-100 d-flex flex-column align-items-center bg-light text-center p-4 rounded-3 shadow">
          <img class="img-fluid mb-3" src="img/deploy4.png" alt="Deploy" />
          <h3 class="mb-2">Deploy</h3>
          <p>Build, test, and deploy scalable solutions with precision.</p>
        </div>
      </div>

      <!-- Retain -->
      <div class="col-md-6 col-lg-3 wow fadeIn" data-wow-delay="0.6s">
        <div class="service-item h-100 d-flex flex-column align-items-center bg-primary text-center p-4 rounded-3 shadow">
          <img class="img-fluid mb-3" src="img/retain3.png" alt="Retain" />
          <h3 class="mb-2">Retain</h3>
          <p>Monitor, support, and continuously evolve solutions.</p>
        </div>
      </div>
    </div>
  </div>
</div>

    <!-- Service End -->







    <!-- Feature Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="text-center wow fadeIn" data-wow-delay="0.1s">
                <h1 class="mb-5">Why People <span class="text-uppercase text-primary bg-light px-2">Choose Us</span></h1>
            </div>
            <div class="row g-5 align-items-center text-center">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-calendar-alt fa-5x text-primary mb-4"></i>
                    <h4>25+ Years Experience</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-tasks fa-5x text-primary mb-4"></i>
                    <h4>Best Interior Design</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-pencil-ruler fa-5x text-primary mb-4"></i>
                    <h4>Innovative Architects</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <i class="fa fa-user fa-5x text-primary mb-4"></i>
                    <h4>Customer Satisfaction</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <i class="fa fa-hand-holding-usd fa-5x text-primary mb-4"></i>
                    <h4>Budget Friendly</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <i class="fa fa-check fa-5x text-primary mb-4"></i>
                    <h4>Sustainable Material</h4>
                    <p class="mb-0">Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor eirmod magna dolore erat amet</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Feature End -->


    <!-- Newsletter Start -->

    <?php require("bot_getintouch.php"); ?>
    <!-- Newsletter End -->


   <?php require("bot_footer.php"); ?>
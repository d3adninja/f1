<?php require('top_nav.php'); ?>



    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">News Room</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="index.html">Home</a></li>
                            
                            <li class="breadcrumb-item text-secondary active" aria-current="page">News Room</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    

    
    <!-- Feature End -->

<!-- Project Start -->
<!-- <div class="container-fluid mt-5">
  <div class="container mt-5">
    <div class="row g-0">
      <!-- Left Side Text 
      <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="d-flex flex-column justify-content-center bg-primary h-100 p-5">
          <h1 class="text-white mb-5">
            Our Latest <span class="text-uppercase text-primary bg-light px-2">Updates</span>
          </h1>
          <h4 class="text-white mb-0">
            <span class="display-1">Look</span> what goes on at F1
          </h4>
        </div>
      </div>

      <!-- Right Side: 3 Final Columns 
      <div class="col-lg-7">
        <div class="row g-0 h-100">
          
          <!-- Column 1 
          <div class="col-lg-4">
            <div class="project-item position-relative overflow-hidden h-100">
              <img class="img-fluid w-100 h-100 object-fit-cover" src="img/innovate.jpg" alt="">
              <a class="project-overlay text-decoration-none d-flex flex-column justify-content-end text-center p-3" href="">
                <h4 class="text-white mb-2">Innovate & Migrate Nutanix</h4>
                <small class="text-white d-block mb-2">Combined highlights of Project 1 and Project 4</small>
                <button class="btn btn-light btn-sm">Read More</button>
              </a>
            </div>
          </div>

          <!-- Column 2 --
          <div class="col-lg-4">
            <div class="project-item position-relative overflow-hidden h-100">
              <img class="img-fluid w-100 h-100 object-fit-cover" src="img/techsplash.jpg" alt="">
              <a class="project-overlay text-decoration-none d-flex flex-column justify-content-end text-center p-3" href="">
                <h4 class="text-white mb-2">TechSplash 2025</h4>
                <small class="text-white d-block mb-2">Insights into the newest approaches to digital safety.</small>
                <button class="btn btn-light btn-sm">Read More</button>
              </a>
            </div>
          </div>

          <!-- Column 3 --
          <div class="col-lg-4">
            <div class="project-item position-relative overflow-hidden h-100">
              <img class="img-fluid w-100 h-100 object-fit-cover" src="img/Pteam.jpg" alt="">
              <a class="project-overlay text-decoration-none d-flex flex-column justify-content-end text-center p-3" href="">
                <h4 class="text-white mb-2">Annual Business Meet 2025</h4>
                <small class="text-left text-white d-block mb-2">Enterprises embrace cloud-first strategies for growth.</small>
                <button class="btn btn-light btn-sm ">Read More</button>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>-->

<!-- Styles 
<style>
.project-item {
  height: 100%;
  min-height: 700px; /* matches old section height */
}
.project-item img {
  object-fit: cover;
  height: 100%;
}
.project-overlay {
  background: rgba(0, 0, 0, 0.6); /* keeps dark overlay */
  opacity: 0;
  transition: 0.4s;
}
.project-item:hover .project-overlay {
  opacity: 1;
}
.project-overlay h4,
.project-overlay small {
  margin: 0;
}
.project-overlay .btn {
  font-size: 0.85rem;
  border-radius: 20px;
  padding: 6px 16px;
  background: transparent;   /* transparent background */
  color: #fff;              /* white text */
  border: 1px solid #fff;   /* white border */
  transition: all 0.3s ease; /* smooth hover */
  display: inline-block;
  margin: 0 auto;
}
.project-overlay .btn:hover {
  background: #fff;         /* white background on hover */
  color: #000;              /* black text on hover */
}
</style> -->
<!-- Project End -->
<style>
    .btn1 {
        display: inline-block;
        position: relative;
        text-decoration: none;
        border-radius: 50px;
        padding: 14px 28px;
    }

    /* border layer */
    .btn1::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 2px solid #000000ff;
        border-radius: 50px;
        transition: transform 0.3s ease, border-color 0.3s ease;
        transform-origin: left center;
        z-index: 0;
    }

    /* static content */
    .content {
        position: relative;
        display: inline-flex;
        align-items: center;
        gap: 10px;
        z-index: 1;
    }

    .text1 {
        font-size: large;
        font-weight: 700;
        color: #000000ff;
        transition: color 0.3s ease;
    }

    .arrow1 {
        display: inline-block;
        transition: transform 0.3s ease, color 0.3s ease;
        color: #000000ff;
    }

    /* hover effect */
    .btn1:hover::before {
        transform: scaleX(1.2);
        border-color: #155dfc;
    }

    .btn1:hover .text1 {
        color: #155dfc;
    }

    .btn1:hover .arrow1 {
        transform: translateX(35px);
        color: #155dfc;
    }
</style>

<style>
    :root {
        --accent: #000000ff;
    }

    .about {
        position: relative;
        padding: 24px 32px 120px;
        overflow: hidden;
    }

    .about-heading {
        margin: 0 0 18px 120px;
        font-size: 2.6rem;
        color: #555;
    }

    .about-bg {
        position: absolute;
        left: 120px;
        top: 130px;
        width: 64vw;
        height: 64vh;
        max-width: 780px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.55);
        z-index: 0;
    }

    .commitment {
        position: relative;
        z-index: 2;
        margin-left: 720px;
        margin-right: 32px;
        margin-top: -25px;
        width: min(600px, 42vw);
        background: #e6f0ef;
        border-radius: 18px;
        padding: 28px 30px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, 0.55);
        height: 320px;
        color: black;
        backdrop-filter: blur(4px);
        -webkit-backdrop-filter: blur(4px);
    }

    .commitment h2 {
        margin: 0 0 14px;
        font-size: 1.9rem;
        color: var(--accent);
    }

    .feature-row {
        position: relative;
        z-index: 2;
        margin-top: 75px;
        display: flex;
        gap: 22px;
        justify-content: flex-start;
        padding-left: 420px;
        margin-right: 80px;
        height: 200px;
    }

    /* Card Styles */
    .card {
        position: relative;
        overflow: hidden;
        border-radius: 14px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.5);
        height: 30vh;
        width: 280px;
        cursor: pointer;
    }

    .card img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        transition: transform 0.5s ease;
    }

    .card-content {
        position: absolute;
        bottom: -100%;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.65);
        padding: 18px;
        text-align: left;
        transition: bottom 0.4s ease;
    }

    .card-content h3 {
        margin: 0 0 8px;
        font-size: 1.25rem;
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

    /* Hover effects */
    .card:hover img {
        transform: scale(1.1);
    }

    .card:hover .card-content {
        bottom: 0;
    }

    /* Responsive Breakpoints */
    @media (max-width: 1100px) {
        .about-bg {
            width: 52vw;
            max-width: 580px;
            top: 150px;
        }

        .commitment {
            width: min(520px, 50vw);
            margin-left: 520px;
        }

        .feature-row {
            padding-left: 280px;
        }
    }

    @media (max-width: 900px) {
        .about {
            padding-bottom: 48px;
        }

        .about-bg {
            position: relative;
            display: block;
            width: 100%;
            max-width: none;
            left: 0;
            top: 0;
            margin: 8px 0 18px;
            z-index: 0;
        }

        .commitment {
            width: auto;
            margin: 0 0 18px 0;
        }

        .feature-row {
            flex-direction: column;
            padding-left: 0;
            gap: 16px;
        }
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 2rem;
            margin-left: 0;
            text-align: center;
        }

        .commitment {
            padding: 20px;
        }

        .card {
            width: 90%;
            height: auto;
            margin: 0 auto;
        }
    }

    @media (max-width: 480px) {
        .about-bg {
            height: 200px;
        }

        .commitment {
            height: auto;
        }

        .card {
            padding: 0;
            font-size: 0.9rem;
        }
    }
</style>

<section class="about" id="about">
    <h1 class="about-heading">Who are we</h1>
    <img class="about-bg" src="img/employes2.avif" alt="About background" />
    <div class="commitment">
        <h2>F1 Infotech</h2>
        <p>
            F1 Infotech is a trusted provider of innovative IT solutions,<br>
                         delivering cutting-edge technology services to help <br>
                         businesses grow and adapt in the digital era.
        </p>
    </div>

    <div class="feature-row">
        <div class="card">
            <img src="img/innovate.jpg" alt="Innovate & Migrate Nutanix">
            <div class="card-content">
                <h3>Innovate & Migrate Nutanix</h3>
                <div class="card-footer">
                    <a href="">Read More →</a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="img/techsplash.jpg" alt="TechSplash 2025">
            <div class="card-content">
                <h3>TechSplash 2025</h3>
                <div class="card-footer">
                    <a href="">Read More →</a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="img/Pteam.jpg" alt="Annual Business Meet 2025">
            <div class="card-content">
                <h3>Annual Business Meet 2025</h3>
                <div class="card-footer">
                    <a href="">Read More →</a>
                </div>
            </div>
        </div>
    </div>
</section>

 

<br>
<br>
<br>




       <?php require("bot_getintouch.php"); ?>
    <!-- Newsletter End -->


   <?php require("bot_footer.php"); ?>
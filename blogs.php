<?php require('top_nav.php'); ?>

<!-- Hero Start -->
<div class="container-fluid pb-5 bg-primary hero-header">
    <div class="container py-5">
        <div class="row g-3 align-items-center">
            <div class="col-lg-6 text-center text-lg-start">
                <h1 class="display-1 mb-0 animated slideInLeft">Blogs</h1>
            </div>
            <div class="col-lg-6 animated slideInRight">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                        <li class="breadcrumb-item"><a class="text-primary" href="index.php">Home</a></li>
                        <li class="breadcrumb-item text-secondary active" aria-current="page">Blogs</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->



<<!-- Careers Content Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h1>
                Keep up to Date
                <span class="text-uppercase text-primary bg-white px-2">
                    With F1 Infotech
                </span>
            </h1>
            <p class="lead mt-3">
                Where innovation, collaboration, and growth are at the core of everything we do!
            </p>
        </div>

        <!-- Call To Action Section -->
<div class="container-fluid">
    <div class="container">
        <div class="row g-3 align-items-center shadow-lg rounded overflow-hidden">

            <!-- Left: Background Image with inner padding -->
            <div class="col-md-6 p-3">
                <div style="
                    background: url('img/c4.jpg') center/cover no-repeat; 
                    min-height: 300px; 
                    
                    width: 100%;
                    height: 100%;
                ">
                </div>
            </div>

            <!-- Right: Card Content with padding -->
            <div class="col-md-6 bg-white p-5 text-start" >
                <h2 class="fw-bold mb-3 text-primary">
                    Migrating to the Cloud? Here’s What Could Go Wrong—And How to Prevent It!
                </h2>
                <p class="mb-4">
                    Learn how to avoid costly mistakes and ensure your cloud journey is secure and successful.
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
                  <a class="btn custom-outline-btn px-5 py-3 me-2" href="blogpage.php">Read More</a>
            </div>
        </div>
    </div>
</div>

        <!-- Careers Content End -->
    </div>
</div>

    


<?php require("bot_getintouch.php"); ?>
<?php require("bot_footer.php"); ?>
<?php require('top_nav.php'); ?>

    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Contact</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="#">Home</a></li>
                           
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->


<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center wow fadeIn" data-wow-delay="0.1s">
            <h1 class="mb-5">Have Any Query? 
                <span class="text-uppercase text-primary  px-2">Get in Touch</span>
            </h1>
        </div>
        <div class="row justify-content-center g-4 align-items-stretch">
            
            <!-- Google Map (1/3 width) -->
            <div class="col-lg-4 col-md-12 wow fadeIn d-flex" data-wow-delay="0.3s">
                <div class="w-100 h-100">
                    <iframe 
                        src="https://maps.google.com/maps?q=F1%20Infotech%20Pvt.%20Ltd.%20C-160%2C%20IInd%20Floor%2C%20MayaPuri%20Industrial%20Phase-II%2C%20New%20Delhi-110064&t=&z=15&ie=UTF8&iwloc=&output=embed"
                        width="100%" 
                        height="100%" 
                        style="border:0; border-radius:10px; min-height: 450px;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <!-- Contact Form (2/3 width) -->
            <div class="col-lg-8 col-md-12 wow fadeIn d-flex" data-wow-delay="0.5s">
                <div class="w-100 h-100 p-4 border rounded bg-light">
                    
                    <form class="h-100 d-flex flex-column justify-content-between">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                                 <button class="btn btn-primary w-100 py-3 my-2" type="submit">Send Message</button>
                            </div>
                        </div>
                        <div class="mt-3">
                           
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->

        

   


<?php require("bot_footer.php"); ?>
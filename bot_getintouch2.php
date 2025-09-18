<!-- Contact Us Start -->
<div class="contact-section position-relative" style="overflow:hidden;">

  <div class="container" style="max-width:1200px; margin:5rem auto; position:relative; z-index:2;">
    <div class="card shadow-sm border-0 text-white mb-5 video-card">

      <!-- Background Video (only inside card) -->
      <video autoplay muted loop playsinline class="card-video">
        <source src="img/livevid4.mp4" type="video/mp4">
        Your browser does not support the video tag.
      </video>

      <!-- Overlay -->
      <div class="card-overlay"></div>

      <div class="card-body p-2 d-flex flex-column flex-md-row align-items-start gap-4 position-relative" style="z-index:2;">
        <!-- Decorative line -->
        <div class="d-none d-md-block" style="width:5px; background-color:#0d6efd;"></div>
        <!-- Text Content -->
        <div class="flex-grow-1 text-start py-4">
          <h2 class="fw-bold text-white mb-3 px-5" style="font-size:3rem;">
            F1 Can Help! Here’s How
          </h2>
          <p class="mb-3 px-5 " style="font-size:1.1rem; line-height:1.8; color:#f8f9fa; ">
            At <strong>F1 InfoTech</strong>, we design and implement robust backup solutions that keep your data safe,
            accessible, and compliant. From automated backups and advanced encryption to scalable
            storage and fast recovery, our solutions are built for today’s business challenges. With
            partnerships across leading backup technologies and a track record of 300+ trusted clients, we
            help you stay resilient, secure, and always prepared.
          </p>
          <br>
          <!-- Button -->
          <a href="contact.php" class="btn btn-light rounded-pill px-3 py-2 fw-bold text-dark custom-btn">
            Get in Touch <span style="font-size:1.2rem; margin-left:8px;">&#8594;</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Contact Us End -->

<!-- CSS -->
<style>
  .video-card {
    position: relative;
    overflow: hidden;
    margin-left: -50px;
    margin-right: -50px;
  }

  .card-video {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 0;

  }

  .card-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.65);
    /* dark overlay for contrast */
    z-index: 1;

  }

  /* Paragraph Styling */
  .video-card p {
    max-width: 70%;
    /* only use 70% of width */
    font-size: 1.5rem;
    /* slightly bigger */
    line-height: 1.9;
    /* more spacing */
  }

  /* Custom Button Hover */
  .custom-btn {
    transition: all 0.3s ease-in-out;
    margin-left: 50px;
  }

  .custom-btn:hover {
    transform: scale(1.05);
    /* zoom */
    box-shadow: 0 8px 20px rgba(255, 255, 255, 0.4);
    /* soft white glow */
  }
</style>
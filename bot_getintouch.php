<!-- Contact Us Start -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

<style>
  .contact-section {
    display: flex;
    align-items: stretch;
    justify-content: center;
    width: 100%;
    max-width: 1200px;
    margin: 5rem auto;
    position: relative;
    overflow: hidden;
    border-radius: 12px;
    gap: 0; /* no extra gap between cards */
  }

  /* Left card */
  .get-in-touch {
    background-color: #0088cc;
    color: white;
    padding: 3rem 4rem;
    width: 50%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    z-index: 2;
    border-radius: 12px 0 0 12px;
  }

  .get-in-touch h2 {
    color: #000000;
    margin: 0 0 1rem;
    font-size: 2rem;
  }

  .get-in-touch p {
    font-size: 1.1rem;
    color: #000000;
    margin-bottom: 1.5rem;
    line-height: 1.6;
  }

  .get-in-touch .btn {
    background: white;
    color: #000000;
    padding: 0.6rem 1.5rem;
    border: none;
    border-radius: 6px;
    font-weight: bold;
    display: inline-flex;
    align-items: center;
    gap: 8px;
    
    text-decoration: none;
    font-size: 1rem;
    max-width: 220px;
    justify-content: center;
  }

  .get-in-touch .btn:hover {
    background: #b3e5fc; /* lighter blue */
    color: #0088cc;
  }

  .arrow {
    font-size: 1.2rem;
  }

  /* Right image */
  .contact-image {
    width: 50%;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 0 12px 12px 0;
  }

  .contact-image img {
    width: 70%;
    height: auto;
    display: block;
    z-index: 0;
  }

  /* Gradient overlay */
  .contact-image::before {
    content: "";
    position: absolute;
    left: -150px;
    top: 0;
    width: 200px;
    height: 100%;
    background: linear-gradient(to right, #0088cc 0%, transparent 100%);
    z-index: 1;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .contact-section {
      flex-direction: column;
    }
    .get-in-touch {
      width: 100%;
      text-align: center;
      border-radius: 12px 12px 0 0;
    }
    .contact-image {
      width: 100%;
      padding: 2rem 0;
      border-radius: 0 0 12px 12px;
    }
    .contact-image img {
      width: 70%;
    }
    .contact-image::before {
      display: none;
    }
  }
</style>

<div class="contact-section" data-aos="fade-right" data-aos-offset="200" data-aos-duration="2000">
  <!-- Left Card -->
  <div class="get-in-touch">
    <h2>F1 Can Help You</h2>
    <p>Get in touch with our in-house experts to find the right solution for your IT Infrastructure.</p>
    <a href="contact.php" class="btn">
      Get in Touch <span class="arrow">→</span>
    </a>
  </div>

  <!-- Right Image with gradient blend -->
  <div class="contact-image">
    <img src="img/Frame 1.png" alt="Contact Illustration">
  </div>
</div>

<!-- AOS Script -->
<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 2000, // smooth 2s animation
    easing: 'ease-in-out', // smoother easing
    once: true,        // animate only once
    offset: 150        // triggers slightly before element comes into view
  });
</script>
<!-- Contact Us End -->

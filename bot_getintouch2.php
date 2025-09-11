<!-- Contact Us Start -->
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
   
  }

  /* Left card */
  .get-in-touch {
    background-color: #0088cc;
    color: white;
    padding: 3rem 4rem;
    width: 50%;
    position: relative;
    z-index: 2;
    display: flex;
    flex-direction: column;
    justify-content: center;
  }

  .get-in-touch h2 {
    color: black  ;
    margin: 0;
    font-size: 1.8rem;
  }

  .get-in-touch p {
    margin-top: 0.5rem;
    font-size: 1rem;
    color: black;
  }

.get-in-touch .btn {
  background: white;
  color: black;
  padding: 0.6rem 1.2rem;   /* shorter height */
  border: none;
  border-radius: 6px;
  font-weight: bold;
  cursor: pointer;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease-in-out;
  text-decoration: none;
  margin-top: 1rem;
  font-size: 1rem;
  max-width: 220px;   /* smaller width */
  justify-content: center;
}

.get-in-touch .btn:hover {
  background: #b3e5fc; /* light blue */
  color: black;
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
  }

  .contact-image img {
    width: 65%; /* shorter */
    height: auto;
    display: block;
  }

  /* Gradient overlay */
  .contact-image::before {
    content: "";
    position: absolute;
    left: -150px; /* overlaps into card */
    top: 0;
    width: 200px;
    height: 100%;
    background: linear-gradient(to right, #0088cc 0%, transparent 100%);
    z-index: 1;
  }

  .contact-image img {
    position: relative;
    z-index: 0;
  }

  /* Responsive */
  @media (max-width: 992px) {
    .contact-section {
      flex-direction: column;
    }
    .get-in-touch {
      width: 100%;
      background: #0088cc;
      text-align: center;
    }
    .contact-image {
      width: 100%;
      padding: 2rem 0;
    }
    .contact-image img {
      width: 70%;
    }
    .contact-image::before {
      display: none; /* no overlap on small screens */
    }
  }
</style>

<div class="contact-section">
  <!-- Left Card -->
  <div class="get-in-touch">
    <h2>F1 can help you</h2>
    <p><strong>At F1 InfoTech, we design and implement robust backup solutions that keep your data safe,
accessible, and compliant. From automated backups and advanced encryption to scalable
storage and fast recovery, our solutions are built for today’s business challenges. With
partnerships across leading backup technologies and a track record of 300+ trusted clients, we
help you stay resilient, secure, and always prepared.</strong></p>
    <a href="contact.php" class="btn">Get in Touch <span class="arrow">→</span></a>
  </div>

  <!-- Right Image with gradient blend -->
  <div class="contact-image">
    <img src="img/Frame 1.png" alt="Contact Illustration">
  </div>
</div>
<!-- Contact Us End -->

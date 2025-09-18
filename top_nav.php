<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>F1 Infotech</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Space+Grotesk&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />

     <!-- Owl Carousel CSS (CDN) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" rel="stylesheet" />

  <!-- Animate.css (v4) -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet" />
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-grow text-primary"
        style="width: 3rem; height: 3rem"
        role="status"
      >
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <!-- Spinner End -->

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
      <div class="container">
        <nav
          class="navbar navbar-expand-lg navbar  border-bottom border-2 border-white"
        >
          <a href="index.php" class="navbar-brand d-flex align-items-center">
  <!-- Full text logo (desktop only) -->
  <h1 id="brand-text" class="mb-0 d-none d-lg-block">
    <img src="img/f1bgrlogo.png" style="height:60px;" /> F1 InfoTech Pvt. Ltd.
  </h1>

  <!-- Small logo (mobile only) -->
  <img id="brand-logo" src="img/f1bgrlogo.png" alt="F1 Logo" 
       class="d-block d-lg-none" style="height:50px;">
</a>
          <button
            type="button"
            class="navbar-toggler ms-auto me-0"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
              <a href="index.php" class="nav-item nav-link">Home</a>
              <!-- Company Dropdown -->
              <div class="nav-item dropdown position-static">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  data-bs-toggle="dropdown"
                  role="button"
                  aria-expanded="false"
                  id="companyToggle"
                >Company</a>
                <div
                  class="dropdown-menu p-4 mt-2 w-100"
                  style="left: 0; background-color: #ffffff; border: none;">
                  <div class="d-flex flex-wrap justify-content-between">
                    <!-- Section 1: Text -->
                    <div class="me-4">
                      <h6 class="text-dark fw-bold">Welcome to F1 Infotech</h6>
                      <p class="small text-muted">
                        F1 Infotech is a trusted provider of innovative IT solutions,<br>
                         delivering cutting-edge technology services to help <br>
                         businesses grow and adapt in the digital era.
                      </p>
                    </div>
                    <!-- Section 2: About -->
                    <div class="me-4">
                      <h6 class="text-dark fw-bold">About</h6>
                      <ul class="list-unstyled mb-0">
                      <li><a href="feature.php" class="dropdown-item">About the Company</a></li>
                      <li><a href="team.php" class="dropdown-item">Leadership</a></li>
                      <li><a href="CustomerPortfolio.php" class="dropdown-item">Customer Console</a></li>
                      <li><a href="PartnerPortfolio.php" class="dropdown-item">Partner Console</a></li>
                      </ul>
                    </div>
                    <!-- Section 3: Our Latest -->
                    <div class="me-4">
                      <h6 class="text-dark fw-bold">Our Latest</h6>
                      <ul class="list-unstyled mb-0">
                      <li><a href="events.php" class="dropdown-item">Events</a></li>
                      <li><a href="careers.php" class="dropdown-item">Careers</a></li>
                      </ul>
                    </div>
                    <!-- Section 4: Resources -->
                    <div>
                      <h6 class="text-dark fw-bold">Resources</h6>
                      <ul class="list-unstyled mb-0">
                      <li><a href="blogs.php" class="dropdown-item">Blog</a></li>
                      <li><a href="casestudies.php" class="dropdown-item">Case Studies</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Company Dropdown -->
              <a href="solutions.php" class="nav-item nav-link">Solutions</a>
              <a href="services.php" class="nav-item nav-link">Services</a>
              <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
          </div>
        </nav>
      </div>
    </div>

  <style>
    
@media (max-width: 991px) {
  .navbar-collapse {
    background-color: #eef7ff !important; /* match section bg */
    padding: 1rem;
  }

  .navbar-nav .nav-link {
    color: #000 !important; /* keep text readable */
  }

  .navbar-nav .dropdown-menu {
    background-color: #eef7ff !important; /* dropdowns blend too */
    border: none;
    position: static; /* ensure full-width stack inside collapse */
    box-shadow: none;
  }
}
  </style>

    <!-- Navbar End -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>


<script>
document.addEventListener("DOMContentLoaded", function () {
  const navbarCollapse = document.getElementById("navbarCollapse");
  const navbarToggler = document.querySelector(".navbar-toggler");
  const canUseBootstrap = typeof bootstrap !== 'undefined' && bootstrap.Collapse;

  // Helper: close all open dropdowns inside the collapsed navbar except an optional exclude
  function closeAllDropdowns(excludeMenu = null) {
    document.querySelectorAll('#navbarCollapse .dropdown-menu.show').forEach(m => {
      if (m === excludeMenu) return;
      m.classList.remove('show');
      const parent = m.closest('.dropdown');
      if (parent) parent.classList.remove('show');
      const toggle = m.previousElementSibling;
      if (toggle && toggle.classList.contains('dropdown-toggle')) toggle.setAttribute('aria-expanded', 'false');
    });
  }

  // Close collapsed navbar when a non-dropdown nav link is clicked (mobile)
  document.querySelectorAll('#navbarCollapse .nav-link:not(.dropdown-toggle)').forEach(link => {
    link.addEventListener('click', () => {
      if (window.innerWidth < 992 && navbarCollapse) {
        const bsCollapse = canUseBootstrap
          ? (bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false }))
          : null;
        if (bsCollapse) bsCollapse.hide();
        else navbarCollapse.classList.remove('show');

        // also close any open dropdowns inside the collapse
        closeAllDropdowns();
      }
    });
  });

  // Dropdown handling (mobile custom + let Bootstrap handle desktop)
  document.querySelectorAll('.navbar .dropdown-toggle').forEach(function (dropdownToggle) {
    dropdownToggle.addEventListener('click', function (e) {
      const menu = this.nextElementSibling;
      const parent = this.closest('.dropdown');

      if (window.innerWidth < 992) { // mobile only: handle ourselves
        e.preventDefault();
        if (!menu) return;

        const isShown = menu.classList.contains('show');

        // Close other open dropdowns
        closeAllDropdowns(menu);

        // Toggle this dropdown (menu + parent)
        menu.classList.toggle('show', !isShown);
        if (parent) parent.classList.toggle('show', !isShown);

        this.setAttribute('aria-expanded', String(!isShown));
      }
      // On desktop (>=992px), do nothing here — Bootstrap's JS will manage the dropdown
    });
  });

  // When clicking a dropdown item on mobile: close the dropdown and the collapsed navbar
  document.querySelectorAll('#navbarCollapse .dropdown-menu .dropdown-item').forEach(item => {
    item.addEventListener('click', function () {
      if (window.innerWidth < 992 && navbarCollapse) {
        const menu = this.closest('.dropdown-menu');
        if (menu) {
          menu.classList.remove('show');
          const parent = menu.closest('.dropdown');
          if (parent) parent.classList.remove('show');
          const toggle = menu.previousElementSibling;
          if (toggle) toggle.setAttribute('aria-expanded', 'false');
        }

        const bsCollapse = canUseBootstrap
          ? (bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false }))
          : null;
        if (bsCollapse) bsCollapse.hide();
        else navbarCollapse.classList.remove('show');
      }
    });
  });

  // Ensure dropdowns are reset when resizing to desktop
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 992) {
      document.querySelectorAll('#navbarCollapse .dropdown-menu.show').forEach(m => {
        m.classList.remove('show');
        const parent = m.closest('.dropdown');
        if (parent) parent.classList.remove('show');
        const prev = m.previousElementSibling;
        if (prev) prev.setAttribute('aria-expanded', 'false');
      });
    }
  });

  // Optional: click outside to close open mobile dropdowns (helps UX)
  document.addEventListener('click', function (e) {
    if (window.innerWidth < 992) {
      // if click happened inside the collapse, ignore
      if (navbarCollapse && navbarCollapse.contains(e.target)) return;

      // otherwise close any open dropdowns inside the collapse
      closeAllDropdowns();
    }
  });

  // --- Hamburger toggle behavior (explicit control) ---
  if (navbarToggler && navbarCollapse) {
    if (navbarToggler.hasAttribute('data-bs-toggle')) {
      navbarToggler.removeAttribute('data-bs-toggle');
      navbarToggler.removeAttribute('data-bs-target');
    }

    navbarToggler.addEventListener("click", function () {
      if (canUseBootstrap) {
        const bsCollapse = bootstrap.Collapse.getInstance(navbarCollapse) || new bootstrap.Collapse(navbarCollapse, { toggle: false });
        bsCollapse.toggle();
      } else {
        const isShown = navbarCollapse.classList.contains('show');
        navbarCollapse.classList.toggle('show', !isShown);
        navbarToggler.setAttribute('aria-expanded', String(!isShown));
      }
    });
  }
});
</script>






</body>
</html>
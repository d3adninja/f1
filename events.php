<?php require('top_nav.php'); ?>


    <!-- Hero Start -->
    <div class="container-fluid pb-5 bg-primary hero-header">
        <div class="container py-5">
            <div class="row g-3 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-1 mb-0 animated slideInLeft">Events</h1>
                </div>
                <div class="col-lg-6 animated slideInRight">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center justify-content-lg-end mb-0">
                            <li class="breadcrumb-item"><a class="text-primary" href="index.html">Home</a></li>
                            <li class="breadcrumb-item text-secondary active" aria-current="page">Events</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

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
        background: #ffffff;
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
        gap: 42px;
        justify-content: flex-start;
        padding-left: 300px;
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
        width: 440px;
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

    @media (max-width: 992px) {
        .about-heading {
            text-align: center;
            font-size: 2rem;
        }
        .commitment {
            max-width: 90%;
        }
        .feature-row {
            gap: 16px;
        }
    }

    @media (max-width: 768px) {
        .card {
            flex: 1 1 100%;
            max-width: 90%;
            margin: 0 auto;
            height: 45vh; /* ⬅️ Increased height by 50% */
        }
    }

    @media (max-width: 480px) {
        .about-heading {
            font-size: 1.8rem;
        }
        .commitment {
            padding: 20px;
        }
        .card {
            height: 45vh; /* ⬅️ Bigger height in small mobiles too */
        }
        .card-content h3 {
            font-size: 1rem;
        }
    }
</style>

<section class="about" id="about" >
    <h1 class="about-heading">Glimpse of our events</h1>
    <img class="about-bg" src="img/eventsmain.jpg" alt="About background" />
    <div class="commitment">
        <h2>Events at F1 </h2>
        <p>
            At F1 Infotech, our events bring together visionaries, innovators, and decision-makers from
            across industries to exchange ideas and explore the future of technology. From exclusive CXO
            roundtables and thought-leadership panels to knowledge-sharing sessions with global OEMs,
            our events are designed to inspire collaboration and drive digital transformation.
        </p>
    </div>

    <div class="feature-row">
        <div class="card">
            <img src="img/innovate.jpg" alt="Innovate & Migrate Nutanix">
            <div class="card-content">
                <h3>Innovate & Migrate Nutanix</h3>
                <div class="card-footer">
                    <a href="">Explore More →</a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="img/Pteam.jpg" alt="Annual Business Meet 2025">
            <div class="card-content">
                <h3>Annual Business Meet 2025</h3>
                <div class="card-footer">
                    <a href="">Explore More →</a>
                </div>
            </div>
        </div>

        <div class="card">
            <img src="img/techsplash.jpg" alt="TechSplash 2025">
            <div class="card-content">
                <h3>TechSplash 2025</h3>
                <div class="card-footer">
                    <a href="">Explore More →</a>
                </div>
            </div>
        </div>
    </div>
</section>


<br><br><br>

<?php require("bot_getintouch.php"); ?>
<?php require("bot_footer.php"); ?>

<!-- Contact Us Start -->
    <style>
      /* Make the left column tall enough to center things nicely */
      .contact .left-col {
        min-height: 100vh; /* so the iframe sits in the middle vertically */
      }

      /* 80% of the viewport height for the map */
      .contact .map-frame {
        width: 100%;
        height: 80vh;
        border: 0;
      }

      /* Optional: adjust for small screens so it doesn't feel too tall */
      @media (max-width: 767.98px) {
        .contact .left-col {
          min-height: auto;
        }
        .contact .map-frame {
          height: 50vh;
        }
      }
    </style>

    <div class="container-fluid bg-primary contact p-0">
      <div class="container p-0">
        <div class="row g-0 align-items-stretch">
          <!-- Left Side: Map (centered vertically, 80% screen height) -->
          <div
            class="col-md-5 ps-lg-0 wow fadeIn d-flex align-items-center justify-content-center left-col"
            data-wow-delay="0.2s"
          >
            <iframe
              class="map-frame"
              src="https://maps.google.com/maps?q=F1%20Infotech%20Pvt.%20Ltd.%20C-160%2C%20IInd%20Floor%2C%20MayaPuri%20Industrial%20Phase-II%2C%20New%20Delhi-110064&t=&z=15&ie=UTF8&iwloc=&output=embed"
              allowfullscreen
              loading="lazy"
            >
            </iframe>
          </div>

          <!-- Right Side: Contact Form -->
          <div
            class="col-md-7 py-5 contact-text wow fadeIn d-flex align-items-center"
            data-wow-delay="0.5s"
          >
            <div class="p-5 w-100">
              <h1 class="mb-5">
                Get in
                <span class="text-uppercase text-primary bg-white px-2"
                  >Touch</span
                >
              </h1>

              <form>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control border-0 ps-4"
                    placeholder="Your Name"
                    style="height: 55px"
                    required
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="email"
                    class="form-control border-0 ps-4"
                    placeholder="Your Email"
                    style="height: 55px"
                    required
                  />
                </div>
                <div class="mb-3">
                  <input
                    type="text"
                    class="form-control border-0 ps-4"
                    placeholder="Subject"
                    style="height: 55px"
                    required
                  />
                </div>
                <div class="mb-4">
                  <textarea
                    class="form-control border-0 ps-4 pt-3"
                    rows="5"
                    placeholder="Your Message"
                  ></textarea>
                </div>
                <button
                  type="submit"
                  class="btn btn-light px-4 py-2 text-primary fw-bold"
                >
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Us End -->


    
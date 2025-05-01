<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Industro - Industrial HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Rubik:wght@500;600;700&display=swap"
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
  </head>

  <body>
    <!-- Spinner Start -->
    <div
      id="spinner"
      class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
    >
      <div
        class="spinner-border text-primary"
        role="status"
        style="width: 3rem; height: 3rem"
      ></div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark px-0">
        <div class="row g-0 d-none d-lg-flex">
            <div class="col-lg-6 ps-5 text-start">
                <div class="h-100 d-inline-flex align-items-center text-white">
                    <span>Follow Us:</span>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-link text-light" href=""><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-6 text-end">
                <div class="h-100 topbar-right d-inline-flex align-items-center text-white py-2 px-5">
                    <span class="fs-5 fw-bold me-2"><i class="fa fa-phone-alt me-2"></i>Call Us:</span>
                    <span class="fs-5 fw-bold">+012 345 6789</span>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <?php include 'navbar.php'; ?>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div
      class="container-fluid page-header py-5 mb-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <h1 class="display-3 text-white animated slideInRight">Contact</h1>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb animated slideInRight mb-0">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </nav>
      </div>
    </div>
    <!-- Page Header End -->

    <!-- Contact Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5 justify-content-center mb-5">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="bg-light text-center h-100 p-5">
              <div
                class="btn-square bg-white rounded-circle mx-auto mb-4"
                style="width: 90px; height: 90px"
              >
                <i class="fa fa-phone-alt fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Phone Number</h4>
              <p class="mb-2">+234 8089998785</p>
              <!-- <p class="mb-4">+012 345 67890</p> -->
              <a class="btn btn-primary px-4" href="tel:+2348089998785"
                >Call Now <i class="fa fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="bg-light text-center h-100 p-5">
              <div
                class="btn-square bg-white rounded-circle mx-auto mb-4"
                style="width: 90px; height: 90px"
              >
                <i class="fa fa-envelope-open fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Email Address</h4>
              <p class="mb-2">Brainandtruth@gmail.com</p>
              <!-- <p class="mb-4">support@example.com</p> -->
              <a
                class="btn btn-primary px-4"
                href="mailto:Brainandtruth@gmail.com"
                >Email Now <i class="fa fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="bg-light text-center h-100 p-5">
              <div
                class="btn-square bg-white rounded-circle mx-auto mb-4"
                style="width: 90px; height: 90px"
              >
                <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
              </div>
              <h4 class="mb-3">Office Address</h4>
              <p class="mb-2">
                Shop 6, no 4 Oba eshilokun street lagos island Lagos Nigeria
              </p>
              <p class="mb-4">1 sawyer street Sabo yaba Lagos Nigeria</p>
              <a
                class="btn btn-primary px-4"
                href="https://goo.gl/maps/FsznshxgnULBGgkN9"
                target="blank"
                >Direction <i class="fa fa-arrow-right ms-2"></i
              ></a>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
            <iframe
              class="w-100"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
              frameborder="0"
              style="min-height: 450px; border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>
        </div>
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <p class="fw-medium text-uppercase text-primary mb-2">Contact Us</p>
            <h1 class="display-5 mb-4">
              If You Have Any Queries, Please Feel Free To Contact Us
            </h1>
            <p class="mb-4">
              Need assistance finding the right tools or have questions about
              our warehouse inventory? Reach out to us using the form below or
              contact us directly. We're here to help with all your building
              supply needs.
            </p>
            <div class="row g-4">
              <div class="col-6">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle"
                  >
                    <i class="fa fa-phone-alt text-white"></i>
                  </div>
                  <div class="ms-3">
                    <h6>Call Us</h6>
                    <span>+234 8089998785</span>
                  </div>
                </div>
              </div>
              <div class="col-6">
                <div class="d-flex">
                  <div
                    class="flex-shrink-0 btn-square bg-primary rounded-circle"
                  >
                    <i class="fa fa-envelope text-white"></i>
                  </div>
                  <div class="ms-3">
                    <h6>Mail Us</h6>
                    <span>Brainandtruth@gmail.com</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <form id="contactForm" novalidate="novalidate">
              <div id="form-messages" class="mb-3"></div>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                      required="required"
                      data-validation-required-message="Please enter your name"
                    />
                    <label for="name">Your Name</label>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Your Email"
                      required="required"
                      data-validation-required-message="Please enter your email"
                      data-validation-email-message="Please enter a valid email address"
                    />
                    <label for="email">Your Email</label>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                      required="required"
                      data-validation-required-message="Please enter a subject"
                    />
                    <label for="subject">Subject</label>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 150px"
                      required="required"
                      data-validation-required-message="Please enter your message"
                    ></textarea>
                    <label for="message">Message</label>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-12">
                  <button
                    class="btn btn-primary py-3 px-5"
                    type="submit"
                    id="sendMessageButton"
                  >
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact End -->

    <!-- Footer Start -->
    <?php include 'footer.php'; ?>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="container-fluid copyright bg-dark py-4">
      <div class="container text-center">
        <p class="mb-2">
          Copyright &copy;
          <a class="fw-semi-bold" href="https://alltsnetwork.com/">
            All tech systems & co</a
          >, All Right Reserved.
        </p>
        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
        <!-- <p class="mb-0">
            Designed By
            <a class="fw-semi-bold" href="https://htmlcodex.com">HTML Codex</a>
            Distributed By: <a href="https://themewagon.com">ThemeWagon</a>
          </p> -->
      </div>
    </div>
    <!-- Copyright End -->

    <!-- Back to Top -->
    <a
      href="#"
      class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"
      ><i class="bi bi-arrow-up"></i
    ></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Add jqBootstrapValidation library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqBootstrapValidation/1.3.7/jqBootstrapValidation.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>

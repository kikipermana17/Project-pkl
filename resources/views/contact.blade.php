<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Bandung Pride</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('tampilan/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('tampilan/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=https://fonts.googleapis.com/css?family=Inconsolata:400,500,600,700|Raleway:400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('tampilan/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilan/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilan/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('tampilan/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('tampilan/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: MyPortfolio - v4.7.0
  * Template URL: https://bootstrapmade.com/myportfolio-bootstrap-portfolio-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Navbar ======= -->
    <div class="collapse navbar-collapse custom-navmenu" id="main-navbar">
        <div class="container py-2 py-md-5">
            <div class="row align-items-start">
                <div class="col-md-2">
                    <ul class="custom-menu">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About</a></li>
                        <li class="active"><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-md-block  mr-auto">
                    <div class="tweet d-flex">
                        <span class="bi bi-twitter text-white mt-2 mr-3"></span>
                        <div>
                            <p><em>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus
                                    incidunt ut officiis explicabo inventore. <br> <a href="#">t.co/v82jsk</a></em></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <h3>Hire Me</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam necessitatibus incidunt ut
                        officiisexplicabo inventore. <br> <a href="#">myemail@gmail.com</a></p>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Bandung Pride!.</a>
            <a href="#" class="burger" data-bs-toggle="collapse" data-bs-target="#main-navbar">
                <span></span>
            </a>
        </div>
    </nav>

    <main id="main">

        <section class="section pb-5">
            <div class="container">

                <div class="row mb-5 align-items-end">
                    <div class="col-md-6" data-aos="fade-up">
                        <h2>Contact</h2>
                        <p class="mb-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam
                            necessitatibus incidunt ut
                            officiis explicabo inventore.
                        </p>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up">

                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                            <div class="row gy-3">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="name">Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="name">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject" required>
                                </div>
                                <div class="col-md-12 form-group">
                                    <label for="name">Message</label>
                                    <textarea class="form-control" name="message" cols="30" rows="10" required></textarea>
                                </div>

                                <div class="col-md-12 my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                </div>

                                <div class="col-md-6 mt-0 form-group">
                                    <input type="submit" class="readmore d-block w-100" value="Send Message">
                                </div>
                            </div>

                        </form>

                    </div>

                    <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <strong class="d-block mb-1">Address</strong>
                                <span>Jl. Terusan Cibaduyut, Bandung, Jawa Barat, Indonesia</span>
                            </li>
                            <li class="mb-3">
                                <strong class="d-block mb-1">Phone</strong>
                                <span>+62 232 3235 324</span>
                            </li>
                            <li class="mb-3">
                                <strong class="d-block mb-1">Email</strong>
                                <span>kikipermana020@gmail.com</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>

        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer class="footer" role="contentinfo">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <p class="mb-1">&copy; Copyright Kiki Permana. All Rights Reserved</p>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=MyPortfolio
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
                <div class="col-sm-6 social text-md-end">
                    <a href="https://www.instagram.com/kkiprmnaa/"><span class="bi bi-instagram"></span></a>
                </div>
            </div>
        </div>
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('tampilan/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('tampilan/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('tampilan/assets/js/main.js') }}"></script>

</body>

</html>

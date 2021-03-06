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
                        <li class="active"><a href="/about">About</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-6 d-none d-md-block  mr-auto">
                    <div class="tweet d-flex">
                        <span class="bi bi-twitter text-white mt-2 mr-3"></span>
                        <div>
                            <p><em>Situs ini adalah situs Resmi Bandung Pride <br> <a
                                        href="#">kikipermana020@gmail.com</a></em></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-none d-md-block">
                    <h3>Hire Me</h3>
                    <p>Saya adalah Kiki Permana yang membuat website ini, Terimakasih telah mengunjungi website
                        kami.</a></p>
                </div>
            </div>

        </div>
    </div>

    <nav class="navbar navbar-light custom-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Bandung Pride.</a>
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

                        <h3>Bandung Pride</h3>
                        <p>Bandung Pride adalah situs informasi wisata di bandung,website ini dibuat untuk membantu para
                            wisatawan ketika berlibur di Bandung</a></p>
                    </div>

                </div>

                {{-- <div class="row">
                    <div class="col-md-4 ml-auto order-2" data-aos="fade-up">
                        <h3 class="h3 mb-4">Skills</h3>
                        <ul class="list-unstyled">
                            <li class="mb-3">
                                <div class="d-flex mb-1">
                                    <strong>WordPress</strong>
                                    <span class="ml-auto">80%</span>
                                </div>
                                <div class="progress custom-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex mb-1">
                                    <strong>Photoshop</strong>
                                    <span class="ml-auto">96%</span>
                                </div>
                                <div class="progress custom-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 96%" aria-valuenow="96"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex mb-1">
                                    <strong>HTML5/CSS3</strong>
                                    <span class="ml-auto">99%</span>
                                </div>
                                <div class="progress custom-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 99%" aria-valuenow="99"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex mb-1">
                                    <strong>Veu</strong>
                                    <span class="ml-auto">87%</span>
                                </div>
                                <div class="progress custom-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 87%" aria-valuenow="87"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex mb-1">
                                    <strong>Angular</strong>
                                    <span class="ml-auto">85%</span>
                                </div>
                                <div class="progress custom-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="85"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                            <li class="mb-3">
                                <div class="d-flex mb-1">
                                    <strong>React</strong>
                                    <span class="ml-auto">88%</span>
                                </div>
                                <div class="progress custom-progress">
                                    <div class="progress-bar" role="progressbar" style="width: 88%" aria-valuenow="88"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </li>
                        </ul>
                    </div> --}}

                <div class="col-md-7 mb-5 mb-md-0" data-aos="fade-up">
                    <p><img src="{{ asset('tampilan/assets/img/images.png') }}" alt="Image" style="width: 400px"
                            height="400px" class="img-fluid"></p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor dignissimos delectus minima
                        reprehenderit
                        molestias illo dolorem et, odio!</p>
                    <p>Fuga fugit distinctio delectus iure vitae consequatur excepturi, mollitia, consectetur
                        molestias sapiente
                        rem consequuntur, illum adipisci, sed obcaecati!</p>
                    <p>Ex, dolorem qui voluptas reprehenderit provident, ad ipsum iure a consequatur voluptatem
                        incidunt nobis.
                        Vitae reiciendis quae ex.</p>
                    <p>Optio consectetur culpa nemo, fugit pariatur veniam voluptate laudantium rerum fuga dolor in
                        maiores ea
                        nisi voluptatibus. Minus?</p>
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

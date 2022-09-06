<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>CRUD Publisher Game</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700|Open+Sans:300,300i,400,400i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Avilon - v4.7.0
  * Template URL: https://bootstrapmade.com/avilon-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <h1><a href="index.html">PUBLISH_GAME</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt=""></a> -->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#team">Showcase</a></li>
                    <li class="dropdown"><a href="#"><span>Admin</span> <i class="bi bi-chevron-down"></i></a>
                        @if (Auth::check())
                            <ul>
                                <li>
                                    <a href="{{ route('publishers.index') }}">Dashboard</a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="post">
                                    @csrf
                                </form>
                                <li>
                                    <a href="javascript:void(0)"
                                        onclick="document.getElementById('logout-form').submit()">
                                        Logout
                                    </a>
                                </li>
                            </ul>
                        @else
                            <ul>
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            </ul>
                        @endif
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="hero-text" data-aos="zoom-out">
            <h2>Welcome to Publish_Game</h2>
            <p>You can explore and add games to showcase them!</p>
            <a href="#team" class="btn-get-started scrollto">Explore</a>
        </div>

        <div class="product-screens">

            <div class="product-screen-1" data-aos="fade-up" data-aos-delay="400">
                <img src="assets/img/product-screen-1.png" alt="">
            </div>

            <div class="product-screen-2" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/product-screen-2.png" alt="">
            </div>

            <div class="product-screen-3" data-aos="fade-up">
                <img src="assets/img/product-screen-3.png" alt="">
            </div>

        </div>

    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">About Us</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">
                        A brief introduction to this website<br>
                    </p>
                </div>

                <div class="row">
                    <div class="col-lg-6 about-img" data-aos="fade-right" dat-aos-delay="100">
                        <img src="assets/img/about-img.jpg" alt="">
                    </div>

                    <div class="col-lg-6 content" data-aos="fade-left" dat-aos-delay="100">
                        <h2>Getting people to know your game is hard</h2>
                        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                            anim id est laborum.</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>

                        <ul>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</li>
                            <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate
                                velit.</li>
                            <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda
                                mastiro dolore eu fugiat nulla pariatur.</li>
                        </ul>

                        <p>
                            Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                            reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                            occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas
                            egestas fringilla phasellus faucibus scelerisque eleifend donec
                        </p>
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Showcase Section ======= -->
        <section id="team" class="section-bg">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Games Showcase</h3>
                    <span class="section-divider"></span>
                    <p class="section-description">
                        A few games published here. The next one should be yours!
                        Showcase your game for the whole world to see!
                    </p>
                </div>

                <div class="row">
                    @if ($games != null)
                        @foreach ($games as $game)
                            <div class="col-lg-3 col-md-6">
                                <div class="member">
                                    <div class="pic">
                                        <img src="{{ url('public/Image/' . $game->image) }}"
                                            style="height: 400px; object-fit: cover;">
                                    </div>
                                    <h4>{{ $game->name }} by {{ $game->publisher ? $game->publisher->name : 'NULL' }}
                                    </h4>
                                    <span>{{ $game->description }}</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-cloud-download"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="col">
                            <h4 style="text-align: center;">There is no game added at this moment.</h4>
                        </div>
                    @endif
                </div>

        </section><!-- End Showcase Section team
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-lg-start text-center">
                    <div class="copyright">
                        &copy; Copyright <strong>Publish_Game</strong>. All Rights Reserved
                    </div>
                    <div class="credits">
                        <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Avilon
          -->
                        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- End  Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-chevron-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

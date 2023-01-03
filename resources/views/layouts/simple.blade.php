<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sigevo 2023</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Variables CSS Files. Uncomment your preferred color scheme -->
    <link href="{{asset('assets/css/variables.css')}}" rel="stylesheet">
    <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: HeroBiz - v2.3.1
    * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top" data-scrollto-offset="0">
        <div class="container-fluid d-flex align-items-center justify-content-between">

        <a href="{{ url('/') }}" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1>DELTA PROYECTOS<span>.</span></h1>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

            <li><a href="{{ url('/#') }}"><span>Inicio</span></a></li>

            <li><a class="nav-link scrollto" href="{{ url('/#about') }}">Nosotros</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/#services') }}">Servicios</a></li>
            <li><a class="nav-link scrollto" href="{{ url('/#contact') }}">Contacto</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle d-none"></i>
        </nav><!-- .navbar -->

        <a class="btn-getstarted scrollto" href="{{ url('/proyectos') }}">Proyectos</a>

        </div>
    </header><!-- End Header -->
    <!-- End #main -->
    <main id="main">
        @yield('content')
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-content">
        <div class="container">
            <div class="row">

            <div class="col-lg-3 col-md-6">
                <div class="footer-info">
                <h3>Sigevo</h3>
                <p>
                    Río Ganges No. 80, Col. Cuauhtémoc Del. Cuauhtémoc Cuidad de México <br><br>
                    <strong>Telefono:</strong>55-5533-4616<br>
                    <strong>Correo:</strong> info@deltaproyectos.com<br>
                </p>
                </div>
            </div>

            <div class="col-lg-2 col-md-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Inicio</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Nosotros</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Servicios</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Terminos de Servicio</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="{{asset('storage/aviso_privacidad.pdf')}}" target="_blank">Aviso de Privacidad</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Servicios</h4>
                <ul>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Verificacion</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Estructura</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Gerencia</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Proyectos</a></li>
                <li><i class="bi bi-chevron-right"></i> <a href="#">Segimiento</a></li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 footer-newsletter">
                <h4>Más</h4>
                <p>Contamos con un equipo de más de 200 profesionales como: arquitectos, diseñadores, ingenieros, técnicos y personal administrativo.</p>
                <p>Ofrecemos resultados de calidad a través de la creatividad, talento, conocimiento técnico y valores de nuestro capital humano.</p>
            </div>

            </div>
        </div>
        </div>

        <div class="footer-legal text-center">
        <div class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
            <div class="d-flex flex-column align-items-center align-items-lg-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Sigevo</span></strong> Todos los derechos reservados.
            </div>
            <div class="credits">Designed by <a href="https://deltaproyectos.com" target="_blank">Delta Proyectos y Desarrollo</a>
            </div>
            </div>
        </div>
        </div>

    </footer><!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>

</body>

</html>


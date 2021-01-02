<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio </title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=" {{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=" {{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href=" {{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{asset('assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Moderna - v2.1.0
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href=" index "><span>My Dar</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li><a href="index ">Home</a></li>
                <li><a href="about ">About Us</a></li>
                <li><a href="services ">Services</a></li>
                <li class="active"><a href="portfolio">Portfolio</a></li>
                <li><a href="team ">Team</a></li>
                <li><a href="blog ">Blog</a></li>
                <li><a href="contact ">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<main id="main">
    <!-- ======= Portfolio Section ======= -->
    <section class="portfolio">
        <div class="container ">

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach($categories as $category)
                            <li data-filter=".{{$category->id}}"> {{$category->title}} </li>
                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-easing="ease-in-out"
                 data-aos-duration="500">

                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 {{$project->category->id}}  ">

                            <div class="portfolio-item">

                                <img src="{{asset('images/'.$project->image )}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h3>
                                        <a href=""
{{--                                           data-gall="portfolioGallery"--}}
{{--                                           class="venobox"--}}
                                           title="App 1">{{$project->title}}</a></h3>
                                    <div>
{{--                                        <a href=" " data-gall="portfolioGallery"--}}
{{--                                           class="venobox" title="App 1"><i class="bx bx-plus"></i></a>--}}
{{--                                        <a href="portfolio-details.html" title="Portfolio Details"><i--}}
{{--                                                class="bx bx-link"></i></a>--}}
                                    </div>
                                </div>

                            </div>
                        </div>

                    @endforeach


            </div>

        </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

<!-- Vendor JS Files -->
<script src=" {{asset('assets/vendor/jquery/jquery.min.js')}}"></script>
<script src=" {{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src=" {{asset('assets/vendor/jquery.easing/jquery.easing.min.js')}}"></script>
<script src=" {{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src=" {{asset('assets/vendor/venobox/venobox.min.js')}}"></script>
<script src=" {{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script src=" {{asset('assets/vendor/counterup/counterup.min.js')}}"></script>
<script src=" {{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src=" {{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src=" {{asset('assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src=" {{asset('assets/js/main.js')}}"></script>

</body>

</html>

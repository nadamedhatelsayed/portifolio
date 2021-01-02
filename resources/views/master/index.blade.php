<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>My Dar</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{asset('/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href=" {{asset('/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href=" {{asset('/assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
    <link href=" {{asset('/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href=" {{asset('/assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
    <link href=" {{asset('/assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href=" {{asset('/assets/vendor/aos/aos.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href=" {{asset('/assets/css/style.css')}}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Moderna - v2.1.0
    * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container">

        <div class="logo float-left">
            <h1 class="text-light"><a href="index"><span>My Dar</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li class="active"><a href="index">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li><a href="services">Services</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="team">Team</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-ride="carousel">


        <?php foreach($sliders as $key=>$slider) { ?>

        <div class="carousel-item <?php echo ($key == 0) ? "active" : ""; ?> ">
            <div class="carousel-container">
                <h2 class="animate__animated animate__fadeInDown">{{ $slider->title }}</h2>
                <p class="animate__animated animate__fadeInUp">  {{$slider->description}}</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
            </div>
        </div>


        <?php } ?>


        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>

    </div>
</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section class="services">
        <div class="container">

            <div class="row">

                @foreach($services as $service)
                    @if( $loop->index == 0)

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                            <div class="icon-box icon-box-pink">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                                <p class="description"> {{$service->description}}  </p>
                            </div>
                        </div>
                    @endif
                    @if( $loop->index == 1)

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="100">
                            <div class="icon-box icon-box-cyan">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                                <p class="description"> {{$service->description}}  </p>
                            </div>
                        </div>
                    @endif
                    @if( $loop->index == 2)

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
                            <div class="icon-box icon-box-green">
                                <div class="icon"><i class="bx bxl-dribbble"></i></div>
                                <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                                <p class="description"> {{$service->description}}  </p>
                            </div>
                        </div>
                    @endif
                    @if( $loop->index == 3)

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up"
                             data-aos-delay="100">
                            <div class="icon-box icon-box-blue">
                                <div class="icon"><i class="bx bx-file"></i></div>
                                <h4 class="title"><a href="">{{ $service->title }}</a></h4>
                                <p class="description"> {{$service->description}}  </p>
                            </div>
                        </div>
                    @endif
                @endforeach


            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
        <div class="container">

            <div class="row">
                @foreach($videos as $video)
                    <div class="col-lg-6 video-box">
                        <img src=" {{asset('images/'.$video->image)}}" class="img-fluid" alt="">
                        <a href="{{asset('images/'.$video->video)}}" class="venobox play-btn mb-4"
                           data-vbtype="video" data-autoplay="true"></a>
                    </div>

                    <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-fingerprint"></i></div>
                            <h4 class="title"><a href="">{{ $video->title1 }}</a></h4>
                            <p class="description"> {{ $video->description1 }}</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-gift"></i></div>
                            <h4 class="title"><a href="">{{ $video->title2 }}</a></h4>
                            <p class="description">  {{ $video->description2 }}</p>
                        </div>

                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
        <div class="container">

            <div class="section-title">
                <h2>Features</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>
            @foreach($features as $feature)
                @if($loop->index%2==0)
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5">
                            <img src=" {{asset('images/'.$feature->image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4">
                            <h3> {{$feature->title}}</h3>
                            <p class="font-italic">
                                {!!  $feature->description !!}
                            </p>

                        </div>
                    </div>
                @endif
                @if($loop->index%2==1)
                    <div class="row" data-aos="fade-up">
                        <div class="col-md-5 order-1 order-md-2">
                            <img src=" {{asset('images/'.$feature->image)}}" class="img-fluid" alt="">
                        </div>
                        <div class="col-md-7 pt-4">
                            <h3> {{$feature->title}}</h3>
                            <ul>
                                <li>
                                    {!!  $feature->description !!}
                                </li>
                            </ul>


{{--                            <ul>--}}
{{--                                <li><i class="icofont-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo--}}
{{--                                    consequat.--}}
{{--                                </li>--}}
{{--                                <li><i class="icofont-check"></i> Duis aute irure dolor in reprehenderit in voluptate--}}
{{--                                    velit.--}}
{{--                                </li>--}}
{{--                            </ul>--}}
                        </div>
                    </div>
                @endif
            @endforeach

        </div>
    </section><!-- End Features Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">


    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>

                </div>

                <div class="col-lg-3 col-md-6 footer-info">
                    <h3>About My Dar</h3>
                    <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita
                        valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                    <div class="social-links mt-3">
                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="copyright">
            &copy; Copyright <strong><span>My Dar</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!-- All the links in the footer should remain intact. -->
            <!-- You can delete the links only if you purchased the pro version. -->
            <!-- Licensing information: https://bootstrapmade.com/license/ -->
            <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/ -->
            Designed by <a href="https://www.facebook.com/Devenzaegypt/">Devenza</a>
        </div>
    </div>
</footer><!-- End Footer -->

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

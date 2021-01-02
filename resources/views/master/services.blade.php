<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Services</title>
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
            <h1 class="text-light"><a href="index"><span>My Dar</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu float-right d-none d-lg-block">
            <ul>
                <li><a href="index">Home</a></li>
                <li><a href="about">About Us</a></li>
                <li class="active"><a href="services">Services</a></li>
                <li><a href="portfolio">Portfolio</a></li>
                <li><a href="team">Team</a></li>
                <li><a href="blog">Blog</a></li>
                <li><a href="contact">Contact Us</a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

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

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
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

    <!-- ======= Service Details Section ======= -->
    <section class="service-details">
        <div class="container">

            <div class="row">
                @foreach($about as $abo)
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Mission</a></h5>
                                <p class="card-text"> {{$abo->mission}}</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-2.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Plan</a></h5>
                                <p class="card-text">{{$abo->plan}}</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-3.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Vision</a></h5>
                                <p class="card-text"> {{$abo->vision}}</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/img/service-details-4.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Our Care</a></h5>
                                <p class="card-text"> {{$abo->care}}</p>
                                <div class="read-more"><a href="#"><i class="icofont-arrow-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Service Details Section -->

    <!-- ======= Pricing Section ======= -->
    <section class="pricing section-bg" data-aos="fade-up">
        <div class="container">

            <div class="section-title">
                <h2>Pricing</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div>

            <div class="row no-gutters">
                @foreach($packages as $package)
                    @if($loop->index==0)
                        <div class="col-lg-4 box">
                            <h3>{{$package->title}}</h3>
                            <h4>{{$package->price}}$<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> {{$package->description}}</li>
                                {{--                        <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>--}}
                                {{--                        <li><i class="bx bx-check"></i> Nulla at volutpat diam uteera</li>--}}
                                {{--                        <li class="na"><i class="bx bx-x"></i> <span>Pharetra massa massa ultricies</span></li>--}}
                                {{--                        <li class="na"><i class="bx bx-x"></i> <span>Massa ultricies mi quis hendrerit</span></li>--}}
                            </ul>
                            <a href="#" class="get-started-btn">Get Started</a>
                        </div>
                    @endif

                    @if($loop->index==1)
                        <div class="col-lg-4 box featured">
                            <h3>{{$package->title}}</h3>
                            <h4>{{$package->price}}$<span>per month</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> {{$package->description}}</li>

                            </ul>
                            <a href="#" class="get-started-btn">Get Started</a>
                        </div>

                    @endif
                        @if($loop->index==2)
                            <div class="col-lg-4 box">
                                <h3>{{$package->title}}</h3>
                                <h4>{{$package->price}}$<span>per month</span></h4>
                                <ul>
                                    <li><i class="bx bx-check"></i> {{$package->description}}</li>

                                </ul>
                                <a href="#" class="get-started-btn">Get Started</a>
                            </div>
                        @endif


                @endforeach
            </div>

        </div>
    </section><!-- End Pricing Section -->

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
                    <h3>About Moderna</h3>
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
<script src=" {{asset('assets/vendor/counterup/counterup.min.js')}} "></script>
<script src=" {{asset('assets/vendor/owl.carousel/owl.carousel.min.js')}}"></script>
<script src=" {{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src=" {{asset('assets/vendor/aos/aos.js')}}"></script>

<!-- Template Main JS File -->
<script src=" {{asset('assets/js/main.js')}}"></script>

</body>

</html>

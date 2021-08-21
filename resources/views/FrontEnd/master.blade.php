<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>LAIKA</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet">

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Nav Bar Start -->
@include('FrontEnd.nav')
<!-- Nav Bar End -->

<!-- Carousel Start -->
@include('FrontEnd.slide')
<!-- Carousel End -->

<!-- Booking Start -->
@include('FrontEnd.booking')
<!-- Booking End -->

<!-- About Start -->
@include('FrontEnd.about')
<!-- About End -->

<!-- Video Modal Start-->
@include('FrontEnd.video')
<!-- Video Modal End -->

<!-- Menu Start -->
@include('FrontEnd.menu')
<!-- Menu End -->

<!-- Team Start -->
@include('FrontEnd.team')
<!-- Team End -->

<!-- Contact Start -->
@include('FrontEnd.contact')
<!-- Contact End -->


<!-- Blog Start -->
<!-- <div class="blog">
    <div class="container">
        <div class="section-header text-center">
            <p>Food Blog</p>
            <h2>Latest From Food Blog</h2>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-1.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Food</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>10</p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                            </p>
                            <a class="btn custom-btn" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-item">
                    <div class="blog-img">
                        <img src="img/blog-2.jpg" alt="Blog">
                    </div>
                    <div class="blog-content">
                        <h2 class="blog-title">Lorem ipsum dolor sit amet</h2>
                        <div class="blog-meta">
                            <p><i class="far fa-user"></i>Admin</p>
                            <p><i class="far fa-list-alt"></i>Food</p>
                            <p><i class="far fa-calendar-alt"></i>01-Jan-2045</p>
                            <p><i class="far fa-comments"></i>10</p>
                        </div>
                        <div class="blog-text">
                            <p>
                                Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte liqum metus tortor. Lorem ipsum dolor sit amet elit. Neca pretim miura bitur facili ornare velit non vulpte
                            </p>
                            <a class="btn custom-btn" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Blog End -->


<!-- Footer Start -->
@include('FrontEnd.footer');
<!-- Footer End -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/tempusdominus/js/moment.min.js"></script>
<script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>
</html>

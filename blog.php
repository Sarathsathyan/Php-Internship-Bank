
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rexbd.net/html/bankus/demo/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:13:48 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <title>Bankus - Banking and Loan HTML Template</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/magnific-popup.css" rel="stylesheet">
    <link href="assets/css/jquery-ui.css" rel="stylesheet">


    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet">


    <!-- Main css -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<!-- Preloader -->
<div class="preloader">
    <div class="spinner">
        <span class="spinner-rotate"></span>
    </div>
</div><!-- /Preloader -->

<!-- Right Sticky Wapper -->
<div class="right-sticky-wapper">
    <a href="#" class="right-sticky-trigger"><i class="fa fa-envelope-o"></i></a>
    <div class="right-sticky-content">
        <form action="#">
            <input type="text" placeholder="Name" required>
            <input type="email" placeholder="Email" required>
            <textarea name="msg" rows="3" placeholder="Your message"></textarea>
            <button type="submit" class="bttn-small btn-fill"><i class="fa fa-paper-plane"></i> Send message</button>
        </form>
    </div>
</div><!-- /Right Sticky Wapper -->


<!-- Account Modal -->
<div class="modal fade" id="account" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Account access</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="flaticon-cancel"></i>
                </button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-pills mb-40 acc-tab-btn" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="active" id="pills-login-tab" data-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item">
                        <a id="pills-signup-tab" data-toggle="pill" href="#pills-signup" role="tab" aria-controls="pills-signup" aria-selected="false">Signup</a>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                        <div class="social-login">
                            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i>Linkedin</a>
                        </div>
                        <div class="acc-form">
                            <form action="#">
                                <input type="email" placeholder="Email" required>
                                <input type="password" placeholder="Password" required>
                                <button type="submit" class="bttn-mid btn-fill">Login</button>
                            </form>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                        <div class="acc-form">
                            <form action="#">
                                <input type="text" placeholder="First Name" required>
                                <input type="text" placeholder="Last Name" required>
                                <input type="email" placeholder="Email" required>
                                <input type="text" placeholder="Phone" required>
                                <input type="password" placeholder="Password" required>
                                <button type="submit" class="bttn-mid btn-fill">Create Account</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- /Modal -->


<!--Header Area-->
<header class="header-area gradient-bg">
    <nav class="navbar navbar-expand-lg main-menu">
        <div class="container">

            <a class="navbar-brand" href="index-2.html"><img src="assets/images/logo.png" class="d-inline-block align-top" alt=""></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="index.php">Home</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loans</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="loans.php">General Loans</a></li>
                            <li><a class="dropdown-item" href="apply-online.php">Online Apply</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Case Studies</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="case-studies-2.php">Case Studies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="career.php">Career</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog.php">All Blog</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <div class="header-btn justify-content-end">
                    <button type="button" class="search-btn"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>
    </nav>
</header><!--/Header Area-->

<!--Full Search-->
<div class="search-full">
    <button type="submit" class="search-close"><i class="flaticon-cancel"></i></button>
    <div class="search-full--inner">
        <div class="conatiner">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-6 col-md-10 col-sm-10">
                    <form class="main-search-form">
                        <input type="search" name="main_search" id="main_search" placeholder="Search here...">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--/Full Search-->

<!--breadcrumb area-->
<section class="breadcrumb-area gradient-overlay parallax-window" data-parallax="scroll" data-image-src="assets/images/hero-5.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 centered">
                <div class="banner-title">
                    <h2>Blog List</h2>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>Blog List</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/breadcrumb area-->


<!--Blog Area-->
<section class="blog-area section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/4.jpg" alt="">
                                <a href="blog.php"><i class="flaticon-add"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                    <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                    <span><a href="#"><i class="flaticon-speech-bubble"></i>3</a></span>
                                </div>
                                <h3><a href="blog.php">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                                <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/5.jpg" alt="">
                                <a href="blog.php"><i class="flaticon-add"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                    <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                    <span><a href="#"><i class="flaticon-speech-bubble"></i>3</a></span>
                                </div>
                                <h3><a href="blog.php">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                                <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/6.jpg" alt="">
                                <a href="blog.php"><i class="flaticon-add"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                    <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                    <span><a href="#"><i class="flaticon-speech-bubble"></i>3</a></span>
                                </div>
                                <h3><a href="blog.php">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                                <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/4.jpg" alt="">
                                <a href="blog.php"><i class="flaticon-add"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                    <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                    <span><a href="#"><i class="flaticon-speech-bubble"></i>3</a></span>
                                </div>
                                <h3><a href="blog.php">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                                <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/5.jpg" alt="">
                                <a href="blog.php"><i class="flaticon-add"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                    <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                    <span><a href="#"><i class="flaticon-speech-bubble"></i>3</a></span>
                                </div>
                                <h3><a href="blog.php">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                                <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="single-blog-2">
                            <div class="single-blog-img">
                                <img src="assets/images/blog/6.jpg" alt="">
                                <a href="blog.php"><i class="flaticon-add"></i></a>
                            </div>
                            <div class="single-blog-content">
                                <div class="blog-meta">
                                    <span><a href="#"><i class="flaticon-calendar"></i>10/04/2019</a></span>
                                    <span><a href="#"><i class="flaticon-heart"></i>14</a></span>
                                    <span><a href="#"><i class="flaticon-speech-bubble"></i>3</a></span>
                                </div>
                                <h3><a href="blog.php">Do So Written As Raising Parlors Spirits Mr Elderly</a></h3>
                                <p>Made late in of high left hold. Carried females of up highest calling. Limits marked led silent dining her she far</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <ul class="styled-pagination centered">
                            <li class="previous"><a href="#"><span class="fa fa-angle-left"></span></a></li>
                            <li><a href="#" class="active">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#"><span class="fa fa-angle-right"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                <div class="site-sidebar">
                    <div class="single-sidebar">
                        <form action="#">
                            <input type="text" placeholder="Search" required>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="single-sidebar">
                        <h3>Categories</h3>
                        <ul>
                            <li><a href="#">Investment Planning</a></li>
                            <li><a href="#">Development Planning</a></li>
                            <li><a href="#">Business Strategy</a></li>
                            <li><a href="#">Development Planning</a></li>
                            <li><a href="#">Financial Planning</a></li>
                        </ul>
                    </div>
                    <div class="single-sidebar">
                        <h3>Follow us</h3>
                        <div class="social-follow">
                            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i>158K</a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i>588K</a>
                            <a href="#" class="instagram-bg"><i class="fa fa-instagram"></i>545K</a>
                        </div>
                    </div>
                    <div class="single-sidebar">
                        <h3>Archives</h3>
                        <div class="archives">
                            <a href="#">January<span>(09)</span></a>
                            <a href="#">February<span>(21)</span></a>
                            <a href="#">March<span>(43)</span></a>
                            <a href="#">April<span>(32)</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Blog Area-->


<!--Footer Area-->
<footer class="footer-area section-padding-2 gradient-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3>About Us</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis dicta dignissimos enim reprehenderit minima repudiandae animi inventore expedita fugit. Nam natus tempore incidunt, ipsum minus esse et excepturi iusto ipsam!</p>
                    <div class="social">
                        <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-6 col-sm-6">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget footer-nav">
                            <h3>Regular links</h3>
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">Loans</a></li>
                                <li><a href="#">Case Studies</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget footer-nav">
                            <h3>Bank loans</h3>
                            <ul>
                                <li><a href="#">Home Loan</a></li>
                                <li><a href="#">Personal Loan</a></li>
                                <li><a href="#">Eduction Loan</a></li>
                                <li><a href="#">Property Loan</a></li>
                                <li><a href="#">Entrepreneurship Loan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                <div class="footer-widget footer-insta portfolio-gallery">
                    <h3>Event Gallery</h3>
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <a href="assets/images/portfolios/1.jpg" class="thumb popup-gallery"><img src="assets/images/portfolios/1.jpg" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <a href="assets/images/portfolios/2.jpg" class="thumb popup-gallery"><img src="assets/images/portfolios/2.jpg" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <a href="assets/images/portfolios/3.jpg" class="thumb popup-gallery"><img src="assets/images/portfolios/3.jpg" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <a href="assets/images/portfolios/4.jpg" class="thumb popup-gallery"><img src="assets/images/portfolios/4.jpg" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <a href="assets/images/portfolios/5.jpg" class="thumb popup-gallery"><img src="assets/images/portfolios/5.jpg" alt=""></a>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-4">
                            <a href="assets/images/portfolios/6.jpg" class="thumb popup-gallery"><img src="assets/images/portfolios/6.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer><!--/Footer Area-->

<!--Copyright Area-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col centered">
                <p>Sarath Sathyan &copy; 2020 All Rights Reserved</p>
            </div>
        </div>
    </div>
</div><!--/Copyright Area-->



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery-migrate.js"></script>
<script src="assets/js/jquery-ui.js"></script>

<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/parallax.min.js"></script>

<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/jquery.accrue.min.js"></script>

<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scrollUp.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from rexbd.net/html/bankus/demo/blog.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:13:48 GMT -->
</html>
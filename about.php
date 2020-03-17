<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rexbd.net/html/bankus/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:14:58 GMT -->
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
                            <li><a class="dropdown-item" href="index.php">Home </a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loans</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="loans.php">General Loans</a></li>
                            <li><a class="dropdown-item" href="apply-online.php">Online Apply</a></li>
                            <li><a class="dropdown-item" href="how-it-works.php">How It Work</a></li>
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
                            <li><a class="dropdown-item" href="team.php">Team</a></li>
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
                    <h2>About us</h2>
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li>About</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/breadcrumb area-->

<!--About Section-->
<section class="about-area gray-bg">
    <div class="about-content mid-bg-gray wow fadeInUp" data-wow-delay="0.4s">
        <div class="about-content-inner-2">
            <div class="section-title mb-10">
                <h4>Who we are</h4>
                <h2>Discover us</h2>
            </div>
            <p>A bank is a financial institution that accepts deposits from the public and creates credit.  <br><br> bank is a financial institution where customers can save or borrow money. Banks also invest money to build up their reserve of money. What they do is regulated by laws. Those laws differ in different countries. The people who work at a bank are called bank employees. Certain banks deal directly with the public and they are the only ones which an ordinary person will deal with. Other banks deal with investments and international currency trading.</p>
            <img class="sign" src="assets/images/sign.png" alt="">
        </div>
    </div>
    <div class="about-left wow fadeInUp" data-wow-delay="0.4s" style="background: url('assets/images/about.jpg') no-repeat center / cover;">
        <div class="left-img-wrap">

        </div>
    </div>
</section><!--/About Section-->

<!--Mission Vission Area-->
<section class="section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-mission-vission">
                    <h4>Our Mission</h4>
                    <p>Center Bank is a locally owned, locally loaned community bank that provides a variety of core financial services to businesses, professionals, and individuals. We promise our customers immediate, direct access to our bank decision makers and deliver the finest personalized service in the industry. Centric has committed people and resources to enrich the communities where we live and work. Because trust is our most important commodity, we are focused on building and sustaining long-term generational relationships with our customers, our community, our employees, and our shareholders.</p>
                    <a href="#" class="bttn-small btn-emt">Learn More</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-mission-vission">
                    <h4>Our Vision</h4>
                    <p>We aspire to become the locally owned, independent community bank of choice for small and medium-sized businesses, professionals, and individuals in central Pennsylvania. We will combine steady growth, consistent earnings, and firm control of risk factors to provide safety for our depositors. Our people will be the difference in establishing consistency in earnings and enhanced shareholder value.We trust our principles are clear to every customer from the moment you enter our facilities or speak to a Center Bank representative.</p>
                    <a href="#" class="bttn-small btn-emt">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/Mission Vission Area-->


<!-- Team Area -->
<section class="team-area section-padding-2 gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h4>Bank Officers</h4>
                    <h2>Professional Team</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-team-4">
                    <img src="assets/images/team/1.jpg" alt="">
                    <div class="team-content">
                        <h4>South Indian Bank</h4>
                        <p>Partner</p>
                        <div class="social">
                            <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-team-4">
                    <img src="assets/images/team/2.jpg" alt="">
                    <div class="team-content">
                        <h4>Tenzan boby</h4>
                        <p>Customer Consultant</p>
                        <div class="social">
                            <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-team-4">
                    <img src="assets/images/team/3.jpg" alt="">
                    <div class="team-content">
                        <h4>Monty Carlo</h4>
                        <p>Project Handler</p>
                        <div class="social">
                            <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-team-4">
                    <img src="assets/images/team/4.jpg" alt="">
                    <div class="team-content">
                        <h4>Monty Carlo</h4>
                        <p>Officer</p>
                        <div class="social">
                            <a href="#" class="cl-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="cl-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="cl-youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="cl-pinterest"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Team Area -->



<!-- Cta -->
<section class="cta section-padding blue-overlay parallax-window" data-parallax="scroll" data-image-src="assets/images/hero-5.jpg">
    <div class="container">
        <div class="row">
            <div class="col centered cl-white">
                <div class="section-title mb-20">
                    <h2>Are you ready to go?</h2>
                </div>
                <a href="apply-online.html" class="bttn-mid btn-emt">Apply online now</a>
            </div>
        </div>
    </div>
</section><!-- /Cta -->

<!--Footer Area-->
<footer class="footer-area section-padding-2 gradient-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                <div class="footer-widget">
                    <h3>About Us</h3>

                    <p>A bank is a financial institution licensed to receive deposits and make loans. Banks may also provide financial services such as wealth management, currency exchange, and safe deposit boxes!</p>

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
                                <li><a href="index.php">home</a></li>
                                <li><a href="loans.php">Loans</a></li>
                                <li><a href="case-studies-2.php">Case Studies</a></li>
                                <li><a href="privacy.html">Privacy</a></li>
                                <li><a href="contact.php">contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="footer-widget footer-nav">
                            <h3>Bank loans</h3>
                            <ul>
                                <li><a href="index.php">Home Loan</a></li>
                                <li><a href="loans.php">Personal Loan</a></li>
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

<script src="assets/js/waypoints.min.js"></script>
<script src="assets/js/jquery.counterup.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/scrollUp.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from rexbd.net/html/bankus/demo/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:15:18 GMT -->
</html>
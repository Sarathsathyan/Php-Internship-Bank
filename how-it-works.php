

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rexbd.net/html/bankus/demo/how-it-works.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:15:36 GMT -->
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


<!--Header Top-->
<div class="header-top white-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                <div class="single-header-top">
                    <p>
                        <?php  if(isset($_SESSION['email'])) {
                            echo "Welcome: <span><a href=\"mailto:\"><i class=\"fa fa-envelope\"></i>".$_SESSION['email']."</a></span>";
                        }
                        else{
                            echo"Login to get more informations";
                        }

                        ?>
                        <span><a href="tel:"><i class="fa fa-phone"></i>+000-123-789</a></span>
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="single-header-top last">
                    <div class="account-menu">
                        <ul>
                            <li><a href="contact.html">Support</a></li>
                            <li><a href="career.html">Career</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#account"><i class="fa fa-lock"></i>Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/Header Top-->

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
                            <li><a class="dropdown-item" href="index-2.html">Home one</a></li>
                            <li><a class="dropdown-item" href="index-3.html">Home two</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Loans</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="loans.html">General Loans</a></li>
                            <li><a class="dropdown-item" href="loan-details.html">Loan Details</a></li>
                            <li><a class="dropdown-item" href="apply-online.html">Online Apply</a></li>
                            <li><a class="dropdown-item" href="how-it-works.html">How It Work</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Case Studies</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="case-studies.html">Case Studies 1</a></li>
                            <li><a class="dropdown-item" href="case-studies-2.html">Case Studies 2</a></li>
                            <li><a class="dropdown-item" href="case-studies-details.html">Case Studies Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Career</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="career.php">Career</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="blog.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="blog.html">All Blog</a></li>
                            <li><a class="dropdown-item" href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
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
                    <h2>How it works</h2>
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li>How it works</li>
                </ul>
            </div>
        </div>
    </div>
</section><!--/breadcrumb area-->

<!--Section-->
<section class="section-padding gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section-title mb-10">
                    <h4>How we can apply</h4>
                    <h2>Here's you can find How you'll can apply for loans</h2>
                </div>
                <p class="mb-0">Morbi ut semper nisi, at convallis risus. Aliquam ex augue, venenatis mollis lorem ac, gravida vulputate ex. Duis vestibulum nulla ante, in venenatis lorem porttitor sed. Nulla facilisi. Quisque ipsum odio, aliquam vel diam ac, cursus blandit elit. Curabitur non accumsan ligula. Etiam tincidunt sodales bibendum. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent ut pellentesque sem. Ut vulputate nunc ut est ullamcorper, in volutpat nisi tempor. Aliquam at turpis eros. Cras eu nunc neque. In vitae risus tincidunt, placerat nisl sed, pulvinar risus. Cras et neque in libero varius ultrices ac sit amet lorem. Pellentesque et velit quis quam aliquet pellentesque. Sed fermentum eros at imperdiet molestie. Aliquam erat volutpat. Vestibulum magna nisl, rhoncus et justo vitae, accumsan ultricies nisi. Nunc eu libero id ex porta interdum eu sed leo.</p>
            </div>
        </div>
    </div>
</section><!--/Section-->


<!-- How it works Area -->
<section class="growth-stat section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h4>work process</h4>
                    <h2>How it works</h2>
                </div>
            </div>
        </div>
        <div class="row mb-30">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <img src="assets/images/stat-1.jpg" alt="">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="growth-content">
                    <h3><span>1</span>Apply online</h3>
                    <p>At by asked being court hopes. Farther so friends Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered Offending residence but men engrossed. Pretend am earnest offered arrived company so on. Pretend am earnest offered arrived company so on</p>
                    <a href="#" class="bttn-small btn-fill">Apply Now</a>
                </div>
            </div>
        </div>
        <div class="row mb-30">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-2 order-xl-1 order-lg-1 order-md-1 order-sm-2 wow fadeInUp" data-wow-delay="0.4s">
                <div class="growth-content">
                    <h3><span>2</span>Verification process</h3>
                    <p>At by asked being court hopes. Farther so friends Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered Offending residence but men engrossed. Pretend am earnest offered arrived company so on. Pretend am earnest offered arrived company so on</p>
                    <a href="#" class="bttn-small btn-fill">Apply Now</a>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 order-1 order-xl-2 order-lg-2 order-md-2 order-sm-1 wow fadeInUp" data-wow-delay="0.4s">
                <img src="assets/images/stat-2.jpg" alt="">
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <img src="assets/images/stat-3.jpg" alt="">
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="growth-content">
                    <h3><span>3</span>Enjoy loan</h3>
                    <p>At by asked being court hopes. Farther so friends Excited him now natural saw passage offices you minuter. At by asked being court hopes. Farther so friends am to detract. Forbade concern do private be. Offending residence but men engrossed shy. Pretend am earnest offered Offending residence but men engrossed. Pretend am earnest offered arrived company so on. Pretend am earnest offered arrived company so on</p>
                    <a href="#" class="bttn-small btn-fill">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</section><!-- /How it works Area -->

<div class="empty-image mint-overlay parallax-window" data-parallax="scroll" data-image-src="assets/images/hero-6.jpg">
    <div class="video-gal">
        <a href="https://www.youtube.com/watch?v=GT6-H4BRyqQ" class="video-popup"><i class="flaticon-video-camera"></i></a>
    </div>
</div>

<section class="section-padding-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="loan-criteria">
                    <div class="section-title">
                        <h2>Getting Loan Criteria</h2>
                        <p>Nulla facilisi. Quisque ipsum odio, aliquam vel diam ac, cursus blandit elit. Curabitur non accumsan ligula. Etiam tincidunt sodales bibendum</p>
                    </div>
                    <ul>
                        <li>Age range 23 up</li>
                        <li>Read All the law of loan</li>
                        <li>Monthly income minimum $2500</li>
                        <li>Last 12 months salary statements</li>
                        <li>Government issued NID card</li>
                        <li>Police verifications</li>
                        <li>Read All the law of loan</li>
                        <li>Monthly income minimum $2500</li>
                        <li>Last 12 months salary statements</li>
                        <li>Government issued NID card</li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                <div class="loan-criteria">
                    <div class="section-title">
                        <h2>Important Documents for loan</h2>
                        <p>Nulla facilisi. Quisque ipsum odio, aliquam vel diam ac, cursus blandit elit. Curabitur non accumsan ligula. Etiam tincidunt sodales bibendum</p>
                    </div>
                    <ul>
                        <li>Read All the law of loan</li>
                        <li>Monthly income minimum $2500</li>
                        <li>Last 12 months salary statements</li>
                        <li>Age range 23 up</li>
                        <li>Read All the law of loan</li>
                        <li>Monthly income minimum $2500</li>
                        <li>Last 12 months salary statements</li>
                        <li>Government issued NID card</li>
                        <li>Police verifications</li>
                        <li>Government issued NID card</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Section -->
<section class="section-padding gray-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-title mb-20">
                    <h2>Interest Policy</h2>
                </div>
                <p>Proin a sodales sem. Pellentesque odio odio, varius in scelerisque vitae, interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis 5.5% maximus felis facilisis. Aliquam vitae pellentesque odio. Proin suscipit, dolor sed dignissim elementum, nisl nibh rutrum ante, id aliquam diam augue a mauris. Pellentesque blandit, mi eget mattis commodo, urna ligula gravida mi, sit amet tincidunt mauris mauris ut neque. Quisque nec placerat velit. Phasellus dignissim risus 6.3% sed leo scelerisque ullamcorper</p>
                <p class="mb-0">Proin a sodales sem. Pellentesque 4.5% odio odio, varius in scelerisque vitae, interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis. Aliquam vitae pellentesque odio. Proin suscipit, dolor sed dignissim elementum, nisl nibh rutrum ante, id aliquam diam augue a mauris. Pellentesque blandit, mi eget mattis commodo, urna ligula gravida mi, sit amet tincidunt mauris mauris ut neque. Quisque nec placerat velit. Phasellus dignissim risus sed leo scelerisque ullamcorper</p>
            </div>
        </div>
    </div>
</section><!-- /Section -->

<!-- Section -->
<section class="section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-12">
                <div class="section-title">
                    <h2>frequently asked question</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                        <div class="single-faq">
                            <h4>How long will it take?</h4>
                            <p>Interdum nec eros. Vestibulum ac mauris id arcu efficitur ultrices. Aenean lobortis risus at nisi lacinia, quis maximus felis facilisis</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 centered">
                        <a href="contact.html" class="bttn-mid btn-fill">Still no luck?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Section -->

<!-- Cta -->
<section class="cta section-padding blue-overlay parallax-window" data-parallax="scroll" data-image-src="assets/images/hero-5.jpg">
    <div class="container">
        <div class="row">
            <div class="col centered cl-white">
                <div class="section-title mb-20">
                    <h2>Are you ready to go?</h2>
                </div>
                <a href="#" class="bttn-mid btn-emt">Apply online now</a>
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
                <p>Sarath Sathyan &copy; 2020 all Rights Reserved</p>
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

<!-- Mirrored from rexbd.net/html/bankus/demo/how-it-works.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:15:36 GMT -->
</html>
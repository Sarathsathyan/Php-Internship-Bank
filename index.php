<?php
session_start();
$_SESSION['message']="";

include ('cd.php');

if(isset($_POST['register'] )){
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST['first'];
       //    echo $fname;
        $lname = $_POST['last'];
        $email = $_POST['email'];
        $mob = $_POST['mob'];
        $pass =$_POST['pass'];
        $query = "SELECT * FROM `register` WHERE email='$email'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows>0){
            echo "<h5 style='text-align: center'>Email already exists</h5>";
        }
        else{
            $sql = "INSERT INTO register(first_name,last_name,email,phone,password)
VALUES ('$fname',
'$lname',
'$email',
$mob,
'$pass')";
            if($conn->query($sql)==TRUE){
                echo " <div class='form'> 
       <script>alert('registered successfully')</script>";

            }
            else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }


    }
}


// LOGIN
if(isset($_POST['login_page'] ))  {

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $user= $_POST['username'];
        $password = $_POST['password'];
        $query1 = "SELECT * FROM `register` WHERE email='$user'
        and password='$password'";
        $result = mysqli_query($conn,$query1) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1){
            $_SESSION['email'] = $user;
            // Redirect user to index.php
            //echo "Login successully";
           // header("Location: index.php");
        }else{
            echo "<div class='form'>
            <h5 style='text-align: center'>Username/password is incorrect.</h5>
            </div>";
        }
    }else{
        header("Location: index.php");

    }
    }


?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from rexbd.net/html/bankus/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:09:35 GMT -->
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

                        <span><a href="tel:"><i class="fa fa-phone"></i>8147907030</a></span>
                    </p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                <div class="single-header-top last">

                    <div class="account-menu">
                        <ul>

                            <li><a href="contact.php">Support</a></li>
                            <li><a href="career.php">Career</a></li>
                            <li><a href="blog.php">Blog</a></li>
                            <?php  if(isset($_SESSION['email'])){
                                echo"<li><a href='logout.php'>Logout</a></li>";
                            }
                            else{
                               echo "<li><a href=\"#\" data-toggle=\"modal\" data-target=\"#account\"><i class=\"fa fa-lock\"></i>Login</a></li>" ;

                            }
                            ?>
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
                    <acce/li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="pills-login-tab">
                        <div class="social-login">
                            <a href="#" class="facebook-bg"><i class="fa fa-facebook"></i>Facebook</a>
                            <a href="#" class="twitter-bg"><i class="fa fa-twitter"></i>Twitter</a>
                            <a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i>Linkedin</a>
                        </div>
                        <div class="acc-form">
                            <form method="POST" id="login" name="log">
                                <input type="email" placeholder="Email" name="username" required>
                                <input type="password" placeholder="Password" name="password" required>
                                <button type="submit" name="login_page" class="bttn-mid btn-fill">Login</button>
                            </form>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                        <div class="acc-form">
                            <form name="reg" method="POST">
                                <input type="text" placeholder="First Name" name="first" required>
                                <input type="text" placeholder="Last Name" name="last" required>
                                <input type="email" placeholder="Email" name="email" required>
                                <input type="text" placeholder="Phone" name="mob" required>
                                <input type="password" placeholder="Password" name="pass" required>
                                <button type="submit" class="bttn-mid btn-fill" name="register">Create Account</button>
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

            <a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" class="d-inline-block align-top" alt=""></a>

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
                   <?php  if(isset($_SESSION['email'])){
                                echo"
                                              <li class=\"nav-item dropdown\">
                                                    <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Loans</a>
                                                    <ul class=\"dropdown-menu\">
                                                        <li><a class=\"dropdown-item\" href=\"loans.php\">General Loans</a></li>
                                                       
                                                        <li><a class=\"dropdown-item\" href=\"apply-online.php\">Online Apply</a></li>
                                                        <li><a class=\"dropdown-item\" href=\"how-it-works.php\">How It Work</a></li>
                                                    </ul>
                                                </li>  
                                    ";
                            }
                            else{

                            }
                            ?>


                    <?php  if(isset($_SESSION['email'])){
                        echo"
                        
                        <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Case Studies</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"case-studies-2.php\">Case Studies</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"#\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Career</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"career.php\">Career</a></li>
                            <li><a class=\"dropdown-item\" href=\"team.php\">Team</a></li>
                        </ul>
                    </li>
                    <li class=\"nav-item dropdown\">
                        <a class=\"nav-link dropdown-toggle\" href=\"blog.php\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">Blog</a>
                        <ul class=\"dropdown-menu\">
                            <li><a class=\"dropdown-item\" href=\"blog.php\">All Blog</a></li>
                        </ul>
                    </li>
                        ";
                    }
                    else{


                    }
                    ?>


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
                        <input type="search" name="main_search" id="main_search" placeholder="Search anything">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!--/Full Search-->

<!--Hero Area-->
<section class="hero-section">
    <div class="hero-area-1 owl-carousel">
        <div class="single-hero dark-overlay" style="background: url('assets/images/hero-3.jpg') no-repeat center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="hero-sub">
                            <div class="hero-left">
                                <h4>Banking System</h4>
                                <h1>Get your load with maximum <span>7.5% rate</span></h1>
                                <p>Nunc enim neque, tincidunt non viverra ac, consectetur in erat. Quisque egestas pharetra dictum. Etiam sodales lacinia diam, nec iaculis neque pretium ac. Duis auctor ac</p>
                                <a href="apply-online.php" class="bttn-mid btn-fill">Apply now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero dark-overlay" style="background: url('assets/images/hero-2.jpg') no-repeat center / cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8 centered">
                        <div class="hero-sub">
                            <div class="hero-left">
                                <h4>Finance Loan</h4>
                                <h1>Our personal loan is a <span>robast</span> to get</h1>
                                <p>Nunc enim neque, tincidunt non viverra ac, consectetur in erat. Quisque egestas pharetra dictum. Etiam sodales lacinia diam, nec iaculis neque pretium ac. Duis auctor ac</p>
                                <a href="apply-online.php" class="bttn-mid btn-fill">Apply now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-hero dark-overlay" style="background: url('assets/images/hero-7.jpg') no-repeat center / cover;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8">
                        <div class="hero-sub">
                            <div class="hero-left">
                                <h4>Finance Loan</h4>
                                <h1>Our personal loan is a <span>robast</span> to get</h1>
                                <p>Nunc enim neque, tincidunt non viverra ac, consectetur in erat. Quisque egestas pharetra dictum. Etiam sodales lacinia diam, nec iaculis neque pretium ac. Duis auctor ac</p>
                                <a href="apply-online.php" class="bttn-mid btn-fill">Apply now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Hero Area-->


<!--services Area-->
<section class="services-area section-padding-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2>Bank Loans</h2>
                    <p>Lose away off why half led have near bed. At engage simple <br> father of period others except</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-service-2">
                    <div class="service-icon">
                        <i class="flaticon-puzzle"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="loan-details.html">Personal Loan <span>6.5%</span></a></h4>
                        <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-service-2">
                    <div class="service-icon">
                        <i class="flaticon-credit-card"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="loan-details.html">Home Loan <span>7.4%</span></a></h4>
                        <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-service-2">
                    <div class="service-icon">
                        <i class="flaticon-tag"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="loan-details.html">Property Loan <span>8%</span></a></h4>
                        <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-service-2">
                    <div class="service-icon">
                        <i class="flaticon-file"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="loan-details.html">Eduction Loan <span>5.5%</span></a></h4>
                        <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-service-2">
                    <div class="service-icon">
                        <i class="flaticon-layout"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="loan-details.html">Small Business Loan <span>6.0%</span></a></h4>
                        <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-service-2">
                    <div class="service-icon">
                        <i class="flaticon-shutter"></i>
                    </div>
                    <div class="service-content">
                        <h4><a href="loan-details.html">Entrepreneurship loan <span>7.3%</span></a></h4>
                        <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/services Area-->

<!--Loan Area-->
<section class="loan-area section-padding gray-bg">
    <div class="container">
        <form action="#">
            <div class="row calculator-loan">
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInLeft">
                    <div class="loan-calculation-wrapper">
                        <div class="section-title">
                            <h2>Calculate loan interest and installment</h2>
                            <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                        </div>
                        <div class="loan-filter-form">
                            <div class="thirty form">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 wow fadeInRight">
                    <div class="loan-confirm-form">
                        <div class="thirty">
                            <div class="results clearfix"></div>
                        </div>
                        <a href="apply-online.php" class="bttn-mid btn-fill">Apply for loans</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section><!--/Loan Area-->

<!--feature Area-->
<section class="feature-area section-padding-2 blue-overlay parallax-window" data-parallax="scroll" data-image-src="assets/images/hero-7.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title cl-white">
                    <h2>Easy Steps</h2>
                    <p>Lose away off why half led have near bed. At engage simple <br> father of period others except</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-feature-2">
                    <i class="flaticon-padnote"></i>
                    <h4>Apply Online</h4>
                    <p>Certainty listening no no behaviour existence assurance situation is. Because add why not esteems amiable him</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-feature-2">
                    <i class="flaticon-credit-card"></i>
                    <h4>Verification</h4>
                    <p>Certainty listening no no behaviour existence assurance situation is. Because add why not esteems amiable him</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="single-feature-2">
                    <i class="flaticon-cursor"></i>
                    <h4>Enjoy Loan</h4>
                    <p>Certainty listening no no behaviour existence assurance situation is. Because add why not esteems amiable him</p>
                </div>
            </div>
        </div>
    </div>
</section><!--/feature Area-->

<!--About Section-->
<section class="about-area gray-bg">
    <div class="about-left dark-light-overlay wow fadeInUp" data-wow-delay="0.4s" style="background: url('assets/images/hero-1.jpg') no-repeat center / cover;">

    </div>
    <div class="about-content mid-bg-gray wow fadeInUp" data-wow-delay="0.4s">
        <div class="about-content-inner">
            <div class="section-title mb-10">
                <h2>Who we are</h2>
            </div>
            <p>Banking in its modern sense evolved in the fourteenth century in the prosperous cities of Renaissance ..</p>
            <p>A bank is a financial institution that accepts deposits from the public and creates credit.[1] Lending activities can be performed either directly or indirectly through capital markets. Due to their importance in the financial stability of a country, banks are highly regulated in most countries. Most nations have institutionalized a system known as fractional reserve banking under which banks hold liquid assets equal to only a portion of their current liabilities. In addition to other regulations intended to ensure liquidity, banks are generally subject to minimum capital requirements based on an international set of capital standards, known as the Basel Accords</p>
            <a href="about.php" class="bttn-mid btn-fill">Read More</a>
        </div>
    </div>
</section><!--/About Section-->

<!-- Counter Area -->
<section class="counter-area section-padding-2 gradient-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-counter">
                    <h3 class="count">5896</h3>
                    <h5>Taked loan</h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-counter">
                    <h3 class="count">6959</h3>
                    <h5>Transection done</h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="single-counter">
                    <h3><span class="count">5.7</span>%</h3>
                    <h5>Business Increased</h5>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="single-counter">
                    <h3>$<span class="count">3.8</span>B</h3>
                    <h5>Money rolled</h5>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Counter Area -->

<!--Portfolio Section -->
<section class="work-area section-padding pb-0">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered wow fadeInUp" data-wow-delay="0.3s">
                <div class="section-title">
                    <h2>Recent Events</h2>
                    <p>Lose away off why half led have near bed. At engage simple father of period others except</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-1 order-lg-1 order-md-1 order-sm-1">
                <div class="single-work img">
                    <img src="assets/images/portfolios/7.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-2  order-lg-2 order-md-2 order-sm-2">
                <div class="single-work gradient-bg">
                    <div class="single-work-content">
                        <h4>Blandit Phasellus</h4>
                        <p>John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest</p>
                        <a href="case-studies-details.html" class="bttn-small btn-emt">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-3 order-lg-3 order-md-4 order-sm-4">
                <div class="single-work img">
                    <img src="assets/images/portfolios/8.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-4  order-lg-4 order-md-3 order-sm-3">
                <div class="single-work gradient-bg">
                    <div class="single-work-content">
                        <h4>furnished discourse</h4>
                        <p>John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest</p>
                        <a href="case-studies-details.html" class="bttn-small btn-emt">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-6  order-lg-5 order-md-6 order-sm-6">
                <div class="single-work gradient-bg">
                    <div class="single-work-content">
                        <h4>Extremely doubt</h4>
                        <p>John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest</p>
                        <a href="case-studies-details.html" class="bttn-small btn-emt">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-5 order-lg-6 order-md-5 order-sm-5">
                <div class="single-work img">
                    <img src="assets/images/portfolios/9.jpg" alt="">
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-8 order-lg-7 order-md-7 order-sm-7">
                <div class="single-work gradient-bg">
                    <div class="single-work-content">
                        <h4>John draw real</h4>
                        <p>John draw real poor on call my from. May she mrs furnished discourse extremely. Ask doubt noisy shade guest</p>
                        <a href="case-studies-details.html" class="bttn-small btn-emt">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 p-0 order-7 order-lg-8 order-md-8 order-sm-8">
                <div class="single-work img">
                    <img src="assets/images/portfolios/10.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</section><!--/Portfolio Section-->

<!--feature Area-->
<section class="feature-area section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.3s">
                <div class="single-feature">
                    <img src="assets/images/icons/1.png" alt="">
                    <h4>Easy to apply</h4>
                    <p>For easy loans up to $35000, choose MoneyMe. Easy Online Application. No early payout fees. Competitive Fixed Interest Rates. We Can Help - Apply now</p>
                    <a href="apply-online.php">Apply now</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="single-feature">
                    <img src="assets/images/icons/2.png" alt="">
                    <h4>Fast processing</h4>
                    <p>Lose away off why half led have near bed. At engage simple father of period others except giving do summer</p>
                    <a href="apply-online.php">Apply now</a>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0.5s">
                <div class="single-feature">
                    <img src="assets/images/icons/3.png" alt="">
                    <h4>Low rates</h4>
                    <p>Higher the loan amount, lower will be the rate of interest. HDFC Bank, Tata Capital, RBL Bank, Citibank, ICICI Bank are the best banks for personal loa</p>
                    <a href="apply-online.php">Apply now</a>
                </div>
            </div>
        </div>
    </div>
</section><!--/feature Area-->

<!-- Review Area -->
<section class="review-area section-padding blue-overlay parallax-window" data-parallax="scroll" data-image-src="assets/images/testimonial-bg.jpg">
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 wow fadeInUp" data-wow-delay="0.4s">
                <div class="section-title cl-white">
                    <h2>testimonials</h2>
                    <p>"Banking at its best is local and personal. With Santa Cruz County Bank we have both"</p>
                </div>
                <div class="testimonials owl-carousel">
                    <div class="single-review">
                        <div class="reviewer-thumb">
                            <h3>Erin Washington</h3>
                            <span>Co founder, Rocket agency</span>
                        </div>
                        <p>Entire any had depend and figure winter. Change stairs and men likely wisdom new happen piqued six. Now taken him timed world get. Enjoyed married an feeling Change stairs and men likely wisdom happen piqued six</p>
                    </div>
                    <div class="single-review">
                        <div class="reviewer-thumb">
                            <h3>Mario wagon</h3>
                            <span>Businessman</span>
                        </div>
                        <p>Consectetur adipisicing elit. Iure, animi. Tempora delectus asperiores dicta quam! Excepturi ipsam laboriosam, officiis atque nobis blanditiis provident corporis, fugit libero, laborum asperiores repudiandae nam</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- /Review Area -->


<!--Brands Area-->
<section class="section-padding-2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 centered">
                <div class="section-title">
                    <h2>Our Partners</h2>
                    <p>Our partners are <br> father of period others except</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="brands owl-carousel">
                    <div class="single-brands">
                        <a href="#"><img src="assets/images/brands/1.png" alt=""></a>
                    </div>
                    <div class="single-brands">
                        <a href="#"><img src="assets/images/brands/2.png" alt=""></a>
                    </div>
                    <div class="single-brands">
                        <a href="#"><img src="assets/images/brands/3.png" alt=""></a>
                    </div>
                    <div class="single-brands">
                        <a href="#"><img src="assets/images/brands/4.png" alt=""></a>
                    </div>
                    <div class="single-brands">
                        <a href="#"><img src="assets/images/brands/5.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!--/Brands Area-->

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
                <p>Copyright &copy; 2019 All Rights Reserved</p>
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
<script src="assets/js/jquery.accrue.min.js"></script>
<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/script.js"></script>
</body>

<!-- Mirrored from rexbd.net/html/bankus/demo/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 09:12:40 GMT -->
</html>
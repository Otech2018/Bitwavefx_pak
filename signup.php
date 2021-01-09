<!doctype html>
<html lang="en">

<!-- Mirrored from polyvorex.com/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 13:52:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A wise investment always results in a better future. We have very powerful and clear goal of increasing money. We believe a good investment can change your life within a short period of time.">
    <meta name="author" content="POLYVOREX">
    <meta property="og:site_name" content="POLYVOREX"/>
    <meta property="og:site" content="index.html"/>
    <meta property="og:title" content="POLYVOREX Limited"/>
    <meta property="og:description" content="A wise investment always results in a better future. We have very powerful and clear goal of increasing money. We believe a good investment can change your life within a short period of time."/>
    <meta property="og:image" content="images/polyvorex.jpg"/>
    <meta property="og:url" content="index.html"/>
    <meta property="og:type" content="article"/>
    <title>POLYVOREX Limited</title>
	<base  src="index.html" />
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7COpen+Sans:400,600&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>


<header class="header">
    <div id="header-top-bar" class="primary-bg py-2">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-7 col-lg-7 d-none d-md-block d-lg-block">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item"><span class="fas fa-clipboard-list mr-1"></span> Company Number <a target="_blank" href="https://find-and-update.company-information.service.gov.uk/company/13093459">
							<font color="#e80566">#13093459</font></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item" style="float: right"><span class="fas fa-envelope-open-text mr-1"></span> <a href="mailto:support@polyvorex.com">support@polyvorex.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg fixed-top white-bg">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="images/logo.png" alt="POLYVOREX" class="img-fluid"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>
            <div class="collapse navbar-collapse h-auto" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto menu">
                    <li><a href="indexbc14.html?a=home">HOME</a></li>
                    <li><a href="indexc3d7.html?a=about-us">ABOUT US</a></li>
                    <li><a href="index38cd.html?a=faq">FAQ</a></li>
                    <li><a href="index88fd.html?a=plans">OUR PLANS</a></li>
                    <li><a href="index15a0.html?a=support">CONTACT US</a></li>
                                        <li><a href="indexc30b.html?a=login" class="btn secondary-solid-btn check-btn">LOGIN</a></li>
                    <li><a href="indexcca3.html?a=signup" class="btn secondary-solid-btn check-btn">REGISTER</a></li>
                                    </ul>
            </div>
        </div>
    </nav>
</header>

 

 <script language=javascript>
 function checkform() {
  if (document.regform.fullname.value == '') {
    alert("Please enter your full name!");
    document.regform.fullname.focus();
    return false;
  }
 
  
  if (document.regform.username.value == '') {
    alert("Please enter your username!");
    document.regform.username.focus();
    return false;
  }
  if (!document.regform.username.value.match(/^[A-Za-z0-9_\-]+$/)) {
    alert("For username you should use English letters and digits only!");
    document.regform.username.focus();
    return false;
  }
  if (document.regform.password.value == '') {
    alert("Please enter your password!");
    document.regform.password.focus();
    return false;
  }
  if (document.regform.password.value != document.regform.password2.value) {
    alert("Please check your password!");
    document.regform.password2.focus();
    return false;
  }
 
  
  if (document.regform.email.value == '') {
    alert("Please enter your e-mail address!");
    document.regform.email.focus();
    return false;
  }
  if (document.regform.email.value != document.regform.email1.value) {
    alert("Please retype your e-mail!");
    document.regform.email.focus();
    return false;
  }

  for (i in document.regform.elements) {
    f = document.regform.elements[i];
    if (f.name && f.name.match(/^pay_account/)) {
      if (f.value == '') continue;
      var notice = f.getAttribute('data-validate-notice');
      var invalid = 0;
      if (f.getAttribute('data-validate') == 'regexp') {
        var re = new RegExp(f.getAttribute('data-validate-regexp'));
        if (!f.value.match(re)) {
          invalid = 1;
        }
      } else if (f.getAttribute('data-validate') == 'email') {
        var re = /^[^\@]+\@[^\@]+\.\w{2,4}$/;
        if (!f.value.match(re)) {
          invalid = 1;
        }
      }
      if (invalid) {
        alert('Invalid account format. Expected '+notice);
        f.focus();
        return false;
      }
    }
  }

  if (document.regform.agree.checked == false) {
    alert("You have to agree with the Terms and Conditions!");
    return false;
  }

  return true;
 }

 function IsNumeric(sText) {
  var ValidChars = "0123456789";
  var IsNumber=true;
  var Char;
  if (sText == '') return false;
  for (i = 0; i < sText.length && IsNumber == true; i++) { 
    Char = sText.charAt(i); 
    if (ValidChars.indexOf(Char) == -1) {
      IsNumber = false;
    }
  }
  return IsNumber;
 }
 </script>
 

<div class="main">

    <section class="hero-section hero-bg-2 ptb-100 full-screen" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-6 col-lg-6" style="position: relative; margin: auto;">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h6 class="h3">Create account</h6>
 
                            </div>
<form method=post onsubmit="return checkform()" name="regform" class="login-signup-form"><input type="hidden" name="form_id" value="16102002363151"><input type="hidden" name="form_token" value="0139243fb161d68f3c244a62f9e4e2e6">
<input type=hidden name=a value="signup">
<input type=hidden name=action value="signup">
                                <div class="form-group">
                                    <label class="pb-1">
                                        Your Name
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="fullname" value="" class="form-control" placeholder="Enter your name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                        Your Username
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="username" value="" class="form-control" placeholder="Enter your username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="pb-1">
                                        Your Email Address
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="text" name="email" value="" class="form-control" placeholder="Enter your email adress">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="pb-1">
                                        Retype Your Email Address
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-email color-primary"></span>
                                        </div>
                                        <input type="text" name="email1" value="" class="form-control" placeholder="Enter retype your email address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="pb-1">
                                        Password
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" value="" class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="pb-1">
                                        Retype Password
                                    </label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password2" value="" class="form-control" placeholder="Enter your retype password">
                                    </div>
                                </div>
                                <div class="my-4">
                                    <div>
                                        <label><b><font color="#e80566">Your Upline:</font></b> n/a</label>
                                    </div>
                                </div>
 <div hidden><input type=checkbox name=agree value=1  checked> I agree with <a href="indexa972.html?a=rules">Terms and conditions</a></div>

                                <input type="submit" value="Register" class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">
                            </form>
                        </div>
                        <div class="card-footer px-md-5 bg-transparent border-top"><small>Already have an acocunt?</small>
                            <a href="indexc30b.html?a=login" class="small">Login</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</div>

<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top gradient-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-9">
                    <div class="row footer-top-wrap">
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <img src="images/logo-white.png" alt="POLYVOREX" class="mb-2">
                                <p>We have very powerful and clear goal of increasing money. We believe a good investment can change your life within a short period of time.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">COMPANY</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="indexbc14.html?a=home">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="indexc3d7.html?a=about-us">About Us</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index38cd.html?a=faq">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index88fd.html?a=plans">Our Plans</a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">FORMS</h4>
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="indexc30b.html?a=login">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="indexcca3.html?a=signup">Register</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index8083.html?a=forgot_password">Password Recovery</a> 
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="index15a0.html?a=support">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-3">
                    <div class="row footer-top-wrap mt-md-4 mt-sm-0 mt-lg-0">
                        <div class="col-12">
                            <div class="footer-nav-wrap text-white">
                                <h4 class="text-white">GET IN TOUCH</h4>
                                <ul class="get-in-touch-list">
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> 
									<a href="mailto:support@polyvorex.com">support@polyvorex.com
                                    </a>
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-envelope mr-2"></span> 
									<a href="mailto:admin@polyvorex.com">admin@polyvorex.com
                                    </a>
                                    </li>
                                    <li class="d-flex align-items-center py-2"><span
                                            class="fas fa-map-marker-alt mr-2"></span> Peter House, Oxford Street, Manchester, England, M1 5AN
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom gray-light-bg py-2">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-5 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">Copyrights © 2021. All
                        rights reserved by
                        <a href="index.html">POLYVOREX</a></p>
                </div>
                <div class="col-md-7 col-lg-6 d-none d-md-block d-lg-block">
                    <ul class="list-inline policy-nav text-right social-list">
                        <li class="list-inline-item"><a href="indexa972.html?a=rules">Terms & Conditions</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>


<script src="js/jquery-3.5.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/mixitup.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easy-pie-chart.js"></script>
<script src="js/scripts.js"></script>
</body>

<!-- Mirrored from polyvorex.com/?a=signup by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 09 Jan 2021 13:52:09 GMT -->
</html>

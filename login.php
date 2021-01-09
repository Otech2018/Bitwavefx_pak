
<?php include('settings.php'); ?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A wise investment always results in a better future. We have very powerful and clear goal of increasing money. We believe a good investment can change your life within a short period of time.">
    <meta name="author" content="BITWAVEFX">
    <meta property="og:site_name" content="BITWAVEFX "/>
    <meta property="og:site" content="index.php"/>
    <meta property="og:title" content="BITWAVEFX  Limited"/>
    <meta property="og:description" content="A wise investment always results in a better future. We have very powerful and clear goal of increasing money. We believe a good investment can change your life within a short period of time."/>
    <meta property="og:image" content="images/polyvorex.jpg"/>
    <meta property="og:url" content="index.php"/>
    <meta property="og:type" content="article"/>
    <title>BITWAVEFX Limited</title>
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
                            <li class="list-inline-item"><span class="fas fa-clipboard-list mr-1"></span> Company Number <a target="_blank" href="tel:<?=$site_phone; ?>">
                            <font color="#e80566"><?=$site_phone; ?></font></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="topbar-text text-white">
                        <ul class="list-inline">
                            <li class="list-inline-item" style="float: right"><span class="fas fa-envelope-open-text mr-1"></span> <a href="mailto:<?=$site_email; ?>"><?=$site_email; ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <?php include('menu.php'); ?>
</header>


<script language=javascript>
function checkform() {
  if (document.mainform.username.value=='') {
    alert("Please type your username!");
    document.mainform.username.focus();
    return false;
  }
  if (document.mainform.password.value=='') {
    alert("Please type your password!");
    document.mainform.password.focus();
    return false;
  }
  return true;
}
</script>

<div class="main">

    <section class="hero-section hero-bg-2 ptb-100 full-screen" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row align-items-center justify-content-between pt-5 pt-sm-5 pt-md-5 pt-lg-0">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-left text-white">
                        <h1 class="text-white">Welcome to BITWAVEFX!</h1>
                        <p class="lead">
                            A wise investment always results in a better future.
                            <br>We have very powerful and clear goal of increasing money. We believe a good investment can change your life within a short period of time.
                        </p>
                    </div>
                </div>
                <div class="col-md-5 col-lg-5">
                    <div class="card login-signup-card shadow-lg mb-0">
                        <div class="card-body px-md-5 py-5">
                            <div class="mb-5">
                                <h5 class="h3">Login</h5>
                                                            </div>
<form method=post name=mainform onsubmit="return checkform()" class="login-signup-form"><input type="hidden" name="form_id" value="16102002356472"><input type="hidden" name="form_token" value="dd5545044cd3309c511a1bd573def7e2">
<input type=hidden name=a value='do_login'>
<input type=hidden name=follow value=''>
<input type=hidden name=follow_id value=''>
                                <div class="form-group">
                                    <label class="pb-1">Username</label>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-user color-primary"></span>
                                        </div>
                                        <input type="text" name="username" value='' class="form-control" placeholder="Enter your username">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col">
                                            <label class="pb-1">Password</label>
                                        </div>
                                        <div class="col-auto">
                                            <a href="index8083.html?a=forgot_password" class="form-text small text-muted">
                                                Forgot password?
                                            </a>
                                        </div>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <div class="input-icon">
                                            <span class="ti-lock color-primary"></span>
                                        </div>
                                        <input type="password" name="password" value='' class="form-control" placeholder="Enter your password">
                                    </div>
                                </div>

                                <input type=submit value="Login" class="btn btn-block secondary-solid-btn border-radius mt-4 mb-3">

                            </form>
                        </div>
                        <div class="card-footer bg-transparent border-top px-md-5"><small>Not registered?</small>
                            <a href="indexcca3.html?a=signup" class="small"> Create account</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>



<?php include('footer.php'); ?>




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

</html>

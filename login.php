<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    
    <!-- TITLE -->
    <title>Gofar</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:700,600,400,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <link rel="stylesheet" type="text/css" href="css/lib/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/lib/awe-booking-font.css">
    <link rel="stylesheet" type="text/css" href="css/lib/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.css">

    <!-- MAIN STYLE -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    
    <!-- CSS COLOR -->
    <link id="colorreplace" rel="stylesheet" type="text/css" href="css/colors/blue.css">
    
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->



 <?php include('header.php'); ?>
        
        <!-- HEADER PAGE 
        <header id="header-page">
            <div class="header-page__inner">
                <div class="container">
                     LOGO 
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </div>
                     END / LOGO 
                    
                  

                     TOGGLE MENU RESPONSIVE 
                    <a class="toggle-menu-responsive" href="#">
                        <div class="hamburger">
                            <span class="item item-1"></span>
                            <span class="item item-2"></span>
                            <span class="item item-3"></span>
                        </div>
                    </a>
                     END / TOGGLE MENU RESPONSIVE
                </div>
            </div>
        </header>
        END / HEADER PAGE -->
        
        <section class="">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register-page__content">
                     <div class="content-title">
                        <span>Hi There!</span>
                        <h2>Welcome Back</h2>
                    </div>
                    <form action="login_action.php" method="post">
                        <div class="form-item">
                            <label>Email</label>
                            <input type="email" name="username" required>
                        </div>
                        <div class="form-item">
                            <label>Password</label>
                            <input type="password" name="password"required>
                        </div>
                        <a href="forgot_password.php" class="forgot-password">Forgot Password</a>
                        <div class="form-actions">
                            <input type="submit" value="Log In">
                        </div>
                    </form>
                    <div class="login-register-link">
                        Dont have account yet? <a href="register.php">Register HERE</a>
                    </div>
                </div>
            </div>
        </section>


<?php include('footer.php'); ?>
       
    </div>
    <!-- END / PAGE WRAP -->

    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/theia-sticky-sidebar.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>
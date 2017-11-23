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
    
    
</head>

<body>


<script>

function validate()
  {
	  
	  
	  
	  
	  
		   var phoneno = /^\d{10}$/;  
  if(document.getElementById('contact').value.match(phoneno))  
  {  
      return true;  
  }  
  else  
  {  
     alert("Not a valid Phone Number");  
     return false;  
  }  
	  
	//password validate
	  
	  var passw=  /^\w{5,14}$/;  
if(document.getElementById('pwd').value.match(passw))     
{   
 
return true;  
}  
else  
{   
alert('Password must be 5 to 15 characters long!')  
return false;  
}  
	 

if(document.getElementById('user').value=="")
{
alert("Enter user name");
document.getElementById('user').focus();
return false;
}

return true;
  }
  </script>
  
  
  
  
  





    <!-- PAGE WRAP -->
    <div id="page-wrap">
        

        
       <?php include('header.php'); ?>
        
        <section class="">
            <div class="awe-overlay"></div>
            <div class="container">
                <div class="login-register-page__content">
                    <div class="content-title">
                        <span>Don’t stay at home</span>
                        <h2>JOIN US !</h2>
                    </div>
                    <form action="reg.php" method="post">
					 
					<div class="form-item">
                           <label>First name</label>
                            <input type="text" name="txtname1">
                        </div>
						<div class="form-item">
                            <label>Last name</label>
                            <input type="text" name="txtlname1">
                        </div>
                        <div class="form-item">
                            <label>Email</label>
                            <input type="email" id="user" name="txtemail1">
                        </div>
                        <div class="form-item">
                            <label>Password</label>
                            <input type="password" id="pwd" name="txtpassword1">
                        </div>
                        <div class="form-item">
                            <label>Confirm password</label>
                            <input type="password" name="txtcpassword1">
                        </div>
						<div class="form-item">
                            <label>Mobile</label>
                            <input type="text" id="contact" name="txtmobile1">
                        </div>
						
						
                        <a href="#" class="terms-conditions"></a>
                        <div class="form-actions">
                            <input type="submit" Onclick="return validate()" value="Register" name="submit">
                        </div>
                    </form>
                    <div class="login-register-link">
                        Already have Account? <a href="login.php">Log in HERE</a>
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
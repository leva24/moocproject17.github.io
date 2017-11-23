<?php include('header.php'); ?>
<?php include('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <!-- TITLE -->
    <title>MOOC</title>

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
    <link rel="stylesheet" type="text/css" href="css/lib/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/lib/jquery-ui.css">
    <!-- REVOLUTION DEMO -->
    <link rel="stylesheet" type="text/css" href="revslider-demo/css/settings.css">


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


   
       
        <!-- HERO SECTION -->
        <section class="hero-section">
            <div id="slider-revolution">
                <ul>
                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 1">
                        <img src="images/bg/Moocww.jpg"  data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <!--<div class="tp-caption sfb fadeout slider-caption-sub slider-caption-sub-1" data-x="500" data-y="230" data-speed="700" data-start="1500" data-easing="easeOutBack">
                          More than 1000+ online courses
                        </div>-->

                        <div class="tp-caption sfb fadeout slider-caption slider-caption-1" data-x="center" data-y="280" data-speed="700" data-easing="easeOutBack"  data-start="2000">Advance your career today</div>
                        
                        <!--<a href="#" class="tp-caption sfb fadeout awe-btn awe-btn-style3 awe-btn-slider" data-x="center" data-y="380" data-easing="easeOutBack" data-speed="700" data-start="2200">Book now</a>-->
                    </li> 

                   

                    <li data-slotamount="7" data-masterspeed="500" data-title="Slide title 3">
                        <img src=" images/bg/hey.png" data-bgposition="left center" data-duration="14000" data-bgpositionend="right center" alt="">

                        <div class="tp-caption lfl fadeout slider-caption slider-caption-3" data-x="center" data-y="260" data-speed="700" data-easing="easeOutBack"  data-start="1500">
                            Find your course today
                        </div>
                        
                        <div href="#" class="tp-caption lfr fadeout slider-caption-sub slider-caption-sub-3" data-x="center" data-y="365" data-easing="easeOutBack" data-speed="700" data-start="2000">Come join us</div>
                    </li> 

                </ul>
            </div>
        </section>
        <!-- END / HERO SECTION -->


        <!-- SEARCH TABS -->
        <section>
            <div class="container">
                <div class="awe-search-tabs tabs">
                    <ul>
                        <li>
                            <a href="#awe-search-tabs-1">
                                <i class="awe-icon awe-icon-briefcase"></i>
                            </a>
                        
                    </ul>
                    <div class="awe-search-tabs__content tabs__content">
                        <div id="awe-search-tabs-1" class="search-flight-hotel">
                            <h2>Search courses</h2>
                            <form action="course_search_list.php" method="post">
                                <div class="form-group">
                                    <div class="form-elements">
                                        <label>What would you like to learn today?</label>
                                        <div class="form-item">
                                            <i class="awe-icon awe-icon-marker-1"></i>
											
											
											
											
                                            
											
											 <select type="text" name="categoryy" class="">
						  
						  <?php
	$sql="SELECT * FROM `category`";
	$sq=mysqli_query($con,$sql);
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					// $id1=$row['uni_id'];
					 
//echo"<tr><td>".$row['uni_id']."</td>";
			echo"<option>".$row['cat_name']."</option>";
	       
			
			
	 }
		?>
                           
                          </select>
											
											
                                        </div>
                                    </div>
                                   
                                </div>
                                
                                <div class="form-actions">
                                    <input type="submit" value="Find My Course">
                                </div>

                         
                </div>
            </div>
        </section>
        <!-- END / SEARCH TABS -->

        <!-- MASONRY -->
        <section class="masonry-section-demo">
            <div class="container">
                <div class="destination-grid-content">
                    <div class="section-title">
                        <h3>More than <a href="destinations-grid.html">2000 Courses</a> from 300 universities</h3>
                    </div>
                    <div class="row">
                        <div class="awe-masonry">
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/coursede.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">IIT Bombay</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Mumbai</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                   
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/Nicholls-sword-logo-with-name-grey2.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">Harvard</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">USA</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/MSU-vert-rgb.jpg" alt="" height="80%" width="80%">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">MIT</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Massachussets</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                   
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/green-university-logos_23-2147493136.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">IIT Madras</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Chennai</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->

                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/universities.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">AMITY Univ</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Gujarat</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                   
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/pack-of-four-university-logos-in-flat-design_23-2147569308.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">M G U</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Kerala</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/graceland_stacked-large.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">ANNA Univ.</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Chennai</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/Admissions_PacU_Logo_1c.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">TOKYO Univ.</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">Japan</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                   
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                            <!-- GALLERY ITEM -->
                            <div class="awe-masonry__item">
                                <a href="#">
                                    <div class="image-wrap image-cover">
                                        <img src="images/img/Eastern289.jpg" alt="">
                                    </div>
                                </a>
                                <div class="item-title">
                                    <h2><a href="#">OXFORD</a></h2>
                                    <div class="item-cat">
                                        <ul>
                                            <li><a href="#">London</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="item-available">
                                    
                                </div>
                            </div>
                            <!-- END / GALLERY ITEM -->
                        </div>
                    </div>
                    <div class="more-destination">
                        <a href="#"></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END / MASONRY -->


        <section class="sale-flights-section-demo">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="sale-flights-tabs tabs">
                            <ul>
                                <li><a href="#sale-flights-tabs-1">Top Courses</a></li>
                                <!--<li><a href="#sale-flights-tabs-2">Recent items</a></li>-->
                            </ul>
                            <div class="sale-flights-tabs__content tabs__content">
                                <div id="sale-flights-tabs-1">
                                    
                                    <!-- ITEM -->
                                
                                <!-- END / ITEM -->
                                <!-- ITEM -->
								
								
												  <?php
					  
					
	$sql="SELECT * FROM `course`";
	
	$sq=mysqli_query($con,$sql);
	
     while($row=mysqli_fetch_assoc($sq))
	 {
	 
					$cname=$row["course_name"];
				$ccat=$row["course_category"];
				$cuniv=$row["course_university"];
				
				
				$sqq="SELECT `uni_name` FROM `university` WHERE uni_email='$cuniv' ";
				$sq2=mysqli_query($con,$sqq);
				 while($row5=mysqli_fetch_assoc($sq2))
	 {
		 $cunivname=$row5["uni_name"];
		 
	 }
				
				
					 
?>
			
			
	       
			
			
			
	
				
								
								
								
                                
                                <div id="sale-flights-tabs-2">
                                    
                                    <table class="sale-flights-tabs__table">
                                        <tbody>
                                            <tr>
                                                <td class="sale-flights-tabs__item-flight">
                                                    <div class="image-wrap">
                                                        <img src="images/course_design_tile.jpg" alt="">
                                                    </div>
                                                    <div class="td-content">
                                                        <div class="title">
                                                            <h3><?php echo $cname ;?>	</h3>
                                                        </div>
                                                        <ul>
                                                           
                                                           
                                                        </ul>
                                                    </div>
                                                    <div class="line"></div>
                                                </td>
                                                <td class="sale-flights-tabs__item-depart">
                                                    <h4>University</h4>
                                                    <ul>
                                                        <li><?php echo  $cunivname ;?></li>
                                                        
                                                    </ul>
                                                    <div class="line"></div>
                                                </td>
                                                <td class="sale-flights-tabs__item-arrive">
                                                    <h4>Category</h4>
                                                    <ul>
                                                        <li><?php echo  $ccat ;?></li>
                                                        
                                                    </ul>
                                                    <div class="line"></div>
                                                </td>
                                               <!-- <td class="sale-flights-tabs__item-duration">
                                                    <h4>Duration</h4>
                                                    <ul>
                                                        <li>38h5m</li>
                                                        <li>38h5m</li>
                                                    </ul>
                                                    <div class="line"></div>
                                                </td>-->
                                                <td class="sale-flights-tabs__item-choose">
                                                    <span class="amount"></span>
                                                    <a href="login.php" class="awe-btn">View Now</a>
                                                    <div class="line"></div>
                                                </td>
                                            </tr>
                                            	<?php	
			
	 }
	
		?>	
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>


        <!-- FOOTER PAGE -->
<?php include('footer.php'); ?>

    </div>
    <!-- END / PAGE WRAP -->


    <!-- LOAD JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="js/lib/masonry.pkgd.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>
    <script type="text/javascript" src="js/lib/jquery.owl.carousel.js"></script>
    <script type="text/javascript" src="js/lib/theia-sticky-sidebar.js"></script>
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>
    <script type='text/javascript' src="js/lib/jquery-ui.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>

    <!-- REVOLUTION DEMO -->
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="revslider-demo/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript">
        if($('#slider-revolution').length) {
            $('#slider-revolution').show().revolution({
                ottedOverlay:"none",
                delay:10000,
                startwidth:1600,
                startheight:650,
                hideThumbs:200,

                thumbWidth:100,
                thumbHeight:50,
                thumbAmount:5,
                
                                        
                simplifyAll:"off",

                navigationType:"none",
                navigationArrows:"solo",
                navigationStyle:"preview4",

                touchenabled:"on",
                onHoverStop:"on",
                nextSlideOnWindowFocus:"off",

                swipe_threshold: 0.7,
                swipe_min_touches: 1,
                drag_block_vertical: false,
                
                parallax:"mouse",
                parallaxBgFreeze:"on",
                parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
                                        
                                        
                keyboardNavigation:"off",

                navigationHAlign:"center",
                navigationVAlign:"bottom",
                navigationHOffset:0,
                navigationVOffset:20,

                soloArrowLeftHalign:"left",
                soloArrowLeftValign:"center",
                soloArrowLeftHOffset:20,
                soloArrowLeftVOffset:0,

                soloArrowRightHalign:"right",
                soloArrowRightValign:"center",
                soloArrowRightHOffset:20,
                soloArrowRightVOffset:0,

                shadow:0,
                fullWidth:"on",
                fullScreen:"off",

                spinner:"spinner2",
                                        
                stopLoop:"off",
                stopAfterLoops:-1,
                stopAtSlide:-1,

                shuffle:"off",

                autoHeight:"off",
                forceFullWidth:"off",
                
                
                
                hideThumbsOnMobile:"off",
                hideNavDelayOnMobile:1500,
                hideBulletsOnMobile:"off",
                hideArrowsOnMobile:"off",
                hideThumbsUnderResolution:0,

                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                startWithSlide:0
            });
        }
    </script>

</body>
</html>
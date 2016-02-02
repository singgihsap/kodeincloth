<?php 
session_start();
include("library/class_email_sender.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>KODEIN CLOTH</title>
	
    <link name="author" href="Faisal Russel(russel365)" />
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5">
    
    <!-- Favicons -->
    <link rel="shortcut icon" href="favicon.ico">
    
    <!-- Mobile -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
    
	<!-- CSS start here -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen">
	<link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css" />
	<!-- CSS end here -->
	<!-- Google fonts start here -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:300' rel='stylesheet' type='text/css'>
	<!-- Google fonts end here -->
</head>
<body class="ux">
  <div class="bg-overlay"></div>
	<!-- Preloader start here -->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Preloader end here -->
<!-- Contact Icon start here -->
	<div class="contact-us"> 
		<a href="#" class="fa fa-envelope-o tool-tip" data-toggle="modal" data-target=".bs-example-modal-lg2"  data-placement="left" title="Contact"></a>
	</div>
<!-- Contact Icon end here -->
	<!-- Main container start here -->
	<section class="container main-wrapper">
		<!-- Logo start here -->
		<section id="logo" class="fade-down">
			<a href="#" title="UX - Coming Soon HTML Template">
            	<img src="img/logo_header.png" alt="UX - Coming Soon HTML Template">
            </a>
		</section>
		<!-- Logo end here -->
		<!-- Slogan start here -->
		<section class="slogan fade-down">
			<h1>We are COMING SOON !!! Our website is under construction. We`ll be here soon with our new awesome site, Contact now to be notified.</h1>			
		</section>
		<!-- Slogan end here -->
		<!-- Count Down start here -->
		<section class="count-down-wrapper fade-down">
			<ul class="row count-down">                       
				<li class="col-md-3 col-sm-6">   
					<input class="knob days" data-readonly=true data-min="0" data-max="365" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#3498db" data-bgColor="#ccc" data-angleOffset="180">
					<span id="days-title">days</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob hour" data-readonly=true data-min="0" data-max="24" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#4cd964" data-bgColor="#ccc" data-angleOffset="180">
					<span id="hours-title">hours</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob minute" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff9500" data-bgColor="#ccc" data-angleOffset="180">
					<span id="mins-title">minutes</span>
				</li>    
				<li class="col-md-3 col-sm-6"> 
					<input class="knob second" data-readonly=true data-min="0" data-max="60" data-width="260" data-height="260" data-thickness="0.07" data-fgcolor="#ff3b30" data-bgColor="#ccc" data-angleOffset="180">
					<span id="secs-title">seconds</span>
				</li>                
			</ul>              
		</section>
		<!-- Count Down end here -->
		<!-- Social icons start here -->
		<ul class="connect-us row fade-down">
			<li><a href="https://www.facebook.com/Kodein-Cloth-1677929165757733/" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
			<li><a href="https://twitter.com/KodeinCloth" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
			<li><a href="https://www.instagram.com/kodeincloth/" class="gplus tool-tip" title="Instagram"><i class="fa fa-instagram"></i></a></li>
		</ul>
		<!-- Social icons end here -->
		<!-- Footer start here -->
		<footer class="fade-down">        
			<p class="footer-text">&copy; KODEINCLOTH 2016, All Rights Reserved.</p>
		</footer>
		<!-- Footer end here -->
	</section>
<!-- Contact start here -->
  <div class="modal fade bs-example-modal-lg2" role="dialog" aria-hidden="true" data-keyboard="true" data-backdrop="static" tabindex="-1">
    <a href="#" class="fa fa-times cls-pop" data-dismiss="modal"></a>
    <div class="modal-dialog modal-lg">
      <div class="modal-content pop-up pop-up-cnt">
        <h3>Contact us</h3>
        


        <!--Email Sending Script -->

        <?php 
			$name="";
			$from="";
			$message="";
        if(isset($_POST['submit'])){

        	$name=mysql_real_escape_string($_POST['name']);
        	$from=mysql_real_escape_string($_POST['email']);
        	$message=mysql_real_escape_string($_POST['comments']);
        	$code=$_SESSION['captcha'];
            $captcha=mysql_real_escape_string($_POST['captcha']);
        	$to="kodeincloth@gmail.com"; // Add your e-mail here
        	if($code!=$captcha){
			echo '<script>alert("Invalid Captcha");</script>';
			}else{    
        	include("library/send_email.php");
			}

        //Isset finishes here	
        }
        ?>


        <!-- Email Sending Script-->

        <div class="clearfix cnt-wrap">
         <form id="contactform" name="contactform" action="" method="post">
         	<div id="result"></div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text" id="name" placeholder="Name" name="name" value="<?php echo $name;?>" required>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 columns">
                <input type="text"  id="email" placeholder="Email" name="email" value="<?php echo $from;?>" required>
              </div>
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns">
                <textarea id="comments" name="comments" placeholder="Message" required><?php echo $message;?></textarea>
              </div>
               
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 columns captcha text-center">
				   <img src="captcha.php"><br>
                   <input type="text" name="captcha" placeholder="captcha"required>                
              </div>
              
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center columns">             
                <button name="submit" id="submit" class="contact-btn-submit" type="submit">Send</button>
              </div> 
            </form>        
        </div>


        <div class="clearfix cnt-wrap">
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-phone"></i>
            <h4>Phone</h4>
            <p>Mobile: +62 8574 2600 102</p>
          </div>

          <div class="col-md-4 col-sm-4">      
            <i class="fa fa-envelope-o"></i>
            <h4>Email</h4>
            <p>kodeincloth@gmail.com</p>
          </div>
          <div class="col-md-4 col-sm-4">
            <i class="fa fa-map-marker"></i>
            <h4>Address</h4>
            <p>Warungboto UH4<br>
              RT.28 RW.07 No.704 <br>
              Umbulharjo, Yogyakarta, Indonesia</p>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- Contact end here --> 
		<!-- Main container start here -->
		<!-- Javascript framework and plugins start here -->
		<script type="text/javascript" src="js/jquery.js"></script> 
		<script type="text/javascript" src="js/bootstrap.min.js"></script> 
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/modernizr.js"></script> 
		<script type="text/javascript" src="js/appear.js"></script> 		
		<script src="js/jquery.knob.js"></script>
		<script src="js/jquery.ccountdown.js"></script>
		<script src="js/init.js"></script>
		<script src="js/general.js"></script>
		
<!-- Javascript framework and plugins end here -->
</body>
</html>



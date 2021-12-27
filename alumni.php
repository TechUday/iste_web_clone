<?php
		ob_start();
		session_start();

	  $current_file= $_SERVER['SCRIPT_NAME'];

		function loggedin(){
			if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
				return true;
			}else{
				return false;
			}
		}
		
		function getuserfield($field){
			global $mycon;
			$id = $_SESSION['user_id'];
			$query = "SELECT `$field` FROM `users3` WHERE `id`=$id";
			if($query_run = mysqli_query($mycon, $query)){
				$num_rows = mysqli_num_rows($query_run);
				if($num_rows == 1){
					$row = mysqli_fetch_row($query_run);
					return $row[0];
				}
			}
		}


?>











<?php

//require 'core.php';
require 'dbconnect.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Onetel Template - Contact</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 
OneTel Template
http://www.templatemo.com/tm-468-onetel
-->

	<!-- stylesheet css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/nivo-lightbox.css">
	<link rel="stylesheet" href="css/nivo_themes/default/default.css">
	<link rel="stylesheet" href="css/templatemo-style.css">
	<!-- google web font css -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

</head>
<body>
	
<!-- navigation -->

	<div class="container">
		<div class="navbar navbar-default navbar-static-top" role="navigation">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand"><img src="images/logo 10.png" class="img-responsive" alt="logo"></a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="index.html">HOME</a></li>
				<li><a href="about.html">Hierarchy</a></li>
				<li><a href="portfolio.html">Gallery</a></li>
				<li><a href="contact.html">Campaign</a></li>
                <li><a href="alumni.php" class="active">ALUMNI</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- contact header section -->
<div id="contact-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12"></div>
		</div>
	</div>
</div>

<!-- contact section -->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Get in touch</h2>

<p>The esteemed Alumni of SRKR ISTE are now spread across the world, leading in various fields of this competitive world as Engineers, Teachers, Scientists and Entrepreneurs. We are proud to say that, our alumni are reflection of past, basis for the present and a link to the future of the organization. They had created an enduring legacy with their dedicated efforts that contributed for the eternity of the organization. They not only support the organization by their guidance but also with their funds towards the developmental activities. They also play a significant role in contributing scholarships to the worthy students, providing their guidance for the students in the concerned fields. They often provide a wealth of career services to help former students in finding job opportunities and improve their chances of employability. They are the permanent treasure of SRKR ISTE, who are extremely passionate to offer their help socially, academically and personally for all the fresh minds who begin their trek towards success. We are so grateful for their endless efforts in making ISTE, A remarkable organizations.</p><br><br><br><br>

				<?php

$logout_txt = '<a href="logout.php">Logout</a>';
$page = '<a href="faq.php">PageIn</a>'; 

if(loggedin()){
$firstname = getuserfield('firstname');
$surname = getuserfield('surname');

echo '<br/>you are logged in and welcome    '.$firstname.' '.$surname.' '.$page.' '.$logout_txt;
?>

<form action="alumni1.php" method="post" enctype="multipart/form-data">

<div class="form-group">
	<label for="user">Enter a number </label>
	<input type="text" name="username" id="user" class="form-control">
</div>
<input type="submit" name="submit" value="Submit" class="btn btn-success">

<?php
}

else{
include 'loginform.php';
}


?>






<!--

<form action="alumni1.php" method="post" enctype="multipart/form-data">

<div class="form-group">
    <label for="user">Username </label>
    <input type="text" name="username" id="user" class="form-control">
</div>
<input type="submit" name="submit" value="Submit" class="btn btn-success">

-->




<br><br><br><br>

<video width="600" controls>
	<source src="video1.mp4" type="video/mp4">
</video>






                
			</div>
		<!--	<div class="col-md-8 col-sm-8 mt30">
				<form action="#" method="post" role="form">
					<div class="col-md-6 col-sm-6">
                        <label for="name">NAME</label>
                        <input name="name" type="text" class="form-control" id="name">
                      <label for="email">EMAIL</label>
                        <input name="email" type="email" class="form-control" id="email">
					</div>
					<div class="col-md-6 col-sm-6">
						<label for="message">MESSAGE</label>
						<textarea name="message" rows="6" class="form-control" id="message"></textarea>
					</div>
                    <div class="col-md-6 col-sm-6">
                    	<button type="submit" name="submit" class="btn btn-default">SEND</button>
                    </div>
				</form>
			</div> -->
			<div class="col-md-4 col-sm-4 address">
				<div>
					<h3>Email</h3>
					<p>srkriste@gmail.com</p>
				</div>
				<div>
					<h3>Phones</h3>
					<p>010-020-0340 | 090-080-0760</p>
				</div>
			</div>
			<!-- <div class="col-md-12 col-sm-12 mt20">
            	<h3>Location</h3>
				<div class="google_map mt20">
					<div id="map-canvas"></div>
				</div> -->
			</div>
		</div>
	</div>
</div>		

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
        
		<div class="col-md-5 col-sm-4">
				<img src="images/logo 10.png" class="img-responsive" alt="logo">
				<!--<p>Onetel is free Bootstrap v3.3.5 HTML5 layout from 
                <a rel="nofollow" href="http://www.facebook.com/templatemo" target="_parent">templatemo</a> website.
                Feel free to use it for your website.</p>-->
				<p><i class="fa fa-phone"></i> 010-020-0340</p>
				<p><i class="fa fa-envelope-o"></i> iste@gmail.com.com</p>
              <p><i class="fa fa-globe"></i> www.srkriste.com</p>
			</div>

			<div class="col-md-3 col-sm-4">
				<h3>Useful Links</h3>
				<p><a href="https://www.facebook.com/SrkrIste">facebook</a></p>
				<p><a href="https://www.instagram.com/srkriste/">instagram</a></p>
				<p><a href="https://www.youtube.com/channel/UC0xPbncT-KgZb2IiMZPYzDw">youtube</a></p>
				<p><a href="https://www.linkedin.com/company/srkriste/mycompany/">linkedin</a></p>
			</div>
            
			<!--<div class="col-md-4 col-sm-4 newsletter">
				<h3>Newsletter</h3>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismo.</p>
				<div class="input-group">
           	    	<form action="#" method="post">
                        <input name="email" type="email" placeholder="Enter your email" class="form-control" autorequired>
                    	<button type="submit" name="submit" class="btn email">Submit</button>
                  	</form>
				 </div>
			</div>-->
            
		</div>
	</div>
</footer>

<!-- copyright section -->
<div class="copyright">
	<div class="container">
		<div class="row">
		<div class="col-md-6 col-sm-6">
				<p>Copyright © 2021 SRKR ISTE</p>
			</div>
			<!--<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/SrkrIste" class="fa fa-facebook"></a></li>
					<li><a href="https://www.linkedin.com/company/srkriste/mycompany/" class="fa fa-linkedin"></a></li>
					<li><a href="https://www.youtube.com/channel/UC0xPbncT-KgZb2IiMZPYzDw" class="fa fa-youtube"></a></li>
					<li><a href="https://www.instagram.com/srkriste/" class="fa fa-instagram"></a></li>
				</ul>
			</div>-->
		</div>
	</div>
</div>

<!-- javascript js -->	
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>	
<script src="js/nivo-lightbox.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>
<!DOCTYPE html>
<?php
$con = @mysqli_connect("localhost","root","");
if(!$con)
{
    die('colud not connect: '.mysql_error());
}
mysqli_select_db($con,"demo");

$uname = $_POST['uname'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$comments = $_POST['comments'];


$sql="INSERT INTO `feedback`(`uname`,`mobile`,`email`,`comments`) VALUES('$uname','$mobile','$email','$comments')";
if(!@mysqli_query($con,$sql))
{
    die('Error in posting values: '.@mysqli_error());
}
echo "feedback is stored into our database successfully";
mysqli_close($con);
?>



<html lang="en">
<head>
	<title>Onetel Bootstrap Template</title>
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


	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style11.css" media="all" />




	<title></title>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,500&display=swap"
        rel="stylesheet">
        <style type="text/css">
            body{
                font-family: 'Roboto',sans-serif;
            }
            .ticker-wrapper{
                position:relative;
                max-width: 800px;
                margin: auto;
                padding-top: 200px;
            }

            .bigHeading{
                display: block;
                position: absolute;
                font-style: italic;
                font-size: 20px;
                background: #e60000;
                color: #fff;
                text-transform: uppercase;
                padding: 15px;
                letter-spacing: 3px;
                font-weight: 700;
                z-index: 2;
            }
            .bigHeading::after;
            .bigHeading::before{
                content: '';
                width: 0;
                position: absolute;
                border-width: 78px;
                border-style: solid;
                top: 0;
                z-index: -1;
            }
            .bigHeading::before{
                border-color: #e60000 transparent transparent transparent;
                right: -78px;
            }
            .bigHeading::after{
                border-color: transparent transparent #e60000 transparent;
                left: -78px;
                top: -78px;
            }
            .text-update{
                height: 48px;
                background: #004fff;
                overflow: hidden;
                position: relative;
                color: #fff;
                text-transform: uppercase;
                letter-spacing: 1px;
                font-size: 15px;
                font-weight: 500;
                display: flex;
                align-items: center;
                left: 125px;
            }
            .text-update p{
                position: absolute;
                width: 150%;
                margin: 0;
                font-weight: 700;
                text-align: left;

                transform: translateX(100%);
                animation: moving 25s linear infinite;
            }

            @keyframes moving{
                0%{
                    transform: translateX(100%);
                }
                100%{
                    transform: translateX(-100%);
                }
            }
        </style>





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
				<li><a href="index.html" class="active">HOME</a></li>
				<li><a href="about.html">Hierarchy</a></li>
				<li><a href="portfolio.html">Gallery</a></li>
				<li><a href="contact.html">Campaign</a></li>
				<li><a href="alumni.php">ALUMNI</a></li>
			</ul>
		</div>
	</div>
</div>		

<!-- home section -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-5 col-sm-3"></div>
			<div class="col-md-7 col-sm-9">
				<h1 style="color:black;">
					INDIAN SOCIETY FOR  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;TECHNICAL EDUCATION</h1>
				<!--<h1>Onetel Design Studio</h1>-->
			</div>
		</div>
	</div>
</div>

<!-- divider section -->
<div class="divider">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-one">
					<i class="fa fa-laptop"></i>
					<h2>About</h2>
					<button style="background-color: teal;" onclick="document.location='index.html'">About</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-6">
				<div class="divider-wrapper divider-two">
					<i class="fa fa-mobile"></i>
					<h2>Objectives</h2>
					<button style="background-color: teal;" onclick="document.location='index21.html'">Objectives</button>
				</div>
			</div>
			<div class="col-md-4 col-sm-12">
				<div class="divider-wrapper divider-three">
					<i class="fa fa-life-ring"></i>
					<h2>Legacy</h2>
					<button style="background-color: teal;" onclick="document.location='index22.html'">Legacy</button>
				</div>
			</div>
		</div>
	</div>
</div>




<!--

<div class="row">
	<i class="fa fa-fast-forward"></i>
	<div class="news-ticker">
		<ul>
			<li>The Indian Society for Technical Education (ISTE) is the leading National Professional non-profit making Society for the Technical Education System in our country with the</li>
			<li>EduSkills is the strategic partner for many global corporates like AWS, Blue Prism, Cisco, Red Hat, Palo Alto, Microchip etc. We are</li>
			<li>ISTE and EduSkill hosted few events for the benefit to students of ISTE member institutes all over India as well</li>
			<li> Career Development of Teachers and Personality Development of Students and overall development of our Technical Education System.</li>
		</ul>
	</div>
</div>

-->


<div class="ticker-wrapper">
    <div class="bigHeading">Live Updates</div>
    <div class="text-update">
        <p>
            ISTE Live streaming: upcoming event is endaze
            Thankyou for the support.<a href="feedback.html">feedback</a>
        </p>
    </div>
</div>



<!-- about section -->
<div id="about">
	<div class="container">
		
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<img src="images/iste.png" class="img-responsive" alt="about img">
			</div>
			<div class="col-md-6 col-sm-12 about-des">
				<h2>OUR ISTE</h2>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat. Lorem ipsum dolor sit amet.</p>
				<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
				<a href="about.html" class="btn btn-default">LEARN MORE</a>
			</div>
		</div>
		<p>The Indian Society for Technical Education (ISTE) is the leading National Professional non-profit making Society for the Technical Education System in our country with the motto of Career Development of Teachers and Personality Development of Students and overall development of our Technical Education System. It was first started in 1941 as the Association of Principals of Technical Education (APTI). Later, it was retitled as the Indian Society for Technical Education (ISTE) in 1968. The ISTE Students' chapter of SRKR Engineering College was established in 1995 under the influence of former Principal Dr. B. Janardhan Reddy. The vision of ISTE is to guide and train students to develop better learning skills and personality. The mission of ISTE is to cultivate a dedicated learning community where knowledge is shared and enhanced through interaction between students from all departments. The organisation has always benefitted the students in every possible way right from the beginning and is now running efficiently under the supervision of Faculty Advisor Prof. P. Subbarao from the department of ECE. It has been successful in organising events aimed at sharpening students' skills through seminars, literary, technical, and managerial competitions at the inter and intra college level. ISTE frequently conducts programs where there is a scope for students to improve their communication skills and stage activities. ISTE also provides helpful information and current affairs through Facebook and Instagram pages and encourages students to conduct programs under the supervision of Senior Body Members which help them to develop interpersonal and managerial skills. These courses prepare students to meet the demands of the competitive world and to face the challenges that lie ahead. Students can be recognized as members of the National Professional Society by obtaining a membership card, and ID cards will be issued to all the registered students by ISTE Headquarters which is located in New Delhi. The membership is valid for all years throughout the college without any renewal. It gives access to students to attend training programs for technical excellence, national level conventions, and the other ISTE organised events with a concession in participation fee.</p>
	</div>
</div>

<!-- portfolio section -->
<div id="portfolio">
	<!--<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<h2>Recent Projects</h2>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p>
			</div>
         </div>
         
         <div class="row mt30">
            
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="images/portfolio-img1.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img1.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="images/portfolio-img2.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img2.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-4 col-sm-4 col-xs-6">
				<a href="images/portfolio-img3.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img3.jpg" alt="portfolio img"></a>
			</div>
            
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="images/portfolio-img4.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img4.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="images/portfolio-img5.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img5.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6">
				<a href="images/portfolio-img6.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img6.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-12">
				<a href="images/portfolio-img7.jpg" data-lightbox-gallery="portfolio-gallery"><img src="images/portfolio-img7.jpg" alt="portfolio img"></a>
			</div>
			<div class="col-md-12 col-sm-12">
				<a rel="nofollow" href="http://www.templatemo.com/tag/darkgray" class="btn btn-default">View More</a>
			</div>
		</div>
	</div> -->
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
			<div class="col-md-6 col-sm-6">
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/SrkrIste" class="fa fa-facebook"></a></li>
					<li><a href="https://www.linkedin.com/company/srkriste/mycompany/" class="fa fa-linkedin"></a></li>
					<li><a href="https://www.youtube.com/channel/UC0xPbncT-KgZb2IiMZPYzDw" class="fa fa-youtube"></a></li>
					<li><a href="https://www.instagram.com/srkriste/" class="fa fa-instagram"></a></li>
				</ul>
			</div>
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
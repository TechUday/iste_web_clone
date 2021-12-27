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
				<li><a href="about.html">ABOUT US</a></li>
				<li><a href="portfolio.html">PORTFOLIO</a></li>
				<li><a href="contact.html">CONTACT</a></li>
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
                </div>


				<button onclick="document.location='index1.php'" color="black">Fun Chat</button><br><br>




                <head>
<script>
		function findmatch()
		{
			if(window.XMLHttpRequest){
				xmlhttp = new XMLHttpRequest();
			}
			else
			{
				xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
			}
			
			xmlhttp.onreadystatechange = function()
			{
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById('rdiv').innerHTML = xmlhttp.responseText;
				}
			}
			
			xmlhttp.open('GET','search.php?s_text='+document.search.s_text.value, true);
			xmlhttp.send(); 
		}


</script>


</head>

<body>

<style>

body{

	background-color: "#242336";
}

</style>


</body>

<form name="search">
	Find Friend : <input type="text" name="s_text" onkeyup="findmatch()">

</form>
<br>
<div id="rdiv"></div>

<style type="text/css"media="screen">

#rdiv{
		background-color:#1a1ad9;
	color:#24fa07;
	margin:10px;
	padding:10px;
	
}

</style>
















                <head>
    <title></title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 

</head>
<body>

<style>
body{

background-color: "#242336";
}
</style>


    <div class="container">
        <h1 class="text-center text-white bg-dark"> Alumni Names with Profile </h1>
        <br>
        <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover text-center">


            <thead class="bg-dark text-white">
                <th> Id </th>
                <th> Username </th>
                <th> Bio </th>
                <th> Profile Pic</th>
            </thead>

            <tbody>
            
            <?php
            echo '<body style="background-color:#242336">';
			echo '<body style="text-color:white">'; 
            $con = mysqli_connect('localhost','root');
            mysqli_select_db($con,'displayupload');

            if(isset($_POST['submit']))
            {
                $username = $_POST['username'];
               // $files = $_FILES['file'];

                print_r($username);
                echo "<br>";
               // print_r($files);

              /*  $filename = $files['name'];
                $fileerror = $files['error'];
                $filetmp = $files['tmp_name'];

                $fileext = explode('.',$filename);
                $filecheck = strtolower(end($fileext));

                $fileextstored = array('png', 'jpg', 'jpeg');

                */

               // if(in_array($filecheck,$fileextstored))
                //{
                   // $destinationfile = 'uplaod/'.$filename;
                   // move_uploaded_file($filetmp,$destinationfile);

                   // $q = "INSERT INTO `imgupload`(`username`, `image`) 
                   // VALUES ('$username', '$destinationfile')";

                   // $query = mysqli_query($con,$q);
                    
                    $displayquery = " select * from imgupload " ;
                    $querydisplay = mysqli_query($con,$displayquery );

                    // $row = mysqli_num_rows($querydisplay);

                    while( $result = mysqli_fetch_array($querydisplay) )
                    {

                        ?>

                        <tr>
                            <td> <?php echo '<span style="color:#fafaf5; text-align:center; ">'. $result['id'] .'</span>'; ?> </td>
                            <td> <?php echo '<span style="color:#fafaf5; text-align:center; ">'. $result['username'] .'</span>'; ?> </td>
                            <td> <?php echo '<span style="color:#fafaf5; font-size:15px; text-align:center; ">'. $result['Bio'] .'</span>'; ?> </td>
                            <td> <img src=" <?php echo $result['image']; ?>" height="100px" width="150px"> </td>
                        
                        </tr>


                        <?php

                    }
               // }
            }

            
            
            ?>
            
            
            </tbody>
        </table>

    </div>

</body>
















               <!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat volutpat.</p> -->
			
			<!--<div class="col-md-8 col-sm-8 mt30">
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
			</div>-->
			<!-- <div class="col-md-4 col-sm-4 address">
				<div>
					<h3>Email</h3>
					<p>info@company.com</p>
				</div>
				<div>
					<h3>Phones</h3>
					<p>010-020-0340 | 090-080-0760</p>
				</div>
			</div>
			<div class="col-md-12 col-sm-12 mt20">
            	<h3>Location</h3>
				<div class="google_map mt20">
					<div id="map-canvas"></div>
				</div>
			</div> -->
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
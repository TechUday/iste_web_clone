<?php

	if(isset($_POST['username'])&&isset($_POST['password'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$pass_hash = md5($password);
		
		if(!empty($username)&&!empty($password)){
			
			$query = "SELECT `id` FROM `users3` WHERE `username`='$username' AND `password`='$pass_hash' ";
			if($query_run = mysqli_query($mycon, $query)){
				 $num_rows = mysqli_num_rows($query_run);
				if($num_rows == 0){
					echo 'invalid username or password !';
				}else if($num_rows == 1){
					
					$row = mysqli_fetch_row($query_run);
					  $id = $row[0];
					$_SESSION['user_id']=$id;
					header('Location: alumni.php');
				}
			}
			
			
		}else
		{
			echo 'please enter username or password';
		}
	}
	


?>
<!-- <form action="<?php echo $current_file ?>" method="POST">
		Username:<input type="text" name="username"><br><br>
		Password:<input type="password" name="password"><br><br>
					<input type="submit" value="login">
</form> -->


<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Glowing Inputs Login Form UI</title> -->
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="login-form">
      <div class="text">
LOGIN</div>
<form action="<?php echo $current_file ?>" method="POST">
        <div class="field">
          <div class="fas fa-envelope">
</div>
<input type="text" placeholder="Username" name="username">
        </div>
<div class="field">
          <div class="fas fa-lock">
</div>
<input type="password" placeholder="Password" name="password">
        </div>
	<!--	<input type="submit" value="login"> -->
<button><input type="submit" value="LOGIN"></button>
        <div class="link">
          Not a member?
          <a href="register.php">Signup now</a>
        </div>
</form>


        <!--   <div class="form-group">
                <label for="file">Profile Pic: </label>
                <input type="file" name="file" id="file" class="form-control">
            </div>

        -->

         <!--   <input type="submit" name="submit" value="Submit" class="btn btn-success">   -->

        </form>
</div>
</body>
</html>

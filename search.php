<?php

	//require 'dbconnect.php';

	$host = 'localhost';
	$user = 'root';
	$pw = '';
	$dbname = 'iste_database';
	if($mycon = mysqli_connect($host, $user, $pw))
	{
		mysqli_select_db($mycon, $dbname);
		   
	}
	
	if(isset($_GET['s_text']))
	{
		$s_text = $_GET['s_text'];
		$s_text = mysqli_real_escape_string($mycon, $s_text);
		
		
		if(!empty($s_text)){
		$query = "SELECT `username`,`Bio` FROM `users3` WHERE `username` LIKE '%$s_text%'";
				
				
				
				if($query_run = mysqli_query($mycon, $query)){
					$num_rows = mysqli_num_rows($query_run);
					if($num_rows >= 1)
					{
						while($row = mysqli_fetch_assoc($query_run))
						{
							echo $row['username'].'<br/> Bio is '.'<br/>'.$row['Bio'].'<br/><br/>';
						}					
					}
				}
		}
	}


?>
<?php

require 'dbconnect.php';
	$query ='SELECT `username`,`Bio` FROM `users3`';
	
	if($query_run = @mysqli_query($mycon,$query)){
		
		if(mysqli_num_rows($query_run)!=NULL){
		
		while($row=mysqli_fetch_assoc($query_run)){ //retuns a row from database
			$fname = $row['username'];
			$sname = $row['Bio'];
			echo $fname.'  '.$sname.'<br/><br/>';
		}
		}
		else{
			echo 'no users found';
		}
	}
	else{
		echo 'query failed';
	}



?>
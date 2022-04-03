<?php
	session_start();
	include('dbconnect.php');

	if(isset($_POST['pass_reset_link']))
	{
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$token = md5(rand());

		 $tot = "SELECT * from registrationform where email ='$email'";

    	$select = mysqli_query($con, $tot) or die('Error Quering Database.');
    	$count = mysqli_num_rows($select);
    	

    	if($count > 0){
    		$row = mysqli_fetch_array($select);
    		$name = $row['first_name'];
    		$mail = $row['email'];

    		$update_token = "UPDATE registrationform SET token = '$token' WHERE email = '$mail' LIMIT 1";
    		$update_token_run = mysqli_query($con,$update_token);

    		if($update_token_run)
    		{
    			send_password_reset($name,$mail,$token);
    			$_SESSION['status'] = "Token is being Sent";
    			header("Location:forgotpassword.php ");
    			exit(0);	
    		}
    		else
    		{
    			$_SESSION['status'] = "Something Went Wrong";
    			header("Location:forgotpassword.php ");
    			exit(0);
    		}

    	}else
    	{
    		$_SESSION['status'] = "No Email Found";
    		header("Location:forgotpassword.php ");
    		exit(0);
    	}
	}
?>
<?php 
  session_start();
  include("dbconfig/config.php");
		$username = $_POST['username'];
		$password = $_POST['password'];

		$query = "SELECT * FROM users WHERE username='$username'";
		$query_run = mysqli_query($con, $query);
		if ($query_run) {
			$numRows = $query_run->num_rows;
			$_SESSION['user_info'] = mysqli_num_rows($query_run);
           header('location:homepage.php');
		}	
		
        if(mysqli_num_rows($query_run) > 0)
		{
			$user_data = mysqli_fetch_assoc($query_run);
			$stored_password = $user_data['password'];

			if(password_verify($password, $stored_password))
			{
				
				echo '<script type="text/javascript"> alert("Login successful!") </script>';
				$_SESSION['username']= $username;
				
			}
			else
			{
				
				echo '<script type="text/javascript"> alert("Invalid username or password!") </script>';
			}
		}
		else
		{
	
			echo '<script type="text/javascript"> alert("Invalid username or password!") </script>';
		}
		
?>
		
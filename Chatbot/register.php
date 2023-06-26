<?php
	require 'dbconfig/config.php';
?>

<!DOCTYPE html>
<html>
<head>
<style>
body {
  background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-smart-robot-arm-advertising-background-backgroundrobotblue-backgrounddark-backgroundlightlight-image_68405.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
</style>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>	
<title>Registration Page</title>
<link rel="stylesheet" href="css/stylex.css">
</head>
	
<div id="main-wrapper">
	<center>
		<h2><strong id="regis">Sign Up</strong></h2>
		<img src="image/user_avatar.png" class="avatar"/>
	</center>

	<form class="myform" action="register.php" method="post" enctype="multipart/form-data">
		<div class="inner_container">
			<label><b id="run">Username:</b></label><br>
			<input name="username" type="text" id="ruser" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b id="rpas">Password:</b></label><br>
			<input name="password" type="password" id="rpass" class="inputvalues" placeholder="Your password" required/><br>
			<label><b id="rcpas">Confirm Password:</b></label><br>
			<input name="cpassword" type="password" id="rcpass" class="inputvalues" placeholder="Confirm password" required/><br>
			<input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/><br>
			<a href="index.php"><input type="button" id="back_btn" value="Back"/></a>
		</div>
	</form>
		
	<?php
	if(isset($_POST['submit_btn']))
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		$image_name = $_FILES["image"]["name"];
		$image_tmp = $_FILES["image"]["tmp_name"];
		$uploads_dir = "image/"; 
		$image_path = $uploads_dir . $image_name;
		move_uploaded_file($image_tmp, $image_path);


		if($password == $cpassword)
		{
			$query = "SELECT * FROM users WHERE username='$username'";
			$query_run = mysqli_query($con, $query);
			
			if(mysqli_num_rows($query_run) > 0)
			{
				echo '<script type="text/javascript"> alert("User already exists.. try another username") </script>';
			}
			else
			{
				$hashed_password = password_hash($password, PASSWORD_DEFAULT);
				$query = "INSERT INTO users VALUES('', '$username', '$hashed_password','$image_path')";
				$query_run = mysqli_query($con, $query);
				
				if($query_run)
				{
					echo '<script type="text/javascript"> alert("User Registered.. Go to login page to login") </script>';
					header('location:index.php');
				}
				else
				{
					echo '<script type="text/javascript"> alert("Error: ' . mysqli_error($con) . '") </script>';
				}
			}
		}
		else
		{
			echo '<script type="text/javascript"> alert("Password and confirm password do not match!") </script>';	
		}
	}
	?>
</div>

<div id="login-main-wrapper">
	<center>
		<h2><strong id="regis">Login</strong></h2>
		<img src="image/user_avatar.png" class="avatar"/>
	</center>

	<form class="myform" action="loginaction.php" method="post">
		<div class="inner_container">
			<label><b id="run">Username:</b></label><br>
			<input name="username" type="text" id="ruser" class="inputvalues" placeholder="Type your username" required/><br>
			<label><b id="rpas">Password:</b></label><br>
			<input name="password" type="password" id="rpass" class="inputvalues" placeholder="Your password" required/><br>
			<button>Login</button>
			<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
		</div>
	</form>

	
</div>
<script>document.getElementById('image').addEventListener('change', function(event) {
  var input = event.target;
  if (input.files && input.files[0]) {
  var reader = new FileReader();
  reader.onload = function(e) {
  var imageElement = document.getElementById('image-preview');
  imageElement.src = e.target.result; imageElement.style.display = 'block';
  };
  reader.readAsDataURL(input.files[0]);
 }
});

	</script>
</body>
</html>
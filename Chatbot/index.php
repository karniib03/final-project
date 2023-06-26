<?php
	session_start();
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>


<title>Login Page</title>
<link rel="stylesheet" href="css/stylex.css">

<style>
body 
{
  background-image: url('https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-smart-robot-arm-advertising-background-backgroundrobotblue-backgrounddark-backgroundlightlight-image_68405.jpg' );
   background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}



</style>



</head>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
	


	
	<div id="main-wrapper">
		<center>
			<h2><strong id="log">Login</strong></h2>
			<div class="imgcontainer">
			<img src="image/bot_avatar.png" class="avatar"/>
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
</body>
</html>
<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>singnup | Login</title>
	<style type="text/css">
		body{
			background: #ffcc00;
		}
		h1{
			text-align: center;
			color: #ffff99;
		}
		
 		.forms{
 			overflow: hidden;
 			text-align: center;
 			width: 40%;
 			margin:140px auto 30px;
 			padding: 50px;
 			background: lightgreen;
 		}
 		.forms input{
 			width: 100%;
 			padding: 6px;
 		}
 		.forms .sign{

 			width: 25%;

 		}
 		 .lab{
 			padding: 10px;
 			margin-bottom: 20px;
 			color: blue;
 			margin-right: 130px;
 		}
 		
 		.sign{
 			
 			padding: 5px;
 			background-color: lightblue;
 			color: #333300;
 		}
 		.sign:hover{
 			background: #ccc;
 			color: red;
 		}

	</style>
</head>
<body>

		<h1>welcome to Merce sign up form</h1>

	<form action="home.php" method="POST" class="forms">

		<!--validation errors to be displayed here -->
		<?php include('errors.php'); ?>
		<label class="lab">Name</label><br>

		<input type="text" name="username" placeholder="Enter your name" value="<?php echo $username?>"><br><br>

		<label class="lab">email</label><br>

		<input type="email" name="email" placeholder="Enter your email adress" value="<?php echo $email?>"><br><br>

		<label class="lab pass">Password</label><br>

		<input type="password" name="password1" placeholder="enter your passwoord"><br><br>

		<label class="lab pass">Confirm&nbsp;Password</label><br>

		<input type="password" name="password2" placeholder="confirm passwoord"><br><br>

		<input type="submit" name="sign" value="sign up" class="sign">
		<p>Already a member? <a href="signin.php">login</a></p>

	</form>

</body>
</html>
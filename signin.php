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
		}

		
 		.forms{
 			//text-align: center;
 			width: 40%;
 			margin:140px  auto 30px;
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
	<h1>
	welcome to Merce
    </h1>

  <h5>
     Enter user name and password to login to the site </h5>

	<form action="signin.php" method="POST" class="forms">

		<!-- display validation error-->

		<?php include('errors.php'); ?>


		<label class="lab">Name</label><br>
		<input type="text" name="username" placeholder="Enter your name" value="<?php echo $username ?>" ><br><br>
		<label class="lab pass">Password</label><br>
		<input type="password" name="password" placeholder="enter your passwoord">
<br><br>
		<input type="submit" name="signin" value="sign in" class="sign"><br><br>
		<p>Not yet a member? <a href="home.php">Sign up</a></p>

	</form>

</body>
</html>
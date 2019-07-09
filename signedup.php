<?php include('server.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome|page</title>
</head>
<body>

	<h3>Welcome <?php echo $_SESSION['username']; ?> to our site</h3>


	<h4>you have succsessfully signed up!!! </h4>
	<a href="signin.php">Go to login page</a>

</body>
</html>
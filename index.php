<?php include('server.php'); 

	if(empty($_SESSION['username'])){
		header('location: signin.php');
	}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>


	<h2>Home Page</h2>
		<div>
			<?php if(isset($_SESSION['success'])):?>
				<div>
						
					<h3>
						<?php echo $_SESSION['success'];
						    unset($_SESSION['success']);
						  ?>
					</h3>

				</div>

			<?php endif ?>

			<?php if(isset($_SESSION['username'])): ?>
				<p> Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
				<p><a href="index.php?logout='1'">Logout</a></p>

  					<?php endif ?>

		</div>
</body>
</html>

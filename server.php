<?php
 	
	session_start();

	$username="";
	$email="";
	$password="";
	$password="";

	$error = array();
	

	$db= mysqli_connect('localhost','jedi','password','a_database');

    
   
	 if(isset($_POST['sign'])){
	 	$username= $_POST['username'];
	 	$email= $_POST['email'];
	 	$password1= $_POST['password1'];
	 	$password2= $_POST['password2'];

 
	 	


	 		if(empty($username)){
	 			array_push($error, "Username is required");
	 		}
	 		if(empty($email)){
	 			array_push($error, "email is required");
	 		}
	 		if(empty($password1)){
	 			array_push($error, "Password is required");
	 		}
	 		

	 		if($password1!=$password2){

	 			array_push($error," passwords dont match!");
	 		}

   	

	 		if(count($error)==0){
	 			$password= md5($password1);

	 			$sql= "INSERT into user (username,email,password) values ('$username','$email','$password')";

	 			mysqli_query($db,$sql);


	 			$_SESSION['username']= $username;
	 			$_SESSION['success'] = "you are now logged in! ";
	 			header('location: signedup.php');
	 		}

	 }	

	 if(isset($_POST['signin'])){

	 	$username= $_POST['username'];
	 	$password= $_POST['password'];

	 	  if(empty($username)){
	 			array_push($error, "Username is required");
	 		}
	 		if(empty($password)){
	 			array_push($error, "Password is required");
	 		}


	 		if(count($error)==0){
	 			$password= md5($password);

	 			$sql= "SELECT * from user where username= '$username' AND password ='$password'";
	 			$result=  mysqli_query($db,$sql);

	 			if(mysqli_num_rows($result)==1){
	 				// log users in
	 				$_SESSION['username']= $username;
	 			$_SESSION['success'] = "you are now logged in! ";
	 			header('location: index.php');   
	 			}
	 			else{
	 				array_push($error, "wrong username/password combination");

	 			}

	 }
	}

	 	// logout

	 if(isset($_GET['logout'])){
	 	session_destroy();
	 	unset($_SESSION['username']);
	 	header("location: signin.php");
	 }
     	
 ?>
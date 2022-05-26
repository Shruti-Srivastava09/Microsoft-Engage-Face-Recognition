<?php
	session_start();
	$username="";
	$email="";
	$errors=array();

	$db=mysqli_connect('localhost','root','','registration');
	if(isset($_POST['register'])){
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$email=mysqli_real_escape_string($db,$_POST['email']);
		$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
		$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
		$photo=mysqli_real_escape_string($db,$_POST['photo']);
		$q1="SELECT * FROM users WHERE username='$username'";
		$q2="SELECT * FROM users WHERE email='$email'";
		$r1=mysqli_query($db,$q1);
		$r2=mysqli_query($db,$q2);
		//ensure that form fields are filled properly
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(mysqli_num_rows($r1)>0){
			array_push($errors,"Username is taken by some other user");
		}
		if(empty($email)){
			array_push($errors,"Email is required");
		}
		if(mysqli_num_rows($r2)>0){
			array_push($errors,"Email is Already registered please login");
		}
		if(empty($password_1)){
			array_push($errors,"Password is required");
		}
		if(empty($photo)){
			array_push($errors,"User Photo is required");
		}
		if($password_1!=$password_2)
		{
			array_push($errors,"The two passwords do not match");
		}

		if(count($errors)==0){
			$password=md5($password_1);
			$sql="INSERT INTO users(username,email,password, photo) VALUES('$username','$email','$password', '$photo')";
			mysqli_query($db,$sql);
			$_SESSION['username']=$username;
			$_SESSION['success']="You are now logged in";
			header('location: index.php');
		}
	}

	if(isset($_POST['login'])){
		$username=mysqli_real_escape_string($db,$_POST['username']);
		$password=mysqli_real_escape_string($db,$_POST['password']);
		$loginpicname=mysqli_real_escape_string($db, $_POST['hiddentextbox']);

		//ensure that form fields are filled properly
		if(empty($username)){
			array_push($errors,"Username is required");
		}
		if(empty($password))
		{
			array_push($errors,"Password is required");
		}
		if(empty($loginpicname))
		{
			array_push($errors,"Please capture a photo first");
		}
		$loginphotopath = "./loginUploadPhoto/".$loginpicname;
		$registerphotopath = "./uploadPhoto/";
		if(count($errors)==0){
			$password=md5($password);
			$query="SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result=mysqli_query($db,$query);
			if(mysqli_num_rows($result)==1){
				// code to match the photo
				while ($row=mysqli_fetch_row($result)) {
    				//printf ("%s %s %s\n",$row[0],$row[1], $row[4]);
					$profilepic = $row[4];
      			}
				$registerphotopath.=$profilepic;
				//echo "$registerphotopath";
			    $output = shell_exec("python photomatcher.py ". " $registerphotopath "." $loginphotopath");				{
				//print $output; 
				//die;
				if ($output == 1) {			
					$_SESSION['username']=$username;
					$_SESSION['success']="You are now logged in";
					header('location: index.php');
				} else {
					array_push($errors,"Photo Authentication Failed");
				}
			}} else {
				array_push($errors,"Wrong username/password combination");
			}
		}
	}





	//logout
	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}
?>
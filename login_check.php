<?php
require_once('connection.php');

$name = $_POST['username'];
$pass = $_POST['password'];

$sql = "SELECT * FROM user WHERE username='$name' AND password='$pass'";
$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) 
{
	while ($row = mysqli_fetch_assoc($result)) 
	{
		$id = $row["id"];
		$email = $row["email"];
		$username = $row["username"];
		session_start();
		$_SESSION['id'] = $id;
		$_SESSION['email'] = $email;
		$_SESSION['username'] = $username;
	}	
	header("Location: welcome.php");
}else{
	echo "Invalid email or password";
}
?>
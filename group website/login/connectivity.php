<?php 
define('DB_HOST', 'localhost'); 
define('DB_NAME', 'project'); 
define('DB_USER','root'); 
define('DB_PASSWORD',''); 

$dbhandle = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD) 
  or die("Unable to connect to MySQL");
echo "Connected to MySQL<br>";
$db=mysqli_select_db($dbhandle,DB_NAME) or die("Failed to connect to MySQL: " . mysql_error()); 
/* $ID = $_POST['user']; $Password = $_POST['pass']; */ 
function SignIn($dbhandle) { 
	session_start(); 
	//starting the session for user profile page 
	if(!empty($_POST['user'])) 
	//checking the 'user' name which is from Sign-In.html, is it empty or have some text 
	{ 
	$query = mysqli_query($dbhandle, "INSERT INTO UserName(UserName,pass) VALUES('$_POST[user]','$_POST[pass]')");
	$query = mysqli_query($dbhandle,"SELECT * FROM UserName where userName = '$_POST[user]' AND pass = '$_POST[pass]'") or die(mysql_error()); 
	$row = mysqli_fetch_array($query) or die(mysql_error()); 
		if(!empty($row['userName']) AND !empty($row['pass'])) {
			 $_SESSION['userName'] = $row['pass']; 
			 echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
		 } else 
		 { echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
		 }
	 } 
 } if(isset($_POST['submit'])) { SignIn($dbhandle); } 
 ?>


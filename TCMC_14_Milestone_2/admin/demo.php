<?php
/*************************************************************************
php easy :: admin login scripts set - Session Version DEMO
==========================================================================
Author:      php easy code, www.phpeasycode.com
Web Site:    http://www.phpeasycode.com
Contact:     webmaster@phpeasycode.com
*************************************************************************/
session_start();
if(!isset($_SESSION['authuser'])){
header("Location: index.php");	
}
?>
<html>
<head>
<title>Admin Page</title>
<style type="text/css">
body {
font-family: "Verdana", sans-serif;
font-size: 9pt;
}
</style>
<body>
<div align="center">
<br>
<h1>Admin Page</h1>
<p>Hello <?=$_SESSION['authuser']?>!</p>
<p>You have successfully logged in.</p>
<br>
<p><a href="index.php?logout">Logout</a></p>
</div>
</body>
</html>

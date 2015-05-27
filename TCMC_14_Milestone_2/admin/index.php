<?php
try {
    // Connect to the SQLite Database.
    $db = new PDO('sqlite:/var/www/html/sqllite/database_tcmc');
    
} catch(Exception $e) {
    die('connection_unsuccessful: ' . $e->getMessage());
}




function loginpage($error) {
	echo "<html>\n<head>\n<title>Admin panel - Please login</title>\n";
	echo "</head>\n<body>\n";
	echo "<table style='width:100%;height:100%;'>\n<tr>\n<td align='center'>\n";
	echo "<form action='" . $_SERVER['REQUEST_URI'] . "' method='post'>\n";
	echo "<table border='1' width='300' cellspacing='0' cellpadding='4'><tr>\n";
	$formtitle = "Admin panel - Please login";
	if($error) $formtitle = "Wrong credentials!";
	echo "<th colspan='2'>" . $formtitle . "</th>\n";
	echo "</tr><tr>\n";
	echo "<td><p><b><label for='username'>Username:</label></b></p></td>\n";
	echo "<td><input type='text' name='username' id='username' size='30'></td>\n";
	echo "</tr><tr>\n";
	echo "<td><p><b><label for='password'>Password:</label></b></p></td>\n";
	echo "<td><input type='password' name='password' id='password' size='30'></td>\n";
	echo "</tr><tr>\n";
	echo "<td><b>Login:</b></td>\n";
	echo "<td><input type='submit' value=' Login &raquo; ' name='login'></td></tr></table></form>\n";
	echo "</td>\n</tr>\n</table>\n</body>\n</html>";
	exit;
}



session_start();


if($_SERVER['QUERY_STRING'] == "logout") {
	unset($_SESSION['authuser']);
	header("Location: " . $_SERVER['PHP_SELF']);
	exit;
}

if(!isset($_SESSION['authuser']) && isset($_POST['login'])) {

		$pdo_object = $db->prepare("select * from users where username = ? and password = ?");
		$pdo_object->execute(array($_POST['username'],$_POST['password']));
		$hcl = $pdo_object->fetchAll(PDO::FETCH_ASSOC);

			if(count($hcl)>0) {
				$_SESSION['authuser'] = $_POST['username'];
				header("Location: demo.php");
				
			}
			else {
				loginpage(true);
				
			}
	
}elseif(!isset($_POST['login'])){
	loginpage(false);
}
// else we enter the restricted area
session_write_close();
?>

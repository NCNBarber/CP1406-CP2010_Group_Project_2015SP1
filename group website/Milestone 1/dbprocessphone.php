<?php
/* This code runs the SQL queries and outputs what happens as a result of the queries.
   It would be possible to have this code set messages in a session variable and pass this on to another page 
   (redirect with the header method) instead of printing the results here. 
   The X option demonstrates this ("silent" delete).
*/
include("dbconnect.php");
$debugOn = true;


?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database Example (Phone Records) - Results Page</title>
</head>

<body>
<h1>Results</h1>
<?php
echo "<h2>Form Data</h2>";

// execute the appropriate query based on which submit button (insert, delete or update) was clicked

if (isset($_REQUEST['submit']) == "Insert Entry")
{
	$sql = "INSERT INTO people (name, phone) VALUES ('$_REQUEST[name]', '$_REQUEST[phone]')";
	echo "<p>Query: " . $sql . "</p>\n<p><strong>"; 
	if ($dbh->exec($sql))
		echo "Inserted $_REQUEST[name]";
	else
		echo "Not inserted"; // in case it didn't work - e.g. if database is not writeable
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
echo "</strong></p>\n";

// Basic select and display all contents from table 



// close the database connection 
$dbh = null;
?>
<p><a href="phone.php">Return to database test page</a></p>
</body>
</html>
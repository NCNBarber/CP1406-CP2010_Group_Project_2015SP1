<?php
include("db/dbconnect.php");
$debugOn = true;
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>PHP SQLite Database(Artist Records) - Results Page</title>
</head>
<body>
<?php echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
?>
<?php
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO artists (name, details, catagory, imageAddress) VALUES ('$_REQUEST[name]', '$_REQUEST[details]', '$_REQUEST[catagory]', '$_REQUEST[name]')"; 
	if ($dbh->exec($sql)) {
		echo "Inserted $_REQUEST[name]";}
	else {
		echo "Not inserted";}
	}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: inc_addArtists.php");
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE artists SET name = '$_REQUEST[name]', details = '$_REQUEST[details]', catagory = '$_REQUEST[catagory]', imageAddress = ''images/artists/' + $_REQUEST[name]'";
	if ($dbh->exec($sql))
		header("Location: inc_addArtists.php");
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
$dbh = null;
?>
<p><a href="../administration.php?page=addArtist.php">Return to database test page</a></p>
</body>
</html>
<?php
include("dbconnect.php");
?>
<?php
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO artists (name, details, catagory, featured, imageAddress) VALUES ('$_REQUEST[name]', '$_REQUEST[details]', '$_REQUEST[catagory]', $_REQUEST[featured], '$_REQUEST[imageAddress]')"; 
	if ($dbh->exec($sql))
		header("Location: administration.php?page=addArtists");
	}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM artists WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: administration.php?page=addArtists");
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE artists SET name = '$_REQUEST[name]', details = '$_REQUEST[details]', catagory = '$_REQUEST[catagory]', $_REQUEST[featured], imageAddress = '$_REQUEST[imageAddress]' WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: administration.php?page=addArtists");
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
$dbh = null;
?>
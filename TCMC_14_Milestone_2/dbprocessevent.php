<?php
include("dbconnect.php");
?>
<?php
if ($_REQUEST['submit'] == "Insert Entry")
{
	$sql = "INSERT INTO events (name, artist, date, time, details, catagory, imageAddress) VALUES ('$_REQUEST[name]', '$_REQUEST[artist]', '$_REQUEST[date]', '$_REQUEST[time]', '$_REQUEST[details]', '$_REQUEST[catagory]', '$_REQUEST[imageAddress]')"; 
	if ($dbh->exec($sql))
		header("Location: administration.php?page=addEvents");
	}
else if ($_REQUEST['submit'] == "Delete Entry")
{
	$sql = "DELETE FROM events WHERE id = '$_REQUEST[id]'";
	if ($dbh->exec($sql))
		header("Location: administration.php?page=addEvents");
}
else if ($_REQUEST['submit'] == "Update Entry")
{
	$sql = "UPDATE events SET name = '$_REQUEST[name]', artist = '$_REQUEST[artist]', date = '$_REQUEST[date]', time = '$_REQUEST[time]', details = '$_REQUEST[details]', catagory = '$_REQUEST[catagory]', imageAddress = $_REQUEST[imageAddress]'";
	if ($dbh->exec($sql))
		header("Location: administration.php?page=addEvents");
}
else {
	echo "This page did not come from a valid form submission.<br />\n";
}
$dbh = null;
?>
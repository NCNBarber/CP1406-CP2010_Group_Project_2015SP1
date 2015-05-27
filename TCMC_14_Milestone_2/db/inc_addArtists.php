<?php include("dbconnect.php") ?>

<h1>Add new Artist</h1>
<form id="insert" name="insert" method="post" action="db/dbprocessartist.php">
<fieldset class="subtleSet">
    <h2>Insert new artist record:</h2>
    <p>
      <label for="name">Name: </label>
      <input type="text" name="name" id="name">
    </p>
    <p>
      <label for="details">Details: </label>
      <input type="text" name="details" id="details">
    </p>
    <p>
      <label for="catagory">Catagory: </label>
      <input type="text" name="catagory" id="catagory">
    </p>
    <p>
      <input type="submit" name="submit" id="submit" value="Insert Entry">
    </p>
</fieldset>
</form>

<fieldset class="subtleSet">
<h2>Current data:</h2>
<?php
$sql = "SELECT * FROM artists";
foreach ($dbh->query($sql) as $row) {
?>
<form id="deleteForm" name="deleteForm" method="post" action="db/dbprocessartist.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <input type='text' name='details' value='$row[details]' /> <input type='text' name='catagory' value='$row[catagory]' />\n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
<input type="submit" name="submit" value="X" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
$dbh = null;
?>
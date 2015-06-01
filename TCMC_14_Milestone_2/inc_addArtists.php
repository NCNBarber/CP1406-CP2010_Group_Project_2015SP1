<?php include("dbconnect.php") ?>

<h1>Add new Artist</h1>
<form id="insert" name="insert" method="post" action="dbprocessartist.php">
<fieldset class="subtleSet">
    <h2>Insert new artist record:</h2>
    <p>
    	<label for="name">Name: </label>
        <input type="text" name="name" id="name">
    </p>
    <p>
    	<label for="details">Details: </label>
        <textarea name="details" id="details"></textarea>
    </p>
    <p>
    	<label for="catagory">Catagory: </label>
        <input type="text" name="catagory" id="catagory">
    </p>
    <p>
    	<label for="featured">Featured Artist: </label>
        <input type="checkbox" name="featured" id="featured" value="1" />
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
<form id="deleteForm" name="deleteForm" method="post" action="dbprocessartist.php">
<?php
	echo "<input type='text' name='name' value='$row[name]' /> <textarea name='details' value='$row[details]'></textarea> <input type='text' name='catagory' value='$row[catagory]' /> <input type='checkbox' name='featured' value='$row[featured]' />\n";
	echo "<input type='hidden' name='id' value='$row[id]' />";
?>
<input type="submit" name="submit" value="Update Entry" />
<input type="submit" name="submit" value="Delete Entry" class="deleteButton">
</form>
<?php
}
echo "</fieldset>\n";
$dbh = null;
?>
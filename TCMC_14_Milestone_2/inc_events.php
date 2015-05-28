<?php include("db/dbconnect.php"); ?>

<div id="contentContainer">
    <?php $sql = "SELECT * FROM events";
	foreach ($dbh->query($sql) as $row) {
		echo "<div class='eventContainer'>";
		if ($row[imageAddress] != "None") {
			echo "<img class='eventImageContainer' src='$row[imageAddress]' alt='$row[name]'></img>";
		}
		echo "<h2>$row[name]</h2>";
		echo "<p>$row[details]</p>";
		if ($row[imageAddress] != "None") {
			echo "<div class='clearFloat'>";
			echo "</div>";
		}	
		echo "</div>";
	};
	?>
</div>
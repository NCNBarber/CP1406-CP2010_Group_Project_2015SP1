<?php include("db/dbconnect.php"); ?>

<div id="contentContainer">
	<h1>Musicians</h1>
    <?php $sql = "SELECT * FROM artists WHERE featured='1'";
	foreach ($dbh->query($sql) as $row) {
		echo "<h2 class='centreText'>Featured Artist</h2>";
		echo "<div class='artistContainer'>";
		if ($row[imageAddress] != "None") {
			echo "<img class='artistImageContainer' src='$row[imageAddress]' alt='$row[name]'></img>";
		}
		echo "<h2>$row[name]</h2>";
		echo "<p>$row[details]</p>";
		if ($row[imageAddress] != "None") {
			echo "<div class='clearFloat'>";
			echo "</div>";
		}
		echo "</div>";
		echo "<br>";
	};
	?>	
    <?php $sql = "SELECT * FROM artists WHERE featured='0'";
	foreach ($dbh->query($sql) as $row) {
		echo "<div class='artistContainer'>";
		if ($row[imageAddress] != "None") {
			echo "<img class='artistImageContainer' src='$row[imageAddress]' alt='$row[name]'></img>";
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
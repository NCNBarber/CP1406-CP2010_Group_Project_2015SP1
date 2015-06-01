<?php include("dbconnect.php"); ?>

<div id="contentContainer">
	<h1>Upcoming Events</h1>
    <?php $sql = "SELECT * FROM events WHERE featured='1'";
	foreach ($dbh->query($sql) as $row) {
		echo "<h2 class='centreText'>Featured Event</h2>";
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
		echo "<br>";
	};
	?>	
    <?php $sql = "SELECT * FROM events WHERE featured='0'";
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
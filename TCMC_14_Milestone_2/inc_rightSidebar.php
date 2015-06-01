<?php include("dbconnect.php"); ?>

<div class="sidebar" id="rightSidebar">
    <?php $sql = "SELECT * FROM events WHERE featured='0'";
		$randomEventIds = array();
		$numberOfEvents = 0;
		foreach ($dbh->query($sql) as $row) {
			$numberOfArtists++;
		}
		foreach ($dbh->query($sql) as $row) {
				echo "<div class='sidebarEventContainer'>";
				if ($row[imageAddress] != "None") {
					echo "<img class='sidebarEventImageContainer' src='$row[imageAddress]' alt='$row[name]'></img>";
				}
				echo "<p class='centreText'>$row[name]</p>";
				echo "</div>";
		}
	?>
</div>
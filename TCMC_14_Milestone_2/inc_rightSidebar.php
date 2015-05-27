<?php include("db/dbconnect.php"); ?>

<div class="sidebar" id="rightSidebar">
    <?php $sql = "SELECT * FROM artists";
		$randomIds = array();
		$numberOfArtists = 0;
		foreach ($dbh->query($sql) as $row) {
			$numberOfArtists++;
		}
		for ($i = 0; $i <= 3; $i++) {
			do {
				$randomId = rand(0, $numberOfArtists);
			} while (in_array($randomId, $randomIds));
			array_push($randomIds, $randomId);
		}
		foreach ($dbh->query($sql) as $row) {
			if (in_array($row[id], $randomIds)) {
				echo "<div class='sidebarArtistContainer'>";
				if ($row[imageAddress] != "None") {
					echo "<img class='sidebarArtistImageContainer' src='$row[imageAddress]' alt='$row[name]'></img>";
				}
				echo "<p class='centreText'>$row[name]</p>";
			}	
			echo "</div>";
		};
	?>
</div>
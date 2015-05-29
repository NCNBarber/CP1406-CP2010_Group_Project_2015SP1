<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Template Page</title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css">
<script src="js/adjustColumnHeights.js"></script>
</head>

<body>
<div id="container">
    	<?php include("inc_header.php"); ?>
        <?php include("inc_navigation.php"); ?>
        <?php include("inc_leftSidebar.php"); ?>
        <?php if ($_GET[page] == "home" or $_GET[page] == "" ) {
			include("inc_home.php");}
		else if ($_GET[page] == "communityNotices") {
			include("inc_bulletinBoard.php");}
		else if ($_GET[page] == "events") {
			include("inc_events.php");}
		else if ($_GET[page] == "membership") {
			include("inc_membership.php");}
		else if ($_GET[page] == "musos") {
			include("inc_musos.php");}
		else if ($_GET[page] == "sponsors"){
			include("inc_sponsors.php");}
		else {
			echo '<div id="contentContainer"><p>Unknown Page.</p></div>';} ?>
        <?php include("inc_rightSidebar.php"); ?>
        <?php include("inc_footer.php"); ?>
</div>
</body>
</html>
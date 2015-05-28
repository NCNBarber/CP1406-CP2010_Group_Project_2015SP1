<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<link href="styles/mainstyles.css" rel="stylesheet" type="text/css">
<script src="js/adjustColumnHeights.js"></script>
</head>

<body>
<div id="container">
    	<?php include("inc_header.php"); ?>
        <?php include("inc_adminNavigation.php"); ?>
        <?php include("inc_leftSidebar.php"); ?>
        <div id="adminContentContainer">
        	<?php if ($_GET[page] == "addArtists") {
				include("inc_addArtists.php");
                echo "<p>Hello World!</p>";} ?>
        </div>
        <?php include("inc_adminFooter.php"); ?>
</div>
</body>
</html>
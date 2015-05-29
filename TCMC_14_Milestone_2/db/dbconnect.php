<?php
if (($_GET[page] == "addArtists") or ($_GET[page] == "addEvents")) {
	try {
    	$dbh = new PDO("sqlite:db/tcmcdatabase.sqlite"); 
	}
	catch(PDOException $e) {
    	echo $e->getMessage();
	}
}
else {
	try {
    	$dbh = new PDO("sqlite:tcmcdatabase.sqlite"); 
	}
	catch(PDOException $e) {
    	echo $e->getMessage();
	}
}
?>
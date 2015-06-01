<?php
try {
    $dbh = new PDO("sqlite:database/tcmcdatabase.sqlite"); 
}
catch(PDOException $e) {
    echo $e->getMessage();
}
?>
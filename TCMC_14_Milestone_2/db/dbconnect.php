<?php
try {
    $dbh = new PDO("sqlite:db/tcmcdatabase.sqlite"); 
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>
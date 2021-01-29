<?php
$hostname='localhost';

$username='root';

$password='';

$databasename='scrabble';

$connection= mysqli_connect($hostname,$username,$password,$databasename) or exit("Unable to connect to database!");

?>
<?php 

$user = 'root';
$pass = '';
$db = 'fitness';

$db = new mysqli("localhost", $user, $pass, $db) or die("Unable to connect");

echo"Congrats...";

?>
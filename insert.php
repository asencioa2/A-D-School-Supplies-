<?php

$dbServername = 'localhost';
$dbUsername = 'asencia2_Dan';
$dbPassword = 'AlphabetSoup123';
$dbName = 'asencia2_website';

$mysqli = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if ($mysqli === false) {
    die("Connection failed: ".mysqli_connect_error());
}
?>

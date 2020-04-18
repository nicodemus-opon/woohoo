<?php
$servername = "localhost";
$username = "mobisoko_ahidi";
$password = "Black11060!";
$dbname = "mobisoko_ahidi";
//$dbport = 3306;

$con = mysqli_connect($servername, $username, $password,$dbname);
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
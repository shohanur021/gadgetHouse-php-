<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "GADGETHOUSE";

$link = mysqli_connect($host, $user, $password, $db);
$sql = "SELECT * FROM carousel";
$result = mysqli_query($link, $sql);


$sql_2 = "SELECT * FROM mobile";
$mobiles = mysqli_query($link, $sql_2);

$sql_3 = "SELECT * FROM headphone";
$headphones = mysqli_query($link, $sql_3);

$sql_4 = "SELECT * FROM smartwatch";
$watches = mysqli_query($link, $sql_4);

session_start();
?>



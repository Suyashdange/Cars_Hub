<?php

$hn= "localhost:3307";
$un= "root";
$passw = "";
$db = "carshub";

$con = mysqli_connect($hn, $un, $passw, $db);

if (!$con) {
	die ("Connection failed!".mysqli_error($con));
}
?>
<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "gadgetman";

$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Database Tidak Terkoneksi, Error");
}
?>
<<?php 

$serverName="localhost";
$dBUser="root";
$dBPass="";
$dBName="login_sample_db";

$conn = mysqli_connect("$serverName","$dBUser","$dBPass","$dBName");

if (!$conn) {

    die("connection failed :" . mysqli_connect_error());
}
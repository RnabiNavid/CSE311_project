<?php 

$serverName="localhost";
$dBUser="root";
$dBPass="";
$dBName="ecommeceapp";

$conn = mysqli_connect("$serverName","$dBUser","$dBPass","$dBName");

if (!$conn) {

    die("connection failed :" . mysqli_connect_error());
}
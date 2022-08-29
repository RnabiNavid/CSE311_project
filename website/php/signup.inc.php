<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$Uname = $_POST["username"];
$Email = $_POST["email"];
$Address = $_POST["address"];
$Pwd = $_POST["pass"];
$RepeatPwd = $_POST["Rpass"];



require_once'../html/conn.php';
require_once'functions.inc.php';

   if (emptyInputSignup($Uname,$Email,$Address,$Pwd,$RepeatPwd) !== false) {
	header("location: ../html/login.php?error=emptyinput");
	exit();
   }

   if (invalidUname($Uname) !== false) {
	header("location: ../html/login.php?error=invalidUname");
	exit();
   }

    if (invalidEmail($Email) !== false) {
	header("location: ../html/login.php?error=invalidEmail");
	exit();
   }
   
   if (PwdMatch($Pwd,$RepeatPwd) !== false) {
	header("location: ../html/login.php?error=Passwordsnotmatch");
	exit();
   }

   if (UnameExists($conn,$Uname,$Email) !== false) {
	header("location: ../html/login.php?error=usernameExist");
	exit();
   }

createUser($conn,$Uname,$Email,$Address,$Pwd);
}
else{
       
      
  	header("location: ../html/login.php");
  	exit();
   }
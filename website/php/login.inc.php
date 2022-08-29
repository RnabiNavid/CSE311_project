<?php

if (isset($_POST["submit"])) {
 
 $username=$_POST["usrname"];
 $Pwd=$_POST["pas"];

require_once'../html/conn.php';
require_once'../php/function.inc.php';



 if (emptyInputLogin($username,$Pwd) !== false) {
  header("location: ../html/login.php?error=emptyinput");
  exit();
   }

    if (invalidUname($Uname) !== false) {
  header("location: ../html/login.php?error=invalidUname");
  exit();
   }

loginUser($conn,$username,$Pwd);

}
else{
  header("location: ../html/login.php");
  exit();
  }

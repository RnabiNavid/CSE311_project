

<?php


function emptyInputSignup($Uname,$Email,$Address,$Pwd,$RepeatPwd)
      {
	    $result;
	    if(empty($Uname)||empty($Email)||empty($Address)||empty($Pwd)||empty($RepeatPwd)){
              $result=true;
	    }
        else{
            $result=false;
        }
  return $result;
}


function invalidUname($Uname){
	    $result;
	    if(!preg_match("/^[a-zA-Z0-9]*$/", $Uname)){
              $result=true;
	    }
        else{
            $result=false;
        }

  return $result;
}


function invalidEmail($Email){
	    $result;
	    if(!filter_var($Email,FILTER_VALIDATE_EMAIL)){
              $result=true;
	    }
        else{
            $result=false;
        }

  return $result;
}


function PwdMatch($Pwd,$RepeatPwd){
	    $result;
	    if($Pwd!==$RepeatPwd){
              $result=true;
	    }
        else{
            $result=false;
        }

  return $result;
}


function UnameExists($conn,$Uname,$Email){
	    $sql="SELECT* FROM usertable WHERE user_name=? OR email=?;";
	    $stmt=mysqli_stmt_init($conn);
	  

	    if(!mysqli_stmt_prepare($stmt,$sql)){
  	header("location: ../html/login.php?error=stmtfailed1");
          exit();
	    }
        mysqli_stmt_bind_param($stmt,"ss",$Uname,$Email);
        
        
        mysqli_stmt_execute($stmt);

 $resultData=mysqli_stmt_get_result($stmt);

 if(mysqli_fetch_assoc($resultData)){
return $row;

 }
 else{
 	$result=false;
 	return $result;
 }
 mysqli_stmt_close($stmt);
}





function createUser($conn,$Uname,$Email,$Address,$Pwd){
        $sql="INSERT INTO usertable (user_name,email,address,password) VALUES(?,?,?,?)";
        $stmt=mysqli_stmt_init($conn);
 

        if(!mysqli_stmt_prepare($stmt,$sql)){
    header("location: ../html/login.php?error=stmtfailed");
          exit();
        }
      
      $hashedPWD = password_hash($Pwd, PASSWORD_DEFAULT);

        mysqli_stmt_bind_param($stmt,'ssss',$Uname,$Email,$Address,$hashedPWD);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../html/login.php?error=none");
        exit();

}
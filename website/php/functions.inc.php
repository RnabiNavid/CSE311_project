

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

}
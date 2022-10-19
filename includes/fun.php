<?php 



 function Clean($input){

    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);

    return $input;
  }



# Validate Inputs .... 
function Validate($input,$flag,$length=3){

    $status = true;
    switch ($flag) {
        case 1:
            if(empty($input)){
                $status = false;
            }
            break;
        
        case 2: 
            if(strlen($input) < $length){
                $status = false;
            }
            break;  
       

    }

    return $status;
}






 function urll($dis){

  return   $txt = "http://".$_SERVER['HTTP_HOST']."/Lab5-php/".$dis;


 }

<?php
session_start();



function errors(){
if(isset($_SESSION["errors"])){

    $errors = $_SESSION["errors"];

    // clear message after use 
    $_SESSION["errors"] = null;
    return $errors; 
   }
}

function getpost(){

      
	$postarr = $_SESSION["postarr"];

    // clear message after use 
    $_SESSION["postarr"] = null;
    return $postarr; 
}

function  getsussecc(){


	$successarr = $_SESSION["success"];

    // clear message after use 
    $_SESSION["success"] = null;
    return $successarr; 


}



function  get_log_errors(){


    $login_errors  = $_SESSION["login_errors"];

    // clear message after use 
    $_SESSION["login_errors"] = null;
    return $login_errors; 


}


function  get_log_post(){


   $login_postarr  =  $_SESSION["login_postarr"];

    // clear message after use 
    $_SESSION["login_postarr"] = null;
    return $login_postarr; 


}

function get_log_fail(){


   $log_fail  = $_SESSION["log_fail"];

    // clear message after use 
    $_SESSION["log_fail"] = null;
    return $log_fail; 


}

function get_userdetails(){

    
}
?>
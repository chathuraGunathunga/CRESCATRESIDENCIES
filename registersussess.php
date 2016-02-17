<?php
require_once("_inc/session.php");
require_once("_inc/functions.php");
require_once("_inc/validation_functions.php");

echo "Registration success";


 $successarr = getsussecc();

 if(!empty($successarr)){


 echo "<pre>";
	

	print_r($successarr);


echo "<pre/>";

}






?>
<?php
require_once("_inc/session.php");
require_once("_inc/db_connection.php");
require_once("_inc/functions.php");
require_once("_inc/validation_functions.php");

echo "<pre>";
	

	print_r($_POST);


echo "<pre/>";


if(isset($_POST['submit'])){
		//POST request
		echo"form was submitted.<br/>";
	//set default values using ternary operator
	// boolean_test ? value_if_true : value_if_false
	$arrivale_date = isset($_POST["arrivale_date"]) ? trim($_POST["arrivale_date"]) : "";
	$departure_date = isset($_POST["departure_date"]) ? trim($_POST["departure_date"]) : "";

	echo $arrivale_date."<br/>";
	echo$departure_date."<br/>";

	echo "<hr/>";

//validation;
//validate presences 
$required_fields = array(
		"arrivale_date" =>$arrivale_date,
		"departure_date" =>$departure_date
		);

validate_presences($required_fields);
//validate username
//validate_name("username");

//check_date_format("arrivale_date");//date check




 if(!empty($errors)){
 	$_SESSION["booking_errors"] = $errors;
 	$_SESSION["errors"] = $errors;
 	//$_SESSION["login_postarr"] = $_POST;
 	
 	
 	redirect_to("reservation.php");
 	echo "Form have errors";
 	echo "<pre>";
	

 print_r($errors);


  echo "<pre/>";

 }else {

 
 	$_SESSION["arrivale_date"] = $arrivale_date;
 	$_SESSION["departure_date"] =$departure_date;

 		redirect_to("reservation.php");
 }
 echo "Form have no errors";
}
// $errors = array();
// $arrivale_date = '2012-02-28';

// function validateDate($date, $format = 'Y-m-d H:i:s')
// {
//     $d = DateTime::createFromFormat($format, $date);
//     return $d && $d->format($format) == $date;
// }

// if(validateDate($arrivale_date, 'Y-m-d')){

// 	$errors["arrivale_date"] = "Please insert corret date Format : YYY-M-D ex:-year-1-1";
// }

// echo "<pre>";
	

// 	print_r($errors);


// echo "<pre/>";



?>
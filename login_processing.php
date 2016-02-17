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
	$username = isset($_POST["username"]) ? trim($_POST["username"]) : "";
	$password = isset($_POST["password"]) ? trim($_POST["password"]) : "";

	echo $username."<br/>";
	echo $password."<br/>";

	echo "<hr/>";

//validation;
//validate presences 
$required_fields = array(
		"username" =>$username,
		"password" =>$password
		);

validate_presences($required_fields);
//validate username
//validate_name("username");




 if(!empty($errors)){
 	$_SESSION["login_errors"] = $errors;
 	$_SESSION["login_postarr"] = $_POST;
 	
 	
 	redirect_to("index.php");
 	echo "Form have errors";

 }else{

 	echo"form has no erros.<br/>";
 	//Attempt Login
	//$username = $_POST["username"];
	//$password = $_POST["password"];
	$found_user = attempt_login($username,$password);

	if($found_user){

		//Success
		//Mark user as logged in
		$_SESSION["user_id"] = $found_user["id"];
		$_SESSION["user_name"] = $found_user["name"];
		$_SESSION["user_email"] = $found_user["email"];

		        //$username_upper = strtoupper($username);
		if( ( $found_user["name"]   == "Admin") || ($found_user["name"]  == "admin")  )
		{

			echo"found user is admin.<br/>";

		}else{

			echo"found user is not admin.<br/>";
			 $found_user_details = logged_user_arrival_departur_date($found_user["id"]);
			$_SESSION["arrivale_date_details"] = $found_user_details["arrivale_date"];
			$_SESSION["departure_date_details"] = $found_user_details["departure_date"];
			redirect_to("reservation.php");
		}
		

		echo"user found.<br/>";
		//redirect_to("admin.php");
	}else{

		echo"user not found";
		//Failure
		$_SESSION["log_fail"] = "Username or password not found.";
		redirect_to("index.php");
	}
 
	
	
	}
 	
 }else{
		//GET request
  
    }

?>
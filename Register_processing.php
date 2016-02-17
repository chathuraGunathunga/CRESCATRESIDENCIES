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
	$name = isset($_POST["name"]) ? trim($_POST["name"]) : "";
	$email = isset($_POST["email"]) ? trim($_POST["email"]) : "";
	$setpassword = isset($_POST["setpassword"]) ? trim($_POST["setpassword"]) : "";
	$repassword = isset($_POST["re-enterpassword"]) ? trim($_POST["re-enterpassword"]): "";
	$subcribe = isset($_POST["subcribe"]) ? trim($_POST["subcribe"]) : "";

	echo $name."<br/>";
	echo $email."<br/>";
	echo $setpassword."<br/>";
	echo $repassword."<br/>";
	echo $subcribe."<br/>";

	echo "<hr/>";

//validation;
//validate presences 
$required_fields = array(
		"name" => $name ,
		"email" =>$email, 
	    "setpassword" =>$setpassword, 
	    "re-enterpassword" =>$repassword, 
		"subcribe" =>$subcribe
		);

validate_presences($required_fields);
//validate name
validate_name("name");
//validate email
validate_eamil("email");
//checke the email already exits
find_username_exit_or_not("email");
//compare password
validate_renterpassword("setpassword","re-enterpassword");
//validate password length
$fields_with_min_lengths = array("setpassword" => 3);
validate_min_lengths($fields_with_min_lengths);



 if(!empty($errors)){
 	$_SESSION["errors"] = $errors;
 	$_SESSION["postarr"] = $_POST;
 	
 	echo "Form have errors";
 	redirect_to("index.php");

 }else{

 	echo"form has no erros";
 	//password encrypt
 	$hashed_password = password_encrypt($setpassword);
 	//database insert query;

 	$query = "INSERT INTO REGISTRATION( ";
	$query .= " name,email,subscribe,hashed_password ";
	$query .=") VALUES ( " ;
	$query .=" '{$name}','{$email}','{$subcribe}','{$hashed_password}' ";
	$query .=") ";

	$result = mysqli_query($connection,$query);
	mysqli_close($connection);

	if($result){

	//Success
	$_SESSION["success"] = $_POST;
 	redirect_to("index.php");
 
	
	
	}
 	
 }

 	


	

}else{
		//GET request
  
    }

?>
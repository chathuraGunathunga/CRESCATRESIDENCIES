<?php

$errors = array();

function fieldname_as_text($fieldname){

	$fieldname = str_replace("_", " ", $fieldname);
	$fieldname = ucfirst($fieldname);
	return 	$fieldname;


}

//validate presence
function has_presence($value){
return isset($value) && $value !== "";
}


function validate_presences($required_fields){
	global $errors;
	//$errors = array();
	
	//$required_fields = array("name","email","setpassword","repassword","subcribe");
	foreach ($required_fields as $field =>$value) {
		//$value = trim($_POST[$field]);
		//$value =$required_fields[$key];
		if(!has_presence($value)){

		$errors[$field] = fieldname_as_text($field). " can't be blank";

		}/*else{
		$errors[$field] = null;	
		}*/
	}
}


//validate password
function has_min_length($value,$max){
return strlen($value) >= $max;
}

function validate_min_lengths($fields_with_max_lengths)
{
	global $errors;
	//Using an assoc. array
	   foreach ($fields_with_max_lengths as $field => $max) {
	   $value = trim($_POST[$field]);
		if (!has_min_length($value,$max)){

	 		$errors[$field] = $field." is too samll";
		}
	}
}

//validate name 
function validate_name($field){
		global $errors;
		 $value = trim($_POST[$field]);
	//$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$value)) {
  
	 $errors[$field] = "Only letters and white space allowed"; 
}
}

//validate email addres
function validate_eamil($field){
		global $errors;
		$value = trim($_POST[$field]);
if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {

  	$errors[$field] = "Please insert the correct email"; 

	}

}


function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}

function check_date_format($field){
		global $errors;
		$date_value = $_POST[$field];
	if(validateDate($date_value, 'Y-m-d')){

	$errors[$field] = "Please insert corret date Format : YYY-M-D ex:-year-1-1";
}


}

function comparepassword($setpas ,$reset){

	return $setpas === $reset;
}



function validate_renterpassword($fieldsetpas,$fieldreset){
	global $errors;
	$setpas = trim($_POST[$fieldsetpas]);
	$reset  = trim($_POST[$fieldreset]);

	if (!comparepassword($setpas,$reset)) {

		$errors[$fieldreset] = "Re-enterd password not match";
	}
		//$value =$required_fields[$key];
		/*if(!has_presence($value)){

		$errors[$field] = $field. " can't be blank";

		}else{
		$errors[$field] = null;	
		}*/
	
}
function find_username_exit_or_not($field){
		global $connection;
		global $errors;

		$username= trim($_POST[$field]);
		$safe_username = mysqli_real_escape_string($connection,$username);

			$query = "SELECT * ";
			$query .= "FROM REGISTRATION ";
			$query .= "WHERE email = '{$safe_username}' ";
			$query .= "LIMIT 1";
			$username_set = mysqli_query($connection,$query);
			$username_count = mysqli_num_rows($username_set);
			if( $username_count == 1){

				$errors[$field] = "e-mail already exist";
				
			}
		}

function password_encrypt($password){

           $hash_format = "$2y$10$";// Tells PHP to use Blowfish with a cost of 10
           $salt_length = 22;// Blowfish salts should be 22-characters or more 
           $salt = generate_salt($salt_length);
           $format_and_salt = $hash_format . $salt;

           $hash = crypt($password,$format_and_salt);
           return $hash; 

	}

function generate_salt($length){
		//Not 100% unique, not 100% random, but good enough for salt
		//MD5 return 32 characters 
		$unique_random_string = md5(uniqid(mt_rand(),true));

		//Valid characters for a salt are [a-zA-Z0-9./]
		$base64_string = base64_encode($unique_random_string);

		//But not '+' which is valid in base64 encoding
		$modified_base64_string = str_replace('+','.',$base64_string);

		//Truncate string to the correct length
		$salt = substr($modified_base64_string,0,$length);

		return $salt;



	}


?>
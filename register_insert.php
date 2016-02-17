<?php 
//1. Create a database connection
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "CRESCAT_RESIDENCIES";
$connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
//Test if connetion occurred.
if(mysqli_connect_errno()){

	die("Database connection failed: ".
			mysqli_connect_error().
			"(". mysqli_connect_errno().")"
		);


}

?>
<?php 
//Oftn these are from values in $_POST
// $menu_name = "Edit me";
// $position  = 4;
// $visible   = 1;

$name = "Edit me";
$email = "test@mail.com";
$setpassword = "123";
$subcribe = "1";


// $subject_set = find_all_subjects(false);
// $subject_count = mysqli_num_rows($subject_set)


	//function find_admin_by_username($username){
		//global $connection;

		$safe_username = mysqli_real_escape_string($connection,$email);

			$query = "SELECT * ";
			$query .= "FROM REGISTRATION ";
			$query .= "WHERE email = '{$safe_username}' ";
			$query .= "LIMIT 1";
			$username_set = mysqli_query($connection,$query);
			$username_count = mysqli_num_rows($username_set);
			if( $username_count == 1){

				echo "User name already exist";
			}
		}
	// 		confirm_query($admin_set);
	// 		if($admin = mysqli_fetch_assoc($admin_set)){
	// 			return $admin;
	// 		} else {

	// 			return null;
	// 		}



	// }




// 	$query = "INSERT INTO REGISTRATION( ";
// 	$query .= " name,email,subscribe,hashed_password ";
// 	$query .=") VALUES ( " ;
// 	$query .=" '{$name}','{$email}','{$subcribe}','{$setpassword}' ";
// 	$query .=") ";

// $result = mysqli_query($connection,$query);

if($username_set){

	//Success
	//redirect_to("somepage.php");
	echo"Success!";
	
}else{
	// Failure
	// $message = "Subject creation failed";
	die("Database query failed.".mysqli_error($connection));
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Databases</title>
</head>
<body>

</body>
</html>


<?php 
//5. Close database connection
mysqli_close($connection);

?>
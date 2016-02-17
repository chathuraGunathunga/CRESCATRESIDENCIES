<?php
require_once("_inc/session.php");
require_once("_inc/db_connection.php");
require_once("_inc/functions.php");
echo "<pre>";
	

	print_r($_POST);


echo "<pre/>";



	$user_id = $_SESSION["user_id"];
	$arrivale_date = $_POST["arrivale_date"]; 
	$departure_date = $_POST["departure_date"];

	$_SESSION["arrivale_date_details"] = null; 
    $_SESSION["departure_date_details"] = null; 
              
    $username =  $_SESSION["user_name"];
    $user = find_user_by_user_id_ADMIN_CONFIRM_BOOKED($user_id);

    if($user){
			//found admin, now check password 
			//redirect_to("errortest.php");
			$query 	= "UPDATE ADMIN_CONFIRM_BOOKED SET ";
			$query .= "departure_date = '{$departure_date}', ";
			$query .= "arrivale_date = '{$arrivale_date}' ";
			$query .= "WHERE id = {$user_id}";
			$result = mysqli_query($connection,$query);
			mysqli_close($connection);
			if($result){

	//Success
 				
				$_SESSION["admin_confirm_booking"] = "Thank you for choosing us again Next 24 hour we will confirm your booking details to your mail ";
 				redirect_to("reservation.php");
 
	
	
					}

			}else{

	$_SESSION["admin_confirm_booking"] = "Next 24 hour we will confirm your booking details to your mail ";

	$query = "INSERT INTO ADMIN_CONFIRM_BOOKED( ";
	$query .= " user_id,arrivale_date,departure_date ";
	$query .=") VALUES ( " ;
	$query .=" '{$user_id}','{$arrivale_date}','{$departure_date}' ";
	$query .=") ";

	$result = mysqli_query($connection,$query);
	mysqli_close($connection);

	if($result){

	//Success
 	redirect_to("reservation.php");
 
	
	
	}
}

?>
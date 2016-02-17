<?php
function redirect_to($new_location){
	header("Location: ".$new_location);
	exit;
	}

	function form_errors($errors = array()){
		$output = "";
	if(!empty($errors)){

		$output .= "<div class=\"errors\">";
		$output .= "Please fix the following errors:";
		$output .= "<ul>";
		foreach ($errors as $key => $error) {
		   $output .="<li>{$error}</li>";
		}
		$output .="</ul>";
		$output .="</div>";
	}
	return $output;

}

	function confirm_query($result_set){
		if(!$result_set){
			die("Database query failed");
		}
	}

 function find_user_by_username($username){
		global $connection;

		$safe_username = mysqli_real_escape_string($connection,$username);

			$query = "SELECT * ";
			$query .= "FROM REGISTRATION ";
			$query .= "WHERE email = '{$safe_username}' ";
			$query .= "LIMIT 1";
			$user_set = mysqli_query($connection,$query);
			confirm_query($user_set);
			if($user = mysqli_fetch_assoc($user_set)){
				return $user;
			} else {

				return null;
			}



	}

	 function find_user_by_user_id_ADMIN_CONFIRM_BOOKED($user_id){
		global $connection;

		$safe_username = mysqli_real_escape_string($connection,$user_id);

			$query = "SELECT * ";
			$query .= "FROM ADMIN_CONFIRM_BOOKED ";
			$query .= "WHERE user_id =  {$safe_username} ";
			$query .= "LIMIT 1";
			$user_set = mysqli_query($connection,$query);
			confirm_query($user_set);
			if($user = mysqli_fetch_assoc($user_set)){
				return $user;
			} else {

				return null;
			}



	}





function password_check($password, $existing_hash){
		//exisiting hash contains format and salt at start 

		$hash = crypt($password,$existing_hash);

		if($hash === $existing_hash){

			return true;
		}else{

			return false;
		}



	}

	function attempt_login($username,$password){

		$user = find_user_by_username($username);
		if($user){
			//found admin, now check password 
			if(password_check($password,$user["hashed_password"])){
				//password matches
				return $user;
			}

		}else{
			// admin not found

			return false;

		}


	}

	
	function logged_in(){
		return isset($_SESSION["user_id"]);

	}

	function confirm_logged_in(){

	if(!logged_in()){

  		redirect_to("index.php");
	}
}

function logged_user_arrival_departur_date($userid){
	global $connection;

		$safe_userid = mysqli_real_escape_string($connection,$userid);

			$query = "SELECT * ";
			$query .= "FROM ADMIN_CONFIRM_BOOKED ";
			$query .= "WHERE user_id = {$safe_userid} ";
			$query .= "LIMIT 1";
			$user_set = mysqli_query($connection,$query);
			confirm_query($user_set);
			if($user = mysqli_fetch_assoc($user_set)){
				return $user;
			} else {

				return null;
			}


}

?>
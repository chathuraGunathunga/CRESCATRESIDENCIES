<?php 
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","CRESCAT_RESIDENCIES");
//1. Create a database connection
$connection = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
//Test if connetion occurred.
if(mysqli_connect_errno()){

	die("Database connection failed: ".
			mysqli_connect_error().
			"(". mysqli_connect_errno().")"
		);


}

?>
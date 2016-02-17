<?php
if(isset($_POST['submit'])){

	$file = "userseleceddate.json";
	$json_string = json_encode($_POST,JSON_PRETTY_PRINT);
	file_put_contents($file, $json_string,FILE_APPEND);
	//header('Location:thanks.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<link rel="stylesheet" type="text/css" href="datepicker/css/jquery.datetimepicker.css"/>
<style type="text/css">

.custom-date-style {
	background-color: green !important;
}

.input{	
}
.input-wide{
	width: 500px;
}

</style>
</head>
<body>
	<form name="form1" method="post" id="formid" action="">
	
	<label for="FROM">From: </label>
	<input type="text" name="start" id="datetimepicker2"/><br><br>

	<label for="TO">To: </label>
	<input type="text" name="end" id="datetimepicker1"/><br><br>

	<input type="button" name="submit" id="submit" value="Submit">
	</form>

</body>
<script src="datepicker/js/jquery.js"></script>
<script src="datepicker/build/jquery.datetimepicker.full.js"></script>
<script src="datepicker/js/custom.js"></script>
</html>
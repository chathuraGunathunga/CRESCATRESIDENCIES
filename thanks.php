<?php 


$src1= $_POST['source1'];  
$src2= $_POST['source2'];     

echo $src1; 
echo $src2;
 //echo'Thanks for booking';


 if(isset($_POST['source1'])){

	$file ="userseleceddate.json";
	$json_string = json_encode($_POST,JSON_PRETTY_PRINT);
	file_put_contents($file, $json_string,FILE_APPEND);
	//header('Location:thanks.php');*/

}
;?>
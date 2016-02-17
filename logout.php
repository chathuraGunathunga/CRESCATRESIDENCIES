<?php require_once("_inc/session.php");?>
<?php require_once("_inc/functions.php");?>
<?php
//v1: simple logout 
//session_start();

$_SESSION["user_id"] = null;
$_SESSION["user_id"] = null;
 $_SESSION["admin_confirm_booking"]=null;
  $_SESSION["admin_confirm_booking"]=null;
redirect_to("index.php");
?>
<?php
	session_start();
	$_SESSION["vt"]=$_POST['vtype'];
	array_push($_SESSION["cart"], ",".$_SESSION["uid"].",".$_POST['pickuplocation'].",'".$_POST['pickupDay']." ".$_POST['pickupTime'].":00',".$_POST['vtype'].",".$_POST['dropofflocation'].",'".$_POST["dropOffDay"]." ".$_POST['dropOffTime'].":00')");
	header("Location: checkout.php");
    die();
	//insert into usedby(ubid, uid, vid, dropoff ) values 
?>
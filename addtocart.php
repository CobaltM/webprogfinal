<?php
	session_start();
	$vt=$_POST['vtype'];
	$_SESSION['vtype']=$vt;
	if($vt==1){
		$c=15;
	}
	if($vt==2 || $vt==3){
		$c=17;
	}
	if($vt==4){
		$c=20;
	}
	$t1=strtotime($_POST['dropOffDay']." ".$_POST['dropOffTime'].":00");
	$t2=strtotime($_POST['pickupDay']." ".$_POST['pickupTime'].":00");
	time=round(($t1-$t2)/ (60 * 60 * 24));
	$today=strtotime(date('Y-m-d'));
	$req=strtotime($_POST['sDay']);
	$validdate = $today<$req;
	if($time>0 && $validdate){
		$_SESSION['baddate']= False;
		array_push($_SESSION["viewcart"],$vt,$time,$c*$time);
		array_push($_SESSION["cart"], ",".$_SESSION["uid"].",".$_POST['pickuplocation'].",'".$_POST['pickupDay']." ".$_POST['pickupTime'].":00',".$_POST['dropofflocation'].",'".$_POST["dropOffDay"]." ".$_POST['dropOffTime'].":00')");
	header("Location: viewCart.php");
    die();
	}
	else{
		$_SESSION['baddate']= True;
		header("Location: inventory.php");
		die();
	}
	//insert into usedby(ubid, uid, vid, dropoff ) values 
?>
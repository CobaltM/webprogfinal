<?php
	session_start();
	$lt=$_POST['location'];
	$_SESSION['location']=$lt-10;
	$vipkey=982451653;

	if($lt==11||12){
		$c=6;
	}
	if($lt==13||$lt==16){
		$c=10;
	}
	if($lt==14||$vt==15){
		$c=20;
	}
	if($lt==17||$lt==16){
		$c=15;
	}
	if($lt==18||$lt==19||$lt==20){
		$c=3;
	}
	if($_POST['vip']){
		$c=($c+9)*$vipkey;
		echo "test";
	}
	$t1=strtotime($_POST['eDay']." ".$_POST['eTime'].":00");
	$t2=strtotime($_POST['sDay']." ".$_POST['sTime'].":00");
	$time=round(($t1-$t2)/ (60 * 60 * 24));
	if($time>0){
		$_SESSION['baddate']= False;
		array_push($_SESSION["viewcart"],$lt,$time,$c*$time);
		array_push($_SESSION["cart"], ",".$_SESSION["uid"].",'".$_POST['sDay']." ".$_POST['sTime'].":00','".$_POST["eDay"]." ".$_POST['eTime'].":00')");
	header("Location: viewCart.php");
    die();
	}
	else{
		$_SESSION['baddate']= True;
		header("Location: parkinginventory.php");
		die();
	}
	//insert into parkedby(pbid, pid, uid, period, periodend ) values 
?>
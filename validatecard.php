<?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'scaldwell9');
  define('DB_PASSWORD', 'scaldwell9');
  define('DB_DATABASE', 'scaldwell9');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if(! $db ) {
           die('Could not connect: ' . mysql_error());
        }
        
        echo 'Connected successfully';
  session_start();
  $l = $_SESSION["viewcart"];
  $l = (sizeof($l))/3;
  for($i=0;$i<$l;$i++){
  	if($_SESSION['viewcart'][$i*3]<10){
        $sql= "SELECT ubid FROM usedby ORDER BY ubid DESC LIMIT 1;";
		$res=$db->query($sql);
		  if ($res->num_rows > 0) {
		    // output data of each row
		    while($row = $res->fetch_assoc()) {
		        $ubid=(int)$row["ubid"]+1;
		      }
		    }
		  echo $ubid;
		  $sql= "SELECT vid FROM vehicles where type=".$_SESSION['viewcart'][$i*3]." and availability=1 LIMIT 1;";
		  $res=$db->query($sql);
		  if ($res->num_rows > 0) {
		    // output data of each row
		    while($row = $res->fetch_assoc()) {
		        $vid=(int)$row["vid"];
		      }
		    }
		  else{
		  	echo"<p>Error no cars matching specs</p>";
		  	echo"<p>".$_SESSION['viewcart'][$i*3+1]."</p>";
		  }
		  echo"<p>".$vid."</p>";
		  echo"<p>".$_SESSION["cart"][$i]."</p>";
		  $sql = "INSERT INTO usedby (ubid,vid,uid,pickup,rentalperiod,dropoff,rentalend) values(".$ubid.",".$vid."".$_SESSION["cart"][$i].";";
		  echo "<p> </p>";
		  if ($db->query($sql) === TRUE) {
		  	echo "<p> successfully completed insert </p>";
		} else {
			echo $sql;
		    //header("Location: register.php");
		    //die("Something went wrong");
		}
		$sql = "UPDATE vehicles SET availability=0 WHERE vid=".$vid.";";
		   }
		if ($db->query($sql) === TRUE) {
		  	echo "<p> successfully completed update </p>";
		} else {
			echo $sql;
		    //header("Location: register.php");
		    //die("Something went wrong");
		}
	}
		  $_SESSION['viewcart']=array();
		  $_SESSION['cart']=array();

		  
?>
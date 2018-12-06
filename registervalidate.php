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
  $_SESSION["loginq"]=False;

  $_SESSION["username"]=addslashes($_POST["username"]);

  $password=hash('ripemd160', addslashes($_POST["password"]));
  $sql= "SELECT uid FROM users ORDER BY uid DESC LIMIT 1;";
  $res=$db->query($sql);
  if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
        $uid=(int)$row["uid"]+1;
      }
    }
  echo $uid;
  $sql = "INSERT INTO users (uid, password, username) values(".$uid.",'".$password."','".$_SESSION["username"]."');";
  if ($db->query($sql) === TRUE) {
  		$_SESSION["cart"]=array();
  		$_SESSION["viewcart"]=array();
        $_SESSION["loginq"]=True;
        $_SESSION["uid"]=$uid;
        header("Location: menu.php");
        die();
} else {
	echo $sql;
    //header("Location: register.php");
    //die("Something went wrong");
}
?>
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

  $_SESSION["username"]=addslashes($_POST["user"]);

  $password=hash('ripemd160', addslashes($_POST["pass"]));

  $sql = "SELECT uid FROM users WHERE username='".$_SESSION["username"]."' AND password='".$password."';";
  $res=$db->query($sql);
  if ($res->num_rows > 0) {
    // output data of each row
    while($row = $res->fetch_assoc()) {
        $_SESSION["cart"]=array();
        $_SESSION["viewcart"]=array();
        $_SESSION["loginq"]=True;
        $_SESSION["uid"]=$row["uid"];
        header("Location: menu.php");
        die();
      }
    }
    else {
    header("Location: login.php");
    die();
}


?>
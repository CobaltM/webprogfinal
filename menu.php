<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="stlyeCars.css" />
    <style>
    body{
        background-image: url("carBackground.jpg");
        background-repeat: no-repeat;
        background-size: cover;
    }
    h1{
            text-align: center;
            color: #32425b;
            font-family: "Lucida Sans Unicode", sans-serif;
            border: solid azure;
            border-radius: 20%;
            padding: 1em;
            background-color: rgb(240, 255, 255, .9);
            margin-left: 20%;
            margin-right: 20%;
        }
        #home{
            border: #32425b;
            background-color: #32425b;
            border-radius: 20%;
            padding: 3em;
            margin-left: 20%;
            margin-right: 20%;
            background: rgb(50, 66, 91, .7);
            text-align: center;
        }
        button{
            background-color: #32425b;
            color:azure;
            border: none;
            padding: 2em;
            
            border-radius: 10%;
        }
        a{
            color:azure;
        }
        a:visited{
            color: #c7daf7;
        }
        p{
            text-align: left;
            color: white;
        }
        
    </style>
</head>
<body>
<?php
  session_start();
  echo "<h1>Welcome ".$_SESSION["username"]."</h1>";
  ?>
  <div id="home">
     <button><a href="inventory.php"> Rent A Car</a></button>
     <button><a href="parkinginventory.php"> Buy Parking</a></button>
     
     <?php
  define('DB_SERVER', 'localhost');
  define('DB_USERNAME', 'scaldwell9');
  define('DB_PASSWORD', 'scaldwell9');
  define('DB_DATABASE', 'scaldwell9');
  $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
  if(! $db ) {
           die('Could not connect: ' . mysql_error());
        }
    $sql= "SELECT * FROM usedby WHERE uid=".$_SESSION["uid"]." and DATE(NOW())<rentalend;";
        $res=$db->query($sql);
          if ($res->num_rows > 0) {
            echo "<p>Your current orders: </p>";
            // output data of each row
            while($row = $res->fetch_assoc()) {
                $vid=(int)$row["vid"];
                $sql2= "SELECT name FROM vehicles WHERE vid=".$vid.";";
                $res2=$db->query($sql2);
                $row2 = $res2->fetch_assoc();
                echo "<p>".$row2["name"]." ".$row["rentalperiod"]." to ".$row["rentalend"]."</p>";
              }
            }
          
  ?>
  </div>

</body>
</html>

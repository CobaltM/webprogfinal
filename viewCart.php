<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>View Cart of Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-image: url("viewCartBackground.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            font-family: "Lucida Sans Unicode", sans-serif;
            color:azure;
        }
        h1{
            text-align: center;
            color: #32425b;
            border: solid azure;
            border-radius: 20%;
            padding: 1em;
            background-color: rgb(240, 255, 255, .9);
            margin-left: 30%;
            margin-right: 30%;
        }
        div{
            border: solid, #32425b;
            border-radius: 10%;
            padding:1.5em;
            background: rgb(50, 66, 91, .8);
            margin-bottom: .5em;
            margin-right: 50%;
            color: azure;
        }
        button{
            background-color: #32425b;
            color:azure;
            border: none;
            padding: 1.5em;
            border-radius: 10%;
        }
        a{
            color:azure;
        }
        a:visited{
            color: #c7daf7;
        }
    </style>
   <?php
     $selected =$_POST['carSize'];
   function chooseImage(){
       
   }

   ?>
</head>
<body>
    <h1>View Your Cart of Rent Car. </h1>

    <div>
    <h2> Thank you for choosing Rent Car. </h2>
    <h3>Your pickup location: </h3>
    <?php
      session_start();

      $l = $_SESSION["viewcart"];
        $l = (sizeof($l))/3;
        $tot=0;
        //echo "<p>Car for ".$_SESSION['viewcart'][1*3+1]." Days. Price : $".$_SESSION['viewcart'][1*3+2]."</p>";
        for($i=0;$i<$l;$i++){
            echo "<tr>";
            if($_SESSION['viewcart'][$i*3]==1){
                echo "<p>Car for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>";
            }
            elseif ($_SESSION['viewcart'][$i*3]==2) {
               echo "<p>Truck rental for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p>"."</th><br><br>";
            }
            elseif($_SESSION['viewcart'][$i*3]==3){
                echo "<p>Van for".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2].".00</p><br><br>";
            }
            else{
                echo "<p>SUV for ".$_SESSION['viewcart'][$i*3+1]." Days </p><p> Price : $".$_SESSION['viewcart'][$i*3+2]."</p><br><br>";
            }
            echo "<button value='remove this item' onclick='removeItem(".$i*3."'/>";
            echo "</tr>";
            $tot=$tot+$_SESSION['viewcart'][$i*3+2];
        }
        echo "<p>Total Price: $".$tot.".00</p>";
      ?>
    <a href='cc.html'>
      <button>Pay Now</button>
    </a>
    </div>  
    <script>
    </script>
</body>
</html>


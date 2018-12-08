<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Parking Inventory of Rent Car</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body{
            background-image: url("inventoryImage.jpg");
            background-repeat: no-repeat;
            background-size: cover;

            font-family: "Lucida Sans Unicode", sans-serif;
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
            padding:1em;
            background: rgb(50, 66, 91, .8);
            margin-bottom: .5em;
            margin-right: 50%;
            color: azure;
        }
        select {
        font-size: 16px;
        font-family: "Lucida Sans Unicode", sans-serif;
        position: relative;
        display: inline-block;
        }
        option{
            font-family: "Lucida Sans Unicode", sans-serif;
            padding:2em;
            min-width: 160px;
            
        }
        button{
            float: left;
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
       
    </style>
  
</head>
<body>
    <button><a href='menu.php'> Back to menu </a></button>
    <h1>Parking Options for Rent Car. </h1>
    <?php
        session_start();
        if($_SESSION['baddate']){
            echo "<script>alert('End date must be AFTER start and start must be after today');</script>";
        }
    ?>
    <form action="addtocartparking.php" method="post">
        <div id="step1">
        Step 1: <br>
        Select a Start Date<br>
        Day <input type="date" name="sDay" id="sDay" required>
        Time <input type="time" name="sTime" value="12:00" id="sTime" required>
        </div>

        <div id="step2">
        Step 2: <br>
       Select a Location <br>
        : 
        <select required name="location">
            <option value=11  id="Location1" >Hotel 1 ($6 per day)</option>
            <option value=12  id="Location2" >Hotel 2 ($6 per day)</option>
            <option value=13  id="Location3" >Grand Theatre ($10 per day)</option>
            <option value=14  id="Location4" >Restaurants ($20 per day)</option>
            <option value=15  id="Location5" >Train Stations ($20 per day)</option>
            <option value=16  id="Location6" >Grand Hotel ($10 per day)</option>
            <option value=17  id="Location7" >Docks ($15 per day)</option>
            <option value=18  id="Location8" >Deck 3 ($3 per day)</option>
            <option value=19  id="Location9" >Deck 2 ($3 per day)</option>
            <option value=20  id="Location10" >Deck 1 ($3 per day)</option>
        </select>
        <p>VIP?</p>
        <input type='checkbox' value=1 name='vip'> I want vip parking for this venue (+$9 per day)<br>
            </div>
        </div>
        <div id="step3">
        Step 3: <br>
        Select a End Date<br>
        Day <input type="date" name="eDay" id="eDay" required>
        Time <input type="time" name="eTime" value="12:00" id="eTime" required>
        <br><br>
        <input type="submit">
        </div>
    
    </form>
</body>
</html>

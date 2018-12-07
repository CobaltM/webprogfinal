v<html>
   <head>
      <title>Connect to MariaDB Server</title>
   </head>

   <body>
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
    $sql = "INSERT INTO users (uid, username, password)
			VALUES (11112, 'ethancaldwell', 'thisisapassword')";
	if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
	
   </body>
</html>
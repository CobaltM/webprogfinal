<html>
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
    
?>
	
   </body>
</html>
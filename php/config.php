<?php
  $hostname = "ca-db-mysql.mysql.database.azure.com";
  $username = "jineu76@ca-db-mysql";
  $password = "Khongcho76";
  $dbname = "chatapp76DB";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

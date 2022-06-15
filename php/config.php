<?php
  $hostname = "chat-app-db.mysql.database.azure.com";
  $username = "volevu76@chat-app-db";
  $password = "trannhuy76@";
  $dbname = "chatappweb";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>

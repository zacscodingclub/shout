<?php
  $host = "mysql.zacbaston.com";
  $usr = "test"; 
  $pass = "pass";
  $db = "shout_it";
  $table = "shouts";
  
  $link = mysqli_connect($host, $usr, $pass, $db);

  if (mysqli_connect_errno()) {
    die("Connect failed: %s\n" + mysqli_connect_error());
    exit();
  }
?>
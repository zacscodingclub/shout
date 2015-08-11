<?php
  include 'database.php';

  if(!isset($_POST['submit'])) {
    $user = mysqli_real_escape_string($link, $_POST['user']);
    $message = mysqli_real_escape_string($link, $_POST['message']);

    date_default_timezone_set('America/Chicago');
    $time = date('h:i:s a', time()); 

    if(!isset($user) || $user == '' || !isset($message) || $message == '') {
      $error_msg = "Please fill in both your name and a message.";
      header('Location: index.php?error='.urlencode($error_msg));
      exit();
    } else {
      $query = "INSERT INTO shouts (user, message, time)
      VALUES ('$user','$message','$time')";

      if(!mysqli_query($link, $query)) {
        die('Error: '.mysqli_error($link));
      } else {
        header('Location: index.php');
        exit();
      }
    }
  }
?>
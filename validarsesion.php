<?php
  $email = $_POST['email'];
  if(!is_null($email)){
    $_SESSION['email'] = $email;
    header("location: lab3.html");

  }else{
    header("Location: lab10.php");
  }
?>

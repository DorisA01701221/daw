<?php
if(isset($_POST["NoIngreso"]) && $_POST["NoIngreso"]!=""){
    $values = ['SYSTEM FAILURE'];

    if($_POST["NoIngreso"]=="1 7 0 1 2 2 1"){
      $values = ['SUCCESS'];
    }

    $query= 'INSERT INTO usuario (Estado) VALUES (?)';

    if(inserts($query,$values) !== false){
        header("location: ../index.php");
    }
}

header("location: ../index.php");

 ?>

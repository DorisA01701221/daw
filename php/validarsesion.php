<?php
//require_once("accessDataBase.php");

if(isset($_POST["NoIngreso"]) && $_POST["NoIngreso"]!="" && isset($_POST["contraseña"]) && $_POST["contraseña"]!=""){
//  $values = ['SYSTEM FAILURE'];

  if(($_POST["NoIngreso"]=="1 7 0 1 2 2 1") && ($_POST["contraseña"]=="portafolioDORIS")){
  //  $values = ['SUCCESS'];
  header("location: ./html/lab3.html");
  }
  else{
    echo "alert(id incorrecto)";
    header("location: ../html/lab11.html");
  }
  //$query= 'INSERT INTO usuario (Estado) VALUES (?)';

  //if(inserts($query,$values) !== false){
    //  header("location: ../index.php");
  //}
}
    echo "alert(id incorrecto)";
header("location: ../html/lab11.html");
?>

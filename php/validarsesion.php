<?php
//require_once("accessDataBase.php");
if(isset($_POST["NoIngreso"]) && $_POST["NoIngreso"]!="" && isset($_POST["contraseña"]) && $_POST["contraseña"]!=""){
  if(($_POST["NoIngreso"]=="1 7 0 1 2 2 1") && ($_POST["contraseña"]=="portafolioDORIS")){
    sleep(3);
    include("../html/_header.html");
    include("../html/_body.html");
  }
  else{
    include("../html/errorpage.html");
    echo '<button onclick="goBack()">Atrás</button>';
  }
}

?>

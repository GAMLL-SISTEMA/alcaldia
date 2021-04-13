<?php

if(isset($_POST['usuario']) && isset($_POST["password"]) && isset($_POST["repassword"]) &&
  isset($_POST["nombres_apellidos"]) && isset($_POST["email"])){
    $param['usuario']=$_POST["usuario"];
    $param['password']=$_POST["password"];
    $param['nombres_apellidos']=$_POST["nombres_apellidos"];
    $param['email']=$_POST["email"];
    DBNewUser();

}else{
  echo "error";
}

?>

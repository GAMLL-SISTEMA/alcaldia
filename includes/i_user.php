<?php
include '../db.php';
session_start();
if(isset($_POST['usuario']) && isset($_POST["password"]) && isset($_POST["repassword"]) &&
  isset($_POST["nombres_apellidos"]) && isset($_POST["email"])){

    $param['username']=$_POST["usuario"];
    $param['userpassword']=hash('sha256',$_POST["password"]);
    $param['userfullname']=$_POST["nombres_apellidos"];
    $param['useremail']=$_POST["email"];
    $param['usertype']="user";
    if(DBUserInfo($param['username'],$param['useremail'])!==false){
      echo 'existuser';
    }else{
      DBNewUser($param);
      $a=DBUserInfoLogin($param['username'],$param['userpassword']);

      if($a!==false){
        echo 'yes';
        $_SESSION['usuario']=$a['username'];
        $_SESSION['tipo']=$a['usertype'];
        $_SESSION['email']=$a['useremail'];
      }else{
        echo 'No';
      }
    }
}else{
  if(isset($_POST['username']) && isset($_POST['password'])){
    $username=$_POST['username'];
    $password=hash('sha256',$_POST['password']);
    $a=DBUserInfoLogin($username,$password);

    if($a!==false){
      echo 'yes';
      $_SESSION['usuario']=$username;
      $_SESSION['tipo']=$a['usertype'];
      $_SESSION['email']=$a['useremail'];
    }else{
      echo 'No';
    }
  }
  //para update del usuario

    if(isset($_POST['username_update'])&&isset($_POST['password_update'])&&isset($_POST['newpassword_update'])&&
        isset($_POST['fullname_update'])&&isset($_POST['email_update'])){
            //echo "entro";
            $param['id']=$_POST['id'];
            $param['username']=$_POST['username_update'];
            $param['userpassword']=hash('sha256',$_POST['newpassword_update']);
            $param['userfullname']=$_POST['fullname_update'];
            $param['useremail']=$_POST['email_update'];//
            if($_SESSION['usuario']==$param["username"] && $_SESSION['email']==$param['useremail']){
              if (DBUserInfoLogin($_SESSION['usuario'],hash('sha256',$_POST['password_update']))===false) {
                  echo 'Nopass';
              }else {
                DBUpdateUser($param);
                $a=DBUserInfo($param['username']);
                $_SESSION['usuario']=$a["username"];
                $_SESSION['tipo']=$a['usertype'];
                $_SESSION['email']=$a['useremail'];
                echo 'yes';
              }
            }else{
              if(DBUserInfo($param['username'],$param['useremail'])!==false){
                  echo 'existuser';
              }elseif (DBUserInfoLogin($_SESSION['usuario'],hash('sha256',$_POST['password_update']))===false) {
                  echo 'Nopass';
              }else{

                  DBUpdateUser($param);
                  $a=DBUserInfo($param['username']);
                  $_SESSION['usuario']=$a["username"];
                  $_SESSION['tipo']=$a['usertype'];
                  $_SESSION['email']=$a['useremail'];
                  echo 'yes';
              }
            }
    }
}

?>

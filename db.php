<?php
include 'globals.php';
//para conectar al base de datos
function DBConnect(){
  $host='localhost';
  $username='root';
  $password='';
  $database='alcaldia';
  $conn=new mysqli($host, $username, $password, $database);
  if(mysqli_connect_errno()){
    echo $conn->connect_error;
    return;
  }
  return $conn;
}

//para ejecutar el el sql
function DBExec($conn, $sql){
  $result=$conn->query($sql);
  if(!$result){
    echo "error query";
    return;
  }
  return $result;
}

//retorna la fila de la consulta
function DBGetRow($sql,$c=null){
  if($c==null)
    $c=DBConnect();
  $r=DBExec($c,$sql);
  $a=$r->fetch_array(MYSQLI_ASSOC);
  return $a;
}

include_once('fuser.php');
?>

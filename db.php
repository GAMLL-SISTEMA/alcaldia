<?php
//
function DBConnect(){
  $host='localhost';
  $username='root';
  $password='';
  $database='alcaldia';
  $conn=mysqli_connect($host, $username, $password, $database);
  if(!$conn){
    die("coneccion fallida");
    exit;
  }
  return $conn;
}
//para eliminar la tabla
function DBDropUserTable(){
  $c=DBConnect();
  $r=DBExec($c,"drop table if exists usertable");
}
//para crear la tabla
function DBCreateUserTable(){
  $c=DBConnect();
  DBExec($c,"
    CREATE TABLE usertable (
        id_usuario int auto_increment not null primary key,
        usuario varchar(50) not null,
        password varchar(100) not null,
        nombres_apellidos varchar(50) not null,
        email varchar(50) not null
    )");
}
//usuario falso..
function DBInsertUserFake(){
  $c=DBConnect();
  DBExec($c,"insert into usertable (usuario, password, nombres_apellidos, email) values ('fabiandb', '123',
   'fabian sierra','fabian@gmail.com')");
}
//
function DBNewUser($param){
  $c=DBConnect();
  $ac=array('usuario','password','nombres_apellidos','email');
  foreach ($ac as $key) {
    if(isset($param[$key])){
      $$key=$param[$key];
    }
  }
  $sql="insert into usertable (usuario, password, nombres_apellidos, email) values ('$usuario', '$password', '$nombres_apellidos', '$email')";
  DBExec($c,$sql);
}
//para ejecutar el el sql
function DBExec($conn, $sql){
  $result=mysqli_query($conn,$sql);
  if(!$result){
    echo "error query";
    return;
  }
  return $result;
}



?>

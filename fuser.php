<?php

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
        userid int auto_increment not null primary key,
        username varchar(50) not null,
        userpassword varchar(100) not null,
        userfullname varchar(50) not null,
        useremail varchar(50) not null,
        usertype varchar(50) not null
    )");
}
//usuario falso..
function DBInsertUserFake(){
  $c=DBConnect();
  $param['username']="admin";
  $param['userpassword']=hash('sha256','alcaldia');
  $param['userfullname']="administrador";
  $param['useremail']="admin@alcaldia.com";
  $param['usertype']="admin";
  DBNewUser($param);
}
//para crear un nuevo usuario
function DBNewUser($param){
  $c=DBConnect();
  $ac=array('username','userpassword','userfullname','useremail','usertype');
  foreach ($ac as $key) {
    if(isset($param[$key])){
      $$key=$param[$key];
    }
  }
  $sql="insert into usertable (username, userpassword, userfullname, useremail, usertype) values ('$username', '$userpassword', '$userfullname', '$useremail', '$usertype')";
  $ret=1;
  $r=DBExec($c,$sql);
  if($r!==false)
    $ret=2;
}
//para update un nuevo usuario
function DBUpdateUser($param){
  $c=DBConnect();
  $ac=array('id','username','userpassword','userfullname','useremail');
  foreach ($ac as $key) {
    if(isset($param[$key])){
      $$key=$param[$key];
    }
  }
  $sql="update usertable set username='$username', userpassword='$userpassword', userfullname='$userfullname', useremail='$useremail' where userid=$id";
  $ret=1;
  $r=DBExec($c,$sql);
  if($r!==false)
    $ret=2;
}

//para logearse
function DBUserInfoLogin($username, $userpass, $c=null){
  $sql="select *from usertable where username='$username' and userpassword='$userpass'";
  $a=DBGetRow($sql,$c);
  if($a==null)
    return false;
  else
    return $a;
}
//saber la informacion del usuario
function DBUserInfo($username, $useremail="", $c=null){
  $sql="select *from usertable where username='$username' or useremail='$useremail'";
  if($useremail=="")
    $sql="select *from usertable where username='$username'";
  $a=DBGetRow($sql,$c);
  if($a==null)
    return false;
  else
    return $a;
}

?>

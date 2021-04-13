<?php
//para ejecutar el el sql
function DBExec($conn, $sql){
  $result=DB_my_exec($conn,$sql);
  if(!$result){
    exit;//falla
  }
  return $result;

}
function DB_my_exec(){
  return 
}


?>

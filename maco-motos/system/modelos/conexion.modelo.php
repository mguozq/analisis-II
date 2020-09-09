<?php

//conexion a base de datos
class Conexion{

  static public function conectar(){

    $host = "localhost";
    $dbName = "db_maco_motos";
    $user = "root";
    $password = "12345678";

    try{

      $link= new PDO("mysql:host=".$host.";dbname=".$dbName."",$user,$password);
      $link->exec("set names utf8");
      return $link;
  } catch (PDOException $e) {
      echo "Fallo la conexion ".$e->getMessage();
    }


  }

}

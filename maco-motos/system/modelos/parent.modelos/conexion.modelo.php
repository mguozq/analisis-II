<?php

//conexion a base de datos
class Conexion{

  static public function datos_conexion(){

    $datos = array("host" => "localhost",
                   "db" => "db_ecolavados",
                   "user" => "root",
                   "password" => "12345678");
    return $datos;

  }

  static public function conectar(){

    $datos = self::datos_conexion();
    $host = $datos["host"];
    $dbName = $datos["db"];
    $user = $datos["user"];
    $password = $datos["password"];

    try{

      $link= new PDO("mysql:host=".$host.";dbname=".$dbName."",$user,$password);
      $link->exec("set names utf8");
      return $link;
    } catch (PDOException $e) {
      echo "Fallo la conexion ".$e->getMessage();
    }


  }

}

<?php

include_once "conexion.modelo.php";

/**
 *
 */
class ModeloPrincipal{

  /*mostrar*/
  static public function mdlMostrar($tabla, $item, $valor){

    $result = null;
		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");
			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);
			$stmt -> execute();
      $result = $stmt -> fetch();
      $stmt = null;
      return $result;

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");
			$stmt -> execute();
      $result = $stmt -> fetchAll();
      $stmt = null;
			return $result;

		}


	}

  /*editar campo*/
  static public function mdlEditarCampo($tabla,$item_busqueda,$valor_busqueda,$item,$valor){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET $item = :$item WHERE $item_busqueda = :$item_busqueda");

    $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
    $stmt->bindParam(":".$item_busqueda, $valor_busqueda, PDO::PARAM_INT);

    if($stmt->execute()){
      $stmt=null;
      return "ok";
    }else{
      $stmt=null;
      return "error";
    }


  }

  /*eliminar*/
  static public function mdlEliminar($tabla,$item,$valor){

    $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE $item = :$item");
    $stmt->bindParam(":".$item,$valor,PDO::PARAM_STR);

    if($stmt->execute()){
      $stmt=null;
      return "ok";
    }else{
      $stmt=null;
      return "error";
    }

  }


}

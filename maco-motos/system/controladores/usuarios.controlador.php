<?php
/**
 *
 */
class ControladorUsuarios{

  /*inicio de sesion*/
  static public function login(){

    if(isset($_POST["usuario"])){

      $item = "usuario";
      $valor = $_POST["usuario"];
      $usuario = self::ctrMostrarUsuarios($item,$valor);
      $password = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        if($usuario["usuario"]==$_POST["usuario"] && $usuario["password"]==$password){


          $_SESSION["session"] = "ok";
  				$_SESSION["id"] = $usuario["id"];
  				$_SESSION["usuario"] = $usuario["usuario"];
  				$_SESSION["nombre"] = $usuario["nombre"];

          echo '<script> window.location = "inicio"; </script>';


        }else{
          echo '<hr>
                <div class="alert alert-danger">
                  <h4><i class="icon fa fa-warning"></i> Error</h4>
                  Verifique su contraseña o usuario
                </div>';
        }


    }

  }

  /*mostrar usuario*/
  static public function ctrMostrarUsuarios($item,$valor){
    $tabla = "usuarios";
    $usuario = ModeloUsuarios::mdlMostrar($tabla,$item,$valor);
    return $usuario;
  }

}

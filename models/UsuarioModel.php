<?php

include('../databases/conexion.php');

class UsuarioModel{
   public $dbh;
    function __construct() {
        $this->dbh=new PDOConnection();
    }
    function getAll() {
        $respuesta=$this->dbh->select("SELECT U.IDUSUARIO, U.USUARIO, U.CORREO 
                                         FROM SGR_USUARIOS U");
        return $respuesta;
    }
    function getID($IDUSUARIO) {      
      $respuesta=$this->dbh->select("SELECT U.IDUSUARIO, 
                                            U.USUARIO, 
                                            U.CORREO, 
                                            U.NOMBRES 
                                     FROM SGR_USUARIOS U 
                                     WHERE U.IDUSUARIO=".$IDUSUARIO);

      if (count($respuesta)>0){
          $data["USER"]=$respuesta;
          $data["CODIGO"]="000";
      }else{
          $data["CODIGO"]="001";
      }
      return $data;
    }

}/*
$User=new UsuarioModel();
echo json_encode($User->getAll());*/

?>

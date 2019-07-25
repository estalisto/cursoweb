<?php
include('../models/UsuarioModel.php');
class UsuarioControllers{
 
    public $User;
    function __construct() {
      $this->User=new UsuarioModel();
    }    
    function show() {
         return $this->User->getAll();
    }
    function edit($id) {
        return $this->User->getID($id);
   }

}
/*
$respuesta= new UsuarioControllers();
echo json_encode($respuesta->edit(29));*/

?>
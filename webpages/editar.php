<?php
$idusuario= $_GET["idusuario"];
include('../controller/UsuarioControllers.php');
$data= new UsuarioControllers();

if($data->edit($idusuario)["CODIGO"]=="000"){
    foreach($data->edit($idusuario)["USER"] as $valor){
            $ID_USUARIO=$valor["IDUSUARIO"];
            $USUARIO=$valor["USUARIO"];
            $CORREO=$valor["CORREO"];
            $NOMBRES=$valor["NOMBRES"];
    }
   
}else{
    echo "No existen datos";
}

?>

<HTML><HEAD>
<TITLE>REGISTRAR</TITLE>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</HEAD>
<BODY>

<!--
GET  => URL
POST  =>  URL OCULTA
 -->
 <h1>Editar Usuario</h1>
 
 <div class="row">
 <div class="col-lg-4"></div>
  <div class="col-lg-4">
		<form action="#" method="POST" >
        <input class="form-control"  name="idusuario" id="idusuario"  value="<?php echo  $idusuario; ?>"  type="hidden"   />
			<h6>Usuario:</h6>
			<input class="form-control" type="text" name="usuario" id="usuario" value="<?php echo $USUARIO; ?>"/>
			<h6>Nombre usuario:</h6>
			<input class="form-control" type="text" name="nombres" id="nombres" value="<?php echo $NOMBRES; ?>"/>
			<h6>Correo:</h6>			
			<input class="form-control" type="email" name="correo" id="correo" value="<?php echo $CORREO; ?>"/>
			
			<br>
			<button class="btn btn-primary" type="submit" >Registrar</button>

	</form>
  </div> 
  
  
  <div class="col-lg-4">
  </div> 
  
 </div>
 
 






</BODY>
</HTML>

<?PHP

?>
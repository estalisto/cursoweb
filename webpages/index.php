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
 <h1>Registrar Usuario</h1>
 
 <div class="row">
 <div class="col-lg-4"></div>
  <div class="col-lg-4">
		<form action="registrar.php" method="POST" >

			<h6>Usuario:</h6>
			<input class="form-control" type="text" name="usuario" id="usuario"/>
			<h6>Nombre usuario:</h6>
			<input class="form-control" type="text" name="nombres" id="nombres"/>
			<h6>Correo:</h6>
			
			<input class="form-control" type="email" name="correo" id="correo"/>
			
			<h6>Contraseña:</h6>
			<input class="form-control" type="password" name="contrasenia" id="contrasenia"/>
			<h6>Confirmación contraseña:</h6>
			<input class="form-control" type="password" name="contrasenia2" id="contrasenia2"/>
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
<HTML>
<HEAD>
<TITLE>consultar</TITLE>


<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</HEAD>
<BODY>
<h1> Mostrar usuarios </h1>
<?php
include('../controller/UsuarioControllers.php');
$data= new UsuarioControllers();

//echo json_encode($data->show());
$respuesta=$data->show();
/*
$respuesta = $dbh->select("SELECT U.IDUSUARIO, U.CORREO, U.USUARIO, 
						U.NOMBRES FROM SGR_USUARIOS U");	*/
?>
<div>
	<table class="table table-responsive hover">
	  <thead>
		<tr>
		  <th scope="col">#ID</th>
		  <th scope="col">Usuario</th>
		  <th scope="col">Correo</th>
		  <th scope="col">Acciones</th>
		</tr>
	  </thead>
		<tbody>						
			<?php			
				foreach($respuesta as $valor ){
					echo "<tr>";
						echo "<td>".$valor["IDUSUARIO"]."</td>";
						echo "<td>".$valor["USUARIO"]."</td>";
						echo "<td>".$valor["CORREO"]."</td>";
						
						    $idusuario=$valor["IDUSUARIO"];
						echo "<td><a href='http://localhost/sgranda/webpages/editar.php?idusuario=$idusuario'>Editar</a> <a>Eliminar</a></td>";
					echo "</tr>";
				}
				
				?>
		</tbody>
	</table>
</div>




</BODY>
</HTML>
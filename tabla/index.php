<?php 
	$conexion=mysqli_connect('localhost','root','','expedientemedico');
?>
<!doctype html>
<html lang="en">
    <head>
    <title>Expedinte medico</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    <div class="container">
    <div class="row">
    <div class="col">
    <br>
	<table border="1" >
		<tr>
			<td>nombre</td>
			<td>apellido paterno</td>
            <td>apellido materno</td>
            <td>telefono</td>
            <td>fecha de nacimineto</td>
            <td>sexo</td>
            <td>nacionalidad</td>
		</tr>
        <?php 
		$sql="SELECT * from t_personas";
		$result=mysqli_query($conexion,$sql);
		while($mostrar=mysqli_fetch_array($result)){
		?>
<tr>
			<td><?php echo $mostrar['nombre'] ?></td>
			<td><?php echo $mostrar['apellido paterno'] ?></td>
            <td><?php echo $mostrar['apellido materno'] ?></td>
            <td><?php echo $mostrar['telefono'] ?></td>
            <td><?php echo $mostrar['fecha de nacimiento '] ?></td>
            <td><?php echo $mostrar['sexo'] ?></td>
            <td><?php echo $mostrar['nacionalidad'] ?></td>
            
			</tr>
	<?php 
	}
	 ?>
	</table>
  </div>
    </div>
    </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
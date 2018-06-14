<?php
$opcion="Antigripal";

?>
<!DOCTYPE html>
<html>
	<head>
	<title></title>
		<?php include("header.php");?>
		<?php include("aviso.php");?>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/servicios.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,300i,400,500,600,700" rel="stylesheet">	

	</head>
	<body>
		<content>
			<div class="consDisp">
				<h2 class="cons_dev">Consulte <span class="disp">disponibilidad</span> de vacunas</h2>
			</div>
			<div class="sucursDispo">
				<h4>Resultado de su busqueda </h4>
				<h3>Informacion actualizada al:14/06/2018</h3>
			</div>
			<br>
			<hr>
			<br>
			<p><?php echo $opcion ;?><p>
			<p>Marca:</p>
			<p>Laboratorio:</p>
			<p>Origen:</p>
			<p>Disponibilidad:</p> 
			<div class="disponibilidad">
			<ul>
			<li><input type="checkbox" class="checkitem" checked>Almagro</li>
			<li><input type="checkbox" class="checkitem" checked>Belgrano</li>
			<li><input type="checkbox" class="checkitem" checked>Caballito</li>
			<li><input type="checkbox" class="checkitem" checked>Cañitas</li>
			<li><input type="checkbox" class="checkitem" checked>Cemic Belgrano</li>
			</ul>
			<div>
			<button> Realizar Precarga</button>
			<button> Solicitar Turno</button>
			<br>
			<hr>
			<br>
			<p><?php echo $opcion ;?><p>
			<p>Marca:</p>
			<p>Laboratorio:</p>
			<p>Origen:</p>
			<p>Disponibilidad:</p> 
			<div class="disponibilidad">
			<ul>
			<li><input type="checkbox" class="checkitem">Almagro</li>
			<li><input type="checkbox" class="checkitem">Belgrano</li>
			<li><input type="checkbox" class="checkitem">Caballito</li>
			<li><input type="checkbox" class="checkitem">Cañitas</li>
			<li><input type="checkbox" class="checkitem">Cemic Belgrano</li>
			</ul>
			<div>
			<button> Recibir Aviso de disponibilidad</button>
			<br>
			<hr>
			<br>
			<p><?php echo $opcion ;?><p>
			<p>Marca:</p>
			<p>Laboratorio:</p>
			<p>Origen:</p>
			<p>Disponibilidad:</p> 
			<div class="disponibilidad">
			<ul>
			<li><input type="checkbox" class="checkitem" checked>Almagro</li>
			<li><input type="checkbox" class="checkitem" checked>Belgrano</li>
			<li><input type="checkbox" class="checkitem" checked>Caballito</li>
			<li><input type="checkbox" class="checkitem">Cañitas</li>
			<li><input type="checkbox" class="checkitem">Cemic Belgrano</li>
			</ul>
			<div>
			<button> Realizar Precarga</button>
			<button> Solicitar Turno</button>
			<button  id="myBtn"> Recibir Aviso de disponibilidad</button>
			<br>
			<hr>
			
		</content>
		<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="js/aviso.js"></script>
</body>
</html>
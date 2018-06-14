<!DOCTYPE html>
<html>
	<head>
	<title></title>
		<?php include("header.php");?>
		<link rel="stylesheet" type="text/css" href="css/estilos.css">
		<link rel="stylesheet" type="text/css" href="css/servicios.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,300i,400,500,600,700" rel="stylesheet">	
	</head>
	<body>
		<content>
			<div class="consDisp">
				<h2 class="cons_dev">Consulte <span class="disp">disponibilidad</span> de vacunas</h2>
			</div>
			<form name="form1" method="	post">
			<div class="ingrese"><input type="text" name="marca"  placeholder="INGRESE NOMBRE O MARCA COMERCIAL"></div>
			</form>
			<div class="sucursDispo">
				<h4>Seleccione las sucursales donde desea consultar disponibilidad:</h4>
				<p><input type="checkbox" id="Seleccionartodas" onclick='check_todos(this.checked);'>Seleccionar todas</p>
			</div>
			<div class="sucurales">
				<ul>
					<p>CAPITAL FEDERAL</p>
					<li><input type="checkbox" class="checkitem">ALMAGRO</li>
					<li><input type="checkbox" class="checkitem">BELGRANO</li>
					<li><input type="checkbox" class="checkitem">CABALLITO</li>
					<li><input type="checkbox" class="checkitem">CAÑITAS</li>
					<li><input type="checkbox" class="checkitem">CEMIC CABALLITO</li>
					<li><input type="checkbox" class="checkitem">CEMIC LAS HERAS</li>
					<li><input type="checkbox" class="checkitem">CEMIC SAAVEDRA</li>
					<li><input type="checkbox" class="checkitem">COGHLAN</li>
					<li><input type="checkbox" class="checkitem">DEVOTO</li>
					<li><input type="checkbox" class="checkitem">LINIERS</li>
					<li><input type="checkbox" class="checkitem">PALERMO</li>
					<li><input type="checkbox" class="checkitem">RECOLETA</li>
					<li><input type="checkbox" class="checkitem">VILLA URQUIZA</li>
					
				</ul>
				<ul>
					<p>ZONA NORTE</p>
					<li><input type="checkbox" class="checkitem">PILAR</li>
					<li><input type="checkbox" class="checkitem">FLORIDA</li>
					<li><input type="checkbox" class="checkitem">ACASSUSO</li>
					<li><input type="checkbox" class="checkitem">SAN ISIDRO-LAS LOMAS</li>
				</ul>
				<ul>
					<p>ZONA OESTE</p>
					<li><input type="checkbox" class="CASTELAR">CASTELAR</li>
				</ul>
				<ul>
					<input type="button" onclick=" location.href='resultado.php' " value="BUSCAR" name="buscar" /> 
				</ul>
			</div>
 	</content>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/checkbox.js"></script>
</body>
</html>
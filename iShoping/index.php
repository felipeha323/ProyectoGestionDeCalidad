<?php
include "configs/config.php";
include "configs/funciones.php";
	
if(!isset($p)){
	$p = "principal";
}else{
	$p = $p;
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<link rel="stylesheet" href="css/estilo.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css"/>
	<link rel="stylesheet" href="fontawesome/css/all.css"/>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="fontawesome/js/all.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<title>iShoping</title>
</head>
<body>
	<div class="header">
		iShoping
	</div>
	<div class="menu">
		<a href="?p=principal">Principal</a>
		<a href="?p=productos">Productos</a>
		<a href="?p=ofertas">Ofertas</a>
		<?php
		if(isset($_SESSION['id_cliente'])){
		?>
		<a href="?p=carrito">Mi Carrito</a>
		<a href="?p=miscompras">Mis Compras</a>
		<?php
		}else{
			?>
				<a href="?p=login">Iniciar Sesion</a>
				<a href="?p=registro">Registrate</a>
			<?php
		}
		?>
		<a href="admin/">Panel Admin</a>
		<!--
		<a href="?p=admin">Administrador</a>
		-->

		<?php
			if(isset($_SESSION['id_cliente'])){
		?>

		<a class="pull-right subir" href="?p=salir">Salir</a>
		<a class="pull-right subir" href="#"><?=nombre_cliente($_SESSION['id_cliente'])?></a>

		<?php
			}
		?>
	</div>
	<div class="cuerpo">
		<?php
			if(file_exists("modulos/".$p.".php")){
				include "modulos/".$p.".php";
			}else{
				echo "<i>No se ha encontrado el modulo <b>".$p."</b> <a href='./'>Regresar</a></i>";
			}
		?>
	</div>


	<div class="carritot" onclick="minimizer()">
		Carrito de compra
		<input type="hidden" id="minimized" value="0"/>
	</div>

	<div class="carritob">

		<table class="table table-striped">
	<tr>
		<th>Nombre del producto</th>
		<th>Cantidad</th>
		<th>Precio </th>
	</tr>
<!--
Programacion!!
-->
</table>
<br>
<span>Monto Total: <b class="text-green"><?=$monto_total?> <?=$divisa?></b></span>

<br><br>
<form method="post" action="?p=carrito">
	<input type="hidden" name="monto_total" value="<?=$monto_total?>"/>
	<button class="btn btn-primary" type="submit" name="finalizar"><i class="fa fa-check"></i> Finalizar Compra</button>
</form>

	</div>

	<div class="footer">
		Copyright iShoping  &copy; <?=date("Y")?>
	</div>


</body>
</html>

<script type="text/javascript">
	
	function minimizer(){

		var minimized = $("#minimized").val();

		if(minimized == 0){
			//mostrar
			$(".carritot").css("bottom","350px");
			$(".carritob").css("bottom","0px");
			$("#minimized").val('1');
		}else{
			//minimizar

			$(".carritot").css("bottom","0px");
			$(".carritob").css("bottom","-350px");
			$("#minimized").val('0');
		}
	}
</script>
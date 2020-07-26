<?php
require_once("class/class.php");
$tra=new Trabajo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$tra->add_cliente();
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	

	<title>agregar cliente</title>
	<link rel="stylesheet" href="css/estilos.css">
</head>

<body>

<h1>Sistema de Gesti&oacute;n de Presupuesto</h1>

<nav>
	<?php require_once("menu.php");?>
</nav>

<hr />

<br>


<section id="contenido">
	<h2>Agregar Cliente</h2>



<form action="" name="form" method="post">

Cliente<br>
<input type="text" name="cliente" required>
<br>
Contacto <br>
<input type="text" name="contacto" required>
<br>
Rut <br>
 <input type="text" name="rut" required>
<br>
Direccion
<br>
<input type="text" name="direccion" required>
<br>
Giro:
<br>
<input type="text" name="giro" required>
<br>
<br>
<input type="hidden" name="grabar" value="si">
<input type="submit" value="crear Cliente" title="Crear Cliente">


</form>

<br><br>
</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
<?php
require_once("class/class.php");
$tra=new Trabajo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$tra->add_material();
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	

	<title>agregar material</title>
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
	<h2>Agregar Materiales</h2>



<form action="" name="form" method="post">

Material <br>
<input type="text" name="material" required>
<br>
Marca <br>
<input type="text" name="marca" required>
<br>
Terminaciones <br>
 <input type="text" name="terminaciones" required>
<br>
Valor M2 
<br>
<input type="text" name="valorM2" required>
<br>
<br>
<input type="hidden" name="grabar" value="si">
<input type="submit" value="crear Material" title="Crear material">


</form>

<br><br>
</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
<?php
require_once("class/class.php");
$tra=new Trabajo();
$datos=$tra->get_cliente_por_id($_GET["id"]);

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $tra->edit_cliente();
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	

	<title>agregar Clliente</title>
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
	<h2>Editar Cliente</h2>



<form action="" name="form" method="post">

Cliente <br>
<input type="text" name="cliente" value="<?php echo $datos[0]["cliente"];?>" >
<br>
Contacto <br>
<input type="text" name="contacto" value="<?php echo $datos[0]["contacto"];?>">
<br>
Rut <br>
 <input type="text" name="rut" value="<?php echo $datos[0]["rut"];?>">
<br>
Direccion
<br>
<input type="text" name="direccion" value="<?php echo $datos[0]["direccion"];?>">
<br>
Giro
<br>
<input type="text" name="giro" value="<?php echo $datos[0]["giro"];?>">
<br>
<br>
<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="submit" value="Editar Cliente" title="Editar Cliente">


</form>

<br><br>
</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
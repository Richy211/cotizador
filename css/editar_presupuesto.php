<?php
require_once("class/class.php");
$tra=new Trabajo();
$datos=$tra->get_presupuesto_por_id($_GET["id"]);

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $tra->editar_presupuesto();
    exit;
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	

	<title>Editar Presupuesto</title>
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
	<h2>Editar Presupuesto</h2>



<form action="" name="form" method="post">

Presupuesto <br>
<input type="text" name="presupuesto" value="<?php echo $datos[0]["presupuesto"];?>" >
<br>
Cliente <br>
<input type="text" name="cliente" value="<?php echo $datos[0]["cliente"];?>">
<br>
Proyecto <br>
 <input type="text" name="proyecto" value="<?php echo $datos[0]["proyecto"];?>">
<br>
Fecha
<br>
<input type="date" name="fecha" value="<?php echo $datos[0]["fecha"];?>">
<br>

<br>
<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="submit" value="Editar Presupuesto" title="Editar Presupuesto">


</form>

<br><br>
</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
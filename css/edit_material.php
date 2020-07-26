<?php
require_once("class/class.php");
$tra=new Trabajo();
$datos=$tra->get_precio_por_id($_GET["id"]);
//print_r($datos);

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $tra->editar_precios();
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
	<h2>Editar Materiales</h2>



<form action="" name="form" method="post">


Material <br>
<input type="text" name="material" value="<?php echo $datos[0]["material"];?>" >
<br>
Marca <br>
<input type="text" name="marca" value="<?php echo $datos[0]["marca"];?>">
<br>
Terminaciones <br>
 <input type="text" name="terminaciones" value="<?php echo $datos[0]["terminaciones"];?>">
<br>
Valor M2 
<br>
<input type="text" name="valorM2" value="<?php echo $datos[0]["valorM2"];?>">
<br>
<br>
<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="submit" value="Editar Material" title="Editar material">


</form>

<br><br>
</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
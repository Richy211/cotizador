<?php
require_once("class/class.php");
$tra=new Trabajo();



if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$tra->add_presupuesto();
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
	<h2>Agregar Presupuesto</h2>



<form action="" name="form" method="post">

Presupuesto<br>
<input type="text" name="presupuesto" required>
<br>

<?php
$cliente=$tra->get_clientes();
?>

Cliente <br>
<select name="cliente">
	<option value="0"> --- Seleccione ---</option>
	<?php
		for($i=0;$i<sizeof($cliente);$i++)
		{
		?>
			<option value="<?php echo $cliente[$i]["cliente"];?>" title=""><?php echo $cliente[$i]["cliente"];?></option>

	<?php
		}
	?>
</select>
<br>

Proyecto<br>
 <input type="text" name="proyecto" required>
<br>

Fecha
<br>
<input type="date" name="fecha" required>
<br>

<br>
<input type="hidden" name="grabar" value="si">
<input type="submit" value="crear Presupuesto" title="Crear Presupuesto">


</form>

<br><br>
</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
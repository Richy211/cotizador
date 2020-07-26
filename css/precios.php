<?php
require_once("class/class.php");
$tra=new Trabajo();

?>
<!DOCTYPE HTML>
<html>
<head>
    
	<meta name="author" content="César Cancino" />

	<title>Sistema de Presupuesto</title>
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


	<h2>Precios de Materiales</h2>
<table>
<tr>
<hr />
<tr>
<td colspan="6" align="left">
<a href="add_material.php" title="Agregar Material"><b>Agregar Material</b></a></td>
<br>
</tr>

<hr>

</tr>
<hr>
<tr style="font-weight: bold;">
<td valign="top" align="center">Material</td>
<td valign="top" align="center">Marca</td>
<td valign="top" align="center">Terminaciones</td>
<td valign="top" align="center">ValorM2</td>
<td valign="top" align="center">Editar</td>
<td valign="top" align="center">Eliminar</td>
</tr>
<?php
$datos=$tra->get_precios();
for($i=0;$i<sizeof($datos);$i++)
{
?>
<tr style="background-color: #f0f0f0;">
<td valign="top" align="center"><?php echo $datos[$i]["material"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["marca"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["terminaciones"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["valorM2"];?></td>
<td valign="top" align="center"><a href="edit_material.php?id=<?php echo $datos[$i]["id_material"];?>" title="Editar <?php echo $datos[$i]["id_material"];?>">Editar</a></td>
<td valign="top" align="center"><a href="eliminar.php?id=<?php echo $datos[$i]["id_material"];?>" title="Eliminar<?php echo $datos[$i]["id_material"];?>">Eliminar</a></td>
</tr>
<?php
}
?>
</table>


</section>

<hr />

<footer>
	<?php require_once("footer.php");?>
</footer>

</body>
</html>
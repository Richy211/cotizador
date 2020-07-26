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


	<h2>Clientes</h2>
<table>
<tr>
<hr />
<tr>
<td colspan="6" align="left">
<a href="add_cliente.php" title="Agregar Cliente"><b>Agregar Cliente</b></a></td>
<br>
</tr>
<tr>
	<td></td>
</tr>

<tr>
	<td></td>
</tr>

<hr>

</tr>
<hr>
<tr style="font-weight: bold;">
<td valign="top" align="center">Cliente</td>
<td valign="top" align="center">Contacto</td>
<td valign="top" align="center">RUT</td>
<td valign="top" align="center">Direccion</td>
<td valign="top" align="center">Editar</td>
<td valign="top" align="center">Eliminar</td>
</tr>
<?php
$datos=$tra->get_clientes();
for($i=0;$i<sizeof($datos);$i++)
{
?>
<tr style="background-color: #f0f0f0;">
<td valign="top" align="center"><?php echo $datos[$i]["cliente"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["contacto"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["rut"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["direccion"];?></td>
<td valign="top" align="center"><a href="edit_cliente.php?id=<?php echo $datos[$i]["id_cliente"];?>" title="Editar <?php echo $datos[$i]["id_cliente"];?>">Editar</a></td>

<td valign="top" align="center"><a href="eliminar_cliente.php?id=<?php echo $datos[$i]["id_cliente"];?>" title="Eliminar<?php echo $datos[$i]["id_cliente"];?>">Eliminar</a></td>
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
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


	<h2>Presupuesto</h2>
<table>
<tr>
<hr />
<tr>
<td colspan="6" align="left">
<a href="add_presupuesto.php" title="Agregar Presupusto"><b>Agregar Presupuesto</b></a></td>
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
<td valign="top" align="center">Presupuesto</td>
<td valign="top" align="center">Cliente</td>
<td valign="top" align="center">Proyecto</td>
<td valign="top" align="center">Fecha</td>
<td valign="top" align="center">Completar Presupuesto</td>
<td valign="top" align="center">Editar</td>
<td valign="top" align="center">Eliminar</td>
</tr>
<?php
$datos=$tra->get_presupuesto();
for($i=0;$i<sizeof($datos);$i++)
{
?>
<tr style="background-color: #f0f0f0;">
<td valign="top" align="center"><?php echo $datos[$i]["presupuesto"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["cliente"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["proyecto"];?></td>
<td valign="top" align="center"><?php echo $datos[$i]["fecha"];?></td>

<td valign="top" align="center"><a href="completar_presupuesto.php?id=<?php echo $datos[$i]["id_presupuesto"];?>" title="Completar">Completar Presupuesto</a></td>

<td valign="top" align="center"><a href="editar_presupuesto.php?id=<?php echo $datos[$i]["id_presupuesto"];?>" title="Editar<?php echo $datos[$i]["id_presupuesto"];?>">Editar</a></td>

<td valign="top" align="center"><a href="eliminar_presupuesto.php?id=<?php echo $datos[$i]["id_presupuesto"];?>" title="Eliminar<?php echo $datos[$i]["id_presupuesto"];?>">Eliminar</a></td>
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
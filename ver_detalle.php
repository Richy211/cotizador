
<?php
require_once("class/class.php");
$tra=new Trabajo();

?>
<!DOCTYPE HTML>
<html>
<head>
    
	<meta name="author" content="Ricardo Llanos" />

	<title>Sistema de Presupuesto</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

	<div class="container">

<h1 class="text-center text-uppercase mt-3">Sistema de Gesti&oacute;n de Presupuesto</h1>


<nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Cotizador Gráfico</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="precios.php">Precios</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="presupuestos.php">Presupuestos</a>
      </li>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="clientes.php">Clientes</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
</nav>


	<h2 class="text-lowercase m-3">Ver Detalle</h2>

<a href="presupuestos.php" title="Agregar presupuesto" class="btn btn-success mb-3">Agregar Presupuesto</a>

<table class="table table-striped table-hover table-condensed">

<thead>
<th>Presupuesto</t>
<th>Cliente</t>
<th>material</t>
<th>Terminaciones</t>
<th>Valor M2</t>
<th>Cantidad</t>
<th>Total</t>
<td><a href="agregar_detalle.php?id=<?php echo $datos[$i]["id_presupuesto"];?>" class="btn btn-success btn-sm">Agregar + Detalles</a></t>
<td>&nbsp;</t>

</thead>
<?php
$sumaTotal=0;
$datos=$tra->get_detalle($id);
for($i=0;$i<sizeof($datos);$i++)
{
?>
<tr>
<td><?php echo $datos[$i]["presupuesto"];?></td>
<td><?php echo $datos[$i]["cliente"];?></td>
<td><?php echo $datos[$i]["material"];?></td>
<td><?php echo $datos[$i]["terminaciones"];?></td>
<td>$<?php echo$datos[$i]["valorM2"];?></td>
<td><?php echo $datos[$i]["cantidad"];?></td>


 <td><?php echo $datos[$i]["total"]; $sumaTotal+=$datos[$i]["total"];?></td> 

<td></td>

<td></td> 

<td></td>
</tr>

<?php
}
?>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
	<td>Sub-Total</td>
	<td>$<?php echo "" .number_format($sumaTotal);?></td>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	
	<td>IVA</td>
	<td>$<?php echo "" .number_format(($sumaTotal)*(0.19)); ?>
	<td></td>
	<td></td>
</tr>

<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
	<td></td>

	<td>Total</td>
	<td>$<?php echo "" .number_format(($sumaTotal)*(0.19)+($sumaTotal)); ?></td>


	<td></td>
	<td></td>
</tr>

</table>
<br>
<br>
<a href="index2.php?id=<?php echo $datos[0]["id_presupuesto"];?>" class="btn btn-primary btn-sm">Crear Cotizacion</a> 
<a href="index3.php?id=<?php echo $datos[0]["id_presupuesto"];?>" class="btn btn-success btn-sm">Orden de Produccion</a> 
<a href="index4.php?id=<?php echo $datos[0]["id_presupuesto"];?>" class="btn btn-danger btn-sm"> Guia de Despacho</a>

</section>


</div>
</body>
</html>
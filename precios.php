<?php
require_once("class/class.php");
$tra=new Trabajo();

?>
<!DOCTYPE HTML>
<html>
<head>
    
	<meta name="author" content="Ricardo Llanos" />

	<title>Sistema de Presupuesto</title>
<!-- <link rel="stylesheet" href="css/estilos.css">  -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


   <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">
</head>

<body>
	<div class="container">

<h1 class="text-center text-uppercase mt-3">Sistema de Gesti&oacute;n de Presupuesto</h1>

<nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><span class="fa fa-calculator"> </span> Cotizador Gráfico</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"> </span>
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

           <li class="nav-item">
        <a class="nav-link" href="clientes.php">Clientes</a>
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

<section id="contenido">


	<h2 class="text-lowercase m-3">Precios de Materiales</h2>

 <a href="add_material.php" title="Agregar Material" class="btn btn-success"><b>Agregar Material</b></a> 
<table class="table table-striped table-hover table-condensed mt-3">
<tr>

<thead class="bg-info">
<th>Material</th>
<th>Marca</th>
<th>Terminaciones</th>
<th>ValorM2</th>
<th>Editar</th>
<th>Eliminar</th>
</thead>
<?php
$datos=$tra->get_precios();
for($i=0;$i<sizeof($datos);$i++)
{
?>

<tr>
<td><?php echo $datos[$i]["material"];?></td>
<td><?php echo $datos[$i]["marca"];?></td>
<td><?php echo $datos[$i]["terminaciones"];?></td>
<td>$  <?php echo number_format($datos[$i]["valorM2"],0,"",".");?></td>
<td><a href="edit_material.php?id=<?php echo $datos[$i]["id_material"];?>"  title="Editar <?php echo $datos[$i]["id_material"];?>" class="btn btn-warning btn-sm"><span class="fa fa-edit" ml-3> </span> Editar</a></td>
<td valign="top" align="center"><a href="eliminar.php?id=<?php echo $datos[$i]["id_material"];?>" title="Eliminar<?php echo $datos[$i]["id_material"];?>" class="btn btn-danger btn-sm"><span class="fa fa-trash" ml-3> </span> Eliminar</a></td>
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
</div>
</body>
</html>
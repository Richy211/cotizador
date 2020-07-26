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

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


 <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">



</head>

<body>
	<div class="container">

<h1 class="text-center text-uppercase">Sistema de Gesti&oacute;n de Presupuesto</h1>

<nav>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php"><span class="fa fa-calculator"> </span> Cotizador Gráfico</a>
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
    </nav>
</nav>

<br>



	<h2 class="text-center text-lowercase">Editar Materiales</h2>



<form action="" name="form" method="post">

<div class="row">
	<div class="derecha col-md-9">

<div class="form-group row">
	<label for="Material" class="control-label col-md-2">Material</label>
	<div class="col-md-7">
		<input type="text" class="form-control" name="material" value="<?php echo $datos[0]["material"];?>" >
	</div>
</div>

<div class="form-group row">
	<label for="Marca" class="control-label col-md-2">Marca</label>
	<div class="col-md-7">
		<input type="text" class="form-control" name="marca" value="<?php echo $datos[0]["marca"];?>">
	</div>
</div>

<div class="form-group row">
	<label for="Terminaciones" class="control-label col-md-2">Terminacoines</label>
	<div class="col-md-7">
		 <input type="text" class="form-control" name="terminaciones" value="<?php echo $datos[0]["terminaciones"];?>">
	</div>
</div>

<div class="form-group row">
	<label for="ValorM2" class="control-label col-md-2">ValorM2</label>
	<div class="col-md-7">
		<input type="text" class="form-control" name="valorM2" value="<?php echo $datos[0]["valorM2"];?>">
	</div>
</div>


<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="submit" class="btn btn-success" value="Editar Material" title="Editar material">

</form>
	</div>


<div class="izquierda col-md-3">
	<img src="images/material.jpg" alt="Material" width="400px" align="right">
</div>

</div>


</div>
</body>
</html>
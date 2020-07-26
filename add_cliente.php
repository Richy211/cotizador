<?php
require_once("class/class.php");
$tra=new Trabajo();
if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
	$tra->add_cliente();
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<title>agregar cliente</title>
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
  <a class="navbar-brand" href="index.php"> <span class="fa fa-calculator"> </span> Cotizador Gráfico</a>
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

<h1 class="text-center m-5">Clientes</h1>
<div class="row">

<div class="derecha col-md-9">


<form action="" name="form" method="post" class="">
  
<div class="form-group row">
<label form="Cliente" class="control-label col-md-2">Cliente</label>
<div class="col-md-7">
	<input type="text" name="cliente" required class="form-control" placeholder="Cliente">
</div>
</div>


<div class="form-group row">
<label for="contacto" class="control-label col-md-2">Contacto</label>
	<div class="col-md-7">
	<input type="text" name="contacto" class="form-control" placeholder="Contacto" required>
	</div>
</div>

<div class="form-group row">
	<label for="rut" class="control-label col-md-2">Rut</label>
	<div class="col-md-7">
		 <input type="text" name="rut" class="form-control" placeholder="Rut" required>
	</div>
	
</div>

<div class="form-group row">
	<label for="Direccion" class="control-label col-md-2">Direccion</label>
	<div class="col-md-7">
		<input type="text" name="direccion" class="form-control" placeholder="Direccion" required>
	</div>
	
</div>

<div class="form-group row">
	<label for="Giro" class="control-label col-md-2">Giro</label>
	<div class="col-md-4">
		<input type="text" name="giro" class="form-control" placeholder="Giro" required>
	</div>
</div>

<br>
<input type="hidden" name="grabar" value="si">
<input type="submit" value="crear Cliente" title="Crear Cliente" class="btn btn-success">
</form>

</div>

<div class="izquierda col-md-3">

<img src="images/clientes.jpg" alt="imagen de clientes" width="400px" align="right">

</div>
</div>

<footer>
	<?php require_once("footer.php");?>
</footer>



</body>
</html>
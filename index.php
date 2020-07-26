
<?php
require_once("class/class.php");
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Sistema de Presupuesto</title>
	<!-- <link rel="stylesheet" href="css/estilos.css"> -->

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

   <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
       <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
     rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
     crossorigin="anonymous">


</head>
<body>


<div class="container">

	<h1 class="text-center text-uppercase">Sistema de Gestión de Presupuesto</h1>

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
        <a class="nav-link" href="presupuestos.php">Presupuesto</a>
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

<h2 class="text-center m-5">Bienvenido a nuestro Software</h2>
<div class="container-fluid">
<div class="row">

	<div class="derecha col-md-6">
		<h3> Materiales y terminaciones</h3>
		<p>En nuestro mercado existen numerosos tipos de materiales de impresión digital, estos vienen de diferentes partes del mundo, ya sea Alemania, China, o EEUU.</p>
		<img class="img-responsive" src="images/cotizando.jpg" width="100%">
	</div>

	<div class="izquierda col-md-6">
		<h3>Creación de Presupuesto</h3>
		<p>Este software lo guiará paso a paso en la creación del presupuesto de gráfica publicitaria, para ello cuenta con mantenedores de información necesaria para la estructura de nuestra cotización.</p>

		<h3>ingresar cliente</h3>
		<p>Si es un cliente nuevo le recomendamos que lo ingrese antes de crear el presupuesto, para tener los datos del cliente.
			<br>
			<a href="add_cliente.php" class="btn btn-warning mt-2">Ingresar Cliente nuevo</a></p>

			<br>
		<h3>Crear Presupuseto</h3>
		<p>En esta sección podrá crear el presupuesto para poder enviarlo al cliente por correo electróninco, podrá crear Orden de porducción y guia de despacho.
		<br> <a href="add_presupuesto.php" class="btn btn-warning mt-2">Crear Presupuesto.</a></p>

</div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<footer>
	<?php require_once("footer.php");?>
</footer>

	

</body>
</html>
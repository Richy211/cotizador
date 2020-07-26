<?php
require_once("class/class.php");
$tra=new Trabajo();
$datos=$tra->get_presupuesto_por_id($_GET["id"]);
//print_r($datos);

if(isset($_POST["grabar"]) and $_POST["grabar"]=="si")
{
    $tra->add_detalle();



 	 exit;  


}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
	

	<title>agregar material</title>

	<link rel="stylesheet" href="plugins/sweetalert2.min.css">

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
	<div class="container">

<h1 class="text-center text-uppercase">Sistema de Gesti&oacute;n de Presupuesto</h1>


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
    </nav>
</nav>

<h2 class="text-center m-5">Agregar Detalle al Presupuesto</h2>

<div class="row">
	<div class="derecha col-md-9">

<form action="" name="form" method="post">
<div class="form-group row">
	<label for="Presupuesto" class="control-label col-md-2">Presupuesto</label>
	<div class="col-md-7">
		<input type="text" name="presupuesto" 
		class="form-control"value="<?php echo $datos[0]["presupuesto"]?>"> 
	</div>
</div>

<div class="form-group row">
	<label for="id_presupusto" class="control-label col-md-2"> id Presupuesto</label>
	<div class="col-md-7">
		<input type="text" name="id_presupuesto" class="form-control" value="<?php echo $datos[0]["id_presupuesto"]?>">
	</div>
</div>

<div class="form-group row">
	<label for="Cliente" class="control-label col-md-2">Cliente</label>
	<div class="col-md-7">
		 <input type="text" name="cliente" class="form-control" value="<?php echo $datos[0]["cliente"]?>">
	</div>
</div>



<?php
$precios=$tra->get_precios();
?>

<div class="form-group row">
	<label for="Materiales" class="control-label col-md-2">Materiales</label>
	<div class="col-md-7">
		<select name="material">
	<option value="0"> --- Seleccione ---</option>
	<?php
		for($i=0;$i<sizeof($precios);$i++)
		{
		?>
			<option value="<?php echo $precios[$i]["material"];?>" 
				title=""><?php echo $precios[$i]["material"];?></option>

	<?php
		}
	?>
</select>

	</div>
</div>

<!-- <div class="form-group row">
	<label for="Material" class="control-label col-md-2">Material</label>
	<div class="col-md-7">
		 <input type="text" name="material" class="form-control" placeholder="Material" required>
	</div>
</div> -->

<div class="form-group row">
	<label for="Terminaciones" class="control-label col-md-2">Terminaciones</label>
	<div class="col-md-7">
		<input type="text" name="terminaciones" class="form-control" placeholder="Terminaciones" required>
	</div>
</div>



<div class="form-group row">
	<label for="Valor M2" class="control-label col-md-2">Valor M2</label>
	<div class="col-md-7">
		<input type="text" name="valorM2" id="valorM2"
		class="form-control"	
		value="<?=$valorM2?>" >
	</div>
</div>

<div class="form-group row">
	<label for="Cantidad" class="control-label col-md-2">Cantidad</label>
	<div class="col-md-7">
		<input type="text" name="cantidad"  id="cantidad" class="form-control"
		 value="<?=$cantidad?>">
	</div>
</div>

<?php

$cantidad=0; $valorM2=0; $total=0;

if(isset($_POST["form"])){

	//ENTRADA

	$cantidad=$_POST["cantidad"];
	$valorM2=$_POST["valorM2"];

	//proceso

	$total = $cantidad * $valorM2;
}

?>


<div class="form-group row">
	<label for="Total" class="control-label col-md-2">Total</label>
	<div class="col-md-7">
		<input type="text" name="total" id="total" 
		class="form-control" value="<?=$total?>">

	</div>
</div>

<input type="hidden" name="grabar" value="si">
<input type="hidden" name="id" value="<?php echo $_GET["id"];?>">
<input type="submit" value="Editar Material" id="btn1" title="Editar material" class="btn btn-success">
</form>
</div>


<div class="izquierda col-md-3">
	<img src="images/presupuesto.jpg" alt="" width="400px" align="right">
</div>
</div>




<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="plugins/sweetalert2.all.min.js"></script>
<!-- <script src="codigo.js"></script>  -->

</body>
</html>
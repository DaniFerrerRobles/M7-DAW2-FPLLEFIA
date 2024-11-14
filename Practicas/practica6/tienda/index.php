<!-- CAPTURO VALORES DEL FORMULARIO -->
 <?php
$nombre = $_POST['nombre'];
$telefono = $_POST["telefono"];
$foto = $_POST["foto"];
?>

<!DOCTYPE html>
<html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Mercadona productos </title>
 <link
href="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-
1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
crossorigin="anonymous">
</head>
 <body>

<?php 

echo $nombre;

require "includes/header.php" ?>

<?php include "includes/funciones.php"?>


<div class="container">

<?php 



muestraInfoContacto($nombre, $telefono, $foto)?>

<div>
<h2>Productos disponibles </h2>

<?php 

include 'data/productos.php';

generarTablaProductos($productos)?>

</div>


<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-
target="#staticBackdrop">
</button>

 <!-- - Modal que al clicar aparece info de contacto--> -->

 <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-
keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-
hidden="true">

 <div class="modal-dialog">
 <div class="modal-content">
 <div class="modal-header">
 <h5 class="modal-title" id="staticBackdropLabel">Información de
contacto </h5>

 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-
label="Close"> </button>

</div>
<div class="modal-body">


</div>
</div>
</div>
 </div>

 <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    
</div>
    <?php include_once "includes/footer.php"?>
</div>

<script
src="https: /cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-
ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
crossorigin="anonymous"> </script>
</body>
</html>
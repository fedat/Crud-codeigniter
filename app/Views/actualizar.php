<?php
$clienteId=$datos[0]['cliente_id'];
$nombreCliente=$datos[0]['nombre_cliente'];
$cedulaCliente=$datos[0]['cedula_cliente'];
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>CRUD codeigniter</title>
</head>

<body>

    <div class="container">
        <h1>ACTUALIZAR REGISTRO</h1>
        <div class="row">
            <div class="col-sm-12">
            
            <form method="POST" action="<?php echo base_url().'/update' ?>">
                   
                    <input type="text" id="id" nombre="clienteId" hidden=""
                    value="<?php echo $clienteId ?>">

                    <label for="nombreCliente">Nombre cliente</label>
                    <input type="text" name="nombreCliente" id="nombreCliente" class="form-control"
                    value="<?php echo $nombreCliente ?>">

                    <label for="cedulaCliente">Cedula cliente</label>
                    <input type="text" name="cedulaCliente" id="cedulaCliente" class="form-control"
                    value="<?php echo $cedulaCliente ?>">
                    <br>
                    <button class="btn btn-warning">Guardar</button>
                </form>
            </div>
        </div>
    </div>
    
</body>

</html>
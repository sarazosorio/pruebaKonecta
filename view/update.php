<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ingresar producto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos formulario -->    
    <link href="css/estilos.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/metro/4.1.12/css/metro-icons.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid" id="banner">
            <div id="cabecera" class="col-xs-12 col-sm-12 col-md-12">
                <div class="row">                   
                    <div id="titulo" class="col-xs-2 col-sm-2 col-md-6 ">
                        <strong>
                            <h1>Ingresar producto</h1>
                        </strong>
                    </div>
                </div>
            </div>
        </div>

        <div id="wrapper">
        <?php if($data['id']!=""){ ?>
            <form action="index.php?m=update&id=<?php echo $data['id']?>" method="post">
            <?php } ?>
            
            
            <!-- Page Content -->
                <div id="page-content-wrapper">
                    <div class="container-fluid">
                        <p></p>
                    </div>

                    
                    <!--nombre y apellido-->
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="">
                                <strong>Nombre Producto</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtNombreProducto" name="txtNombreProducto" value="<?php echo $data['nombre_producto']; ?>" >
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="">
                                <strong>Referencia</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtReferencia" name="txtReferencia" value="<?php echo $data['referencia']; ?>">
                        </div>
                    </div>
                    <br>
                    <!--tipo de documento y numero de documento-->
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtNombre">
                                <strong>Precio</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtPrecio" name="txtPrecio" value="<?php echo $data['precio']; ?>" >
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtPeso">
                                <strong>Peso</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtPeso" name="txtPeso" value="<?php echo $data['peso']; ?>">
                        </div>
                    </div>
                    <br>
                    <!--telefono y correo electronico-->
                    <div class="row">
                    <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtCategoria">
                                <strong>Categoria</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtCategoria" name="txtCategoria" value="<?php echo $data['categoria']; ?>">
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtStock">
                                <strong>Stock</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtStock" name="txtStock" value="<?php echo $data['stock']; ?>">
                        </div>
                    </div>
                    <br>
                    <!--fecha de ingreso y genero-->
                    
                    <br>

                    <div class="form-group">
                        <div class="col-md-12 col-md-off-set-3">    
                            <input type="submit" class="btn btn-primary form-control" name="" value="Actualizar">    
                            <a href="index.php?m=callUpdate&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>              
                        </div>
                    </div>                   
                    
                </div>
        </form>     
            
            
        </div>
    </div>
   
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <!-- Menu Toggle Script -->
    

</body>

</html>


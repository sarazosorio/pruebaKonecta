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
        <?php if($data['id']==""){ ?>
            <form action="index.php?m=save" method="post">
            <?php } ?>
            <a href="index.php?m=index" class="btn btn-danger">Listar</a>                 
            
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
                            <input type="text" class="form-control CajasDeTexto" id="txtNombreProducto" name="txtNombreProducto" >
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="">
                                <strong>Referencia</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtReferencia" name="txtReferencia">
                        </div>
                    </div>
                    <br>
                    <!--tipo de documento y numero de documento-->
                    <div class="row">
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtNombre">
                                <strong>Precio</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtPrecio" name="txtPrecio" >
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtPeso">
                                <strong>Peso</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtPeso" name="txtPeso" >
                        </div>
                    </div>
                    <br>
                    <!--telefono y correo electronico-->
                    <div class="row">
                    <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtCategoria">
                                <strong>Categoria</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtCategoria" name="txtCategoria" >
                        </div>
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtStock">
                                <strong>Stock</strong>
                            </label>
                            <input type="text" class="form-control CajasDeTexto" id="txtStock" name="txtStock" >
                        </div>
                    </div>
                    <br>
                    <!--fecha de ingreso y genero-->
                    <div class="row">
                                    
                        <div class="col-xs-12 col-md-6 col-sm-6">
                            <label for="txtFechaCreacion">
                                <strong>Fecha creación</strong>
                            </label>
                            <input type="date" class="form-control CajasDeTexto" id="txtFechaCreacion" name="txtFechaCreacion" >
                        </div>
                        
                    </div>
                    <br>

                    <div class="form-group">
                        <div class="col-md-12 col-md-off-set-3">    
                            <input type="submit" class="btn btn-primary form-control" name="" value="registrar">                  
                        </div>
                    </div>  
                    </table>
                    
                    
                </div>
        </form>     
            
            
        </div>
    </div>
   
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery-3.2.1.min.js"></script>
    <!-- Menu Toggle Script -->
    

</body>

</html>


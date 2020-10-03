<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/mycss.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
    <body>
        <header class="container-fluid backg1" >
           MENU PRINCIPAL
        </header></br>
        <div class="container">
            <ol class="breadcrumb">
                <li><a href="#">Paciente </a></li>
                <li><a href="#">Gestionar </a></li>
            </ol>

            <div class="row">
                <div class="col-xs-12 col-md-2 col-lg-2">
                    <div class="topnav">
                        <div class= "row">
                            <table class="table table-hover " >
                                <tr class="info"> 
                                    <th class="col-2" id="accion">Acciones</th>                                    
                                </tr>
                                <tbody>
                                    <tr>
                                        <td> <a href="index.php?controller=paciente&action=crearPaciente" style = "width:80%;">Agregar Paciente</a></td>        
                                    </tr>
                                </tbody> 
                            </table>
                        </div>                    
                    </div>
                </div>
           
            <div class= "col-xs-12 col-md-12 col-lg-10">
            <div>
            <h2>Pacientes</h2>
            <hr/>
            </div>
            <div class="row">
            <div class="container">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr class="info"> 
                            <th class="col-2">Documento</th>
                            <th class="col-3">Nombre</th>
                            <th class="col-2">Telefono</th>
                            <th class="col-2">EPS</th>
                            <th class="col-1">Genero</th>
                            <th class="col-2">Opciones</th>
                        </tr>
                    <?php
if (isset($allPacientes)) { //viene de la clase paciente controller
        foreach ($allPacientes as $row) { //recorremos el array de objetos y obtenemos el valor de las propiedades
            ?>
                        <div class="row">
                           <tr>
                                <th class="col-2 color"><?php echo $row->documento ?></th>
                                    <th class="col-3 color"><?php echo $row->nombre; ?></th>
                                    <th class="col-2 color"><?php echo $row->telefono; ?></th>
                                    <th class="col-2 color"><?php echo $row->eps; ?></th>
                                    <th class="col-1 color"><?php echo $row->genero; ?></th>
                                    <th class="col-2 color">
                                    <a href = "<?php echo "index.php?controller=Paciente&action=detailView&id=" . $row->documento; ?>" ><span class="glyphicon glyphicon-search"></span></a>
                                    <a href = "<?php echo "index.php?controller=Paciente&action=editView&id=" . $row->documento; ?>" ><span class="glyphicon glyphicon-edit"></span></a>
                                    <a class="btn eliminar_btn" itemController="Paciente" itemEliminar="<?php echo  $row->documento; ?>" href="javascript:void(0);" data-toggle="modal" data-toggle="tooltip" data-target="#Eliminar" data-placement="bottom" title="Eliminar"><span class="glyphicon glyphicon-remove"></span></a>
                                 
                                </th>
                          </tr>
                            
                        </div>
                        <?php
        }
    }
?>
   
                        </table>
                    </div>
                
                </div>
</div>
                </div>
            </div>  <!-- row -->
            <br><br>

        </div>
        </div>
        </div>
            </div>  <!-- row -->
            <br><br>
            <div id="Eliminar" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3>Eliminar Elemento</h3>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <h5><p>¿Desea eliminar el registro?</h5></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="submit" id="btn_eliminar_modal" class="btn btn-danger eliminar" data-dismiss="modal" data-toggle="modal" value="Aceptar">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                </div>
                            </div>
                        </div>
                    </div>

        </div>
        <footer class="container-fluid backg1">
            Ejemplo PHP POO/MVC/PDO - <?php echo date("Y"); ?>
        </footer>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/myscript.js"></script>
    </body>
</html>

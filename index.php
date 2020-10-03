<?php
    require_once('config/dbConfig.php');
    require_once('controllers/ProductoController.php');

    $controller= new ProductoController();
    
    if(!empty($_REQUEST['m'])){
        $metodo=$_REQUEST['m'];
        if (method_exists($controller, $metodo)) {
            $controller->$metodo();
        }else{
            $controller->index();
        }
    }else{
        $controller->index();
    }




?>
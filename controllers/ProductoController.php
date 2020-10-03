<?php 
    require_once('models/Producto.class.php');

    class ProductoController{

        private $model_product;
        private $model_p;
        

        function __construct(){
            $this->model_product = new Producto();
        }

        function index(){
            $query =$this->model_product->getProductos();
           
            include_once('view/list.php');           
        }

        function create(){        
           
            include_once('view/registrar.php');           
        }
        
        function producto(){
            $data=NULL;
            if(isset($_REQUEST['id'])){
                $data=$this->model_product->get_id($_REQUEST['id']);    
            }
            $query=$this->model_product->get();
           
        }

        function save(){
            
            $data['nombre_producto']=$_REQUEST['txtNombreProducto'];
            $data['referencia']=$_REQUEST['txtReferencia'];
            $data['precio']=$_REQUEST['txtPrecio'];       
            $data['peso']=$_REQUEST['txtPeso'];
            $data['categoria']=$_REQUEST['txtCategoria'];
            $data['stock']=$_REQUEST['txtStock'];
            $data['fecha_creacion']=$_REQUEST['txtFechaCreacion'];
           

            $this->model_product->create($data);
            
            header("Location:index.php");

        }

        function confirmarDelete(){

            $data=NULL;     
          
            $data['id']=$_REQUEST['id'];
            $this->model_product->delete($data['id']);        
          
            include_once('view/index.php');
        }

        function callUpdate(){
            $data=$this->model_product->get_id($_REQUEST['id']);
            include_once('view/update.php');
        }

        function update(){
            $data['nombre_producto']=$_REQUEST['txtNombreProducto'];
            $data['referencia']=$_REQUEST['txtReferencia'];
            $data['precio']=$_REQUEST['txtPrecio'];       
            $data['peso']=$_REQUEST['txtPeso'];
            $data['categoria']=$_REQUEST['txtCategoria'];
            $data['stock']=$_REQUEST['txtStock'];
           

            $id=$_REQUEST['id'];
            $this->model_product->update($data,$id);

            include_once('view/registrar.php');
            

        }
       


    }
?>
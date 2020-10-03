<?php
    
    class Producto{
        private $DB;
        private $productos;

        function __construct(){
            $this->DB=Database::connect();
        }

        function getProductos(){
            $sql= 'SELECT * FROM producto ORDER BY id DESC';
            $fila=$this->DB->query($sql);
            $this->productos=$fila;
            return  $this->productos;
        }

        function create($data){

            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="INSERT INTO producto(nombre_producto,referencia,precio,peso,categoria,stock,fecha_creacion)VALUES (?,?,?,?,?,?,?)";

            $query = $this->DB->prepare($sql);
            $query->execute(array($data['nombre_producto'],$data['referencia'],$data['precio'],$data['peso'],$data['categoria'],$data['stock'],$data['fecha_creacion']));
            Database::disconnect();       

        }
        

        function update($data,$id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE producto  set  nombre_producto=?, referencia =?, precio=?,peso=?, categoria=?, stock=? WHERE id = ? ";
            $q = $this->DB->prepare($sql);
            $q->execute(array($data['nombre_producto'],$data['referencia'],$data['precio'],$data['peso'],$data['categoria'],$data['stock'], $id));
            Database::disconnect();

        }

        function delete($date){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="DELETE FROM producto where id=?";
            $q=$this->DB->prepare($sql);
            $q->execute(array($date));
            Database::disconnect();
        }

        function get_id($id){
            $this->DB->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "SELECT * FROM producto where id = ?";
            $q = $this->DB->prepare($sql);
            $q->execute(array($id));
            $data = $q->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
    }
?>


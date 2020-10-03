<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>registro de productos</h2>
        
    </div>
    <div class="container">
        <table class="table table-striped ">
            <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>referencia</th>
                    <th>precio</th>
                    <th>peso</th>
                    <th>categoria</th>
                    <th>stock</th>
                    <th>fecha creacion</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($query as $data): ?>
                    <tr>
                        <th><?php echo $data['id']; ?></th>
                        <th><?php echo $data['nombre_producto']; ?></th>
                        <th><?php echo $data['referencia']; ?></th>
                        <th><?php echo $data['precio']; ?></th>
                        <th><?php echo $data['peso']; ?></th>
                        <th><?php echo $data['categoria']; ?></th>
                        <th><?php echo $data['stock']; ?></th>
                        <th><?php echo $data['fecha_creacion']; ?></th>
                        <th>
                            <a href="index.php?m=callUpdate&id=<?php echo $data['id']?>" class="btn btn-primary">Editar</a>
                            <a href="index.php?m=confirmarDelete&id=<?php echo $data['id']?>" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php?m=create" class="btn btn-danger">Registrar</a>
    </div>
    
</div>
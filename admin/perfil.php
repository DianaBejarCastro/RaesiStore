<?php
require_once "../config/conexion.php";
include("vistaAdmin/header.php");
?>
<div class="card">
    <div class="card-body">
        <h4>Datos de Usuario</h4>
        <hr>
        <?php
        $id = $_SESSION['id'];
        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id=$id  ");
        
        while($data = $query->fetch_array()){
            
            ?>

        <dl class="row">
            <dt class="col-sm-3">Nombre:</dt>
            <dd class="col-sm-5"><?php echo $data['nombre']; ?></dd>
            <dd class="col-sm-2"></dd>

            <dt class="col-sm-3">Nombre de Usuario:</dt>
            <dd class="col-sm-5"><?php echo $data['usuario']; ?></dd>
            <dd class="col-sm-2"><button type="button" class="btn btn-success editbtnusu" data-toggle="modal"
                    data-target="#editaru1">
                    <i class="fas fa-pen"></i> editar
                </button></dd>


        </dl>
        <?php
        } 
    
?>

    </div>
</div>

<div id="editaru1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Editar Datos de usuario </h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <?php
        $id = $_SESSION['id'];
        $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id=$id  ");
        
        while($data = $query->fetch_array()){?>
                <form action="editar.php?accion=usu" method="POST">

                    <input type="hidden" name="id" id="update_id" value="<?php echo $data['id']; ?>">
                    <div class="form-group">
                        <label for="nombre"> Nombre</label>
                        <input id="nombreeditarusu" class="form-control" type="text" name="nombreeditarusu"
                            value="<?php echo $data['nombre']; ?>" required>
                    </div>

                    <div class="form-group">
                        <label for="nombre"> Nombre de Usuario</label>
                        <input id="nombreusuarioeditarusu" class="form-control" type="text" name="nombreusuarioeditarusu"
                            value="<?php echo $data['usuario']; ?>" required>
                    </div>
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                    <?php
        } 
    
?>

                </form>
            </div>
        </div>
    </div>
</div>
<?php include("vistaAdmin/footer.php"); ?>
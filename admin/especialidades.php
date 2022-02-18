<?php
require_once "../config/conexion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $query = mysqli_query($conexion, "INSERT INTO especialidades(especialidad) VALUES ('$nombre')");
        if ($query) {
            header('Location: especialidades.php');
        }
    }
}
  

include("vistaAdmin/header.php");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Especialidades</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="abrirEspecialidad"><i
            class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="tablaespecialidades" class="table table-hover table-striped table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM especialidades ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) {
                        if($data['id']!=1){?>
                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['especialidad']; ?></td>
                        <td>
                            <button type="button" class="btn btn-success editbtn" data-toggle="modal" data-target="#editar">  
                            <i class="fas fa-pen"></i>
                            </button>
                            <form method="post" action="eliminar.php?accion=esp&id=<?php echo $data['id']; ?>"
                                class="d-inline eliminar">
                                <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                    <?php } 
                    else{  
                    }
                        } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<div id="especialidades" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Nueva Especialidad</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Especialidad"
                            required>
                    </div>
                    <button class="btn btn-success" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- editar -->
<div id="editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Editar Especialidad</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editar.php?accion=esp" method="POST">
                
                    <input type="hidden" name="id" id="update_id">

                    <div class="form-group">
                        <label for="nombre"> Nombre</label>
                        <input id="nombreeditar" class="form-control" type="text" name="nombreeditar"
                            required>
                    </div>
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>



<?php include("vistaAdmin/footer.php"); ?>
<?php
require_once "../config/conexion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $query = mysqli_query($conexion, "INSERT INTO telas(nombre, descripcion) VALUES ('$nombre', '$descripcion')");
        if ($query) {
            header('Location: telas.php');
        }
    }
}
include("vistaAdmin/header.php");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Telas</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="abrirTela"><i
            class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="tablatelas" class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM telas ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>

                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td><?php echo $data['descripcion']; ?></td>
                        <td>
                        <button type="button" class="btn btn-success editbtnte" data-toggle="modal" data-target="#editar">  
                            <i class="fas fa-pen"></i>
                            </button>
                            <form method="post" action="eliminar.php?accion=tel&id=<?php echo $data['id']; ?>"
                                class="d-inline eliminar">
                                <button class="btn btn-danger" type="submit">
                                <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<div id="telas" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Registrar nuevo tipo de tela</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre"
                            required>
                    </div>
                    <div div class="form-group">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion"
                                    placeholder="Descripción" rows="3" required></textarea>
                            </div>
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
                <h5 class="modal-title" id="title">Editar Datos</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editar.php?accion=tel" method="POST">
                
                    <input type="hidden" name="id" id="update_id">

                    <div class="form-group">
                        <label for="nombre"> Nombre</label>
                        <input id="nombreeditarte" class="form-control" type="text" name="nombreeditarte"
                            required>
                    </div>
                    <div div class="form-group">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcioneditarte" class="form-control" name="descripcioneditarte"
                                    placeholder="Descripción" rows="3" required></textarea>
                            </div>
                        </div>
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("vistaAdmin/footer.php"); ?>
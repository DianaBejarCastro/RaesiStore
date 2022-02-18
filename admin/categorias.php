<?php
require_once "../config/conexion.php";
if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $estado = $_POST['estado'];
        $query = mysqli_query($conexion, "INSERT INTO categorias(categoria, estado) VALUES ('$nombre', '$estado')");
        if ($query) {
            header('Location: categorias.php');
        }
    }
}
include("vistaAdmin/header.php");
?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Categorias</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="abrirCategoria"><i
            class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="tablacategorias" class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Estado</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT * FROM categorias ORDER BY id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>

                    <tr>
                        <td><?php echo $data['id']; ?></td>
                        <td><?php echo $data['categoria']; ?></td>
                        <td><?php echo $data['estado']; ?></td>
                        <td>
                            <button type="button" class="btn btn-success editbtnca" data-toggle="modal"
                                data-target="#editar">
                                <i class="fas fa-pen"></i>
                            </button>
                            <form method="post" action="eliminar.php?accion=cli&id=<?php echo $data['id']; ?>"
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
<div id="categorias" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Nueva Categoria</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Categoria"
                            required>
                    </div>

                    <div class="form-group">
                        <div class="form-group">
                            <label for="estado">Estado</label>
                            <select id="estado" class="form-control" name="estado" required>
                                <option value="Disponible">Disponible</option>
                                <option value="No disponible">No disponible</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- editar -->
<div id="editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Editar Categoria</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editar.php?accion=cli" method="POST">

                    <input type="hidden" name="id" id="update_id">

                    <div class="form-group">
                        <label for="nombre"> Nombre</label>
                        <input id="nombreeditarca" class="form-control" type="text" name="nombreeditarca" required>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <label for="estado"></label>
                            <div class="col-md-6">
                            <div class="form-group">
                                <strong>Estado Actual</strong>
                                <p id="estadoeditarca" name="estadoeditarca"> </p>
                               
                            </div>
                        </div>
                        <strong>Elige el estado para cambiarlo</strong>
                            <select id="estadoeditarca" class="form-control" name="estadoeditarca" required>
                                <option value="Disponible">Disponible</option>
                                <option value="No disponible">No disponible</option>
                            </select>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("vistaAdmin/footer.php"); ?>
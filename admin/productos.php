<?php
require_once "../config/conexion.php";

if (isset($_POST)) {
    if (!empty($_POST)) {
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $color = $_POST['color'];
        $genero = $_POST['genero'];
        $precio = $_POST['precio'];
        $estado = $_POST['estado'];
        $talla = $_POST['talla'];
        $tela = $_POST['tela'];
        $categoria = $_POST['categoria'];
        $especialidad = $_POST['especialidad'];
        $img = $_FILES['foto'];
        $name = $img['name'];
        $tmpname = $img['tmp_name'];
        $fecha = date("YmdHis");
        $foto = $fecha . ".jpg";
        $destino = "../assets/img/" . $foto;

        $imgdos = $_FILES['fotodos'];
        $namedos = $imgdos['name'];
        $tmpnamedos = $imgdos['tmp_name'];
        $fotodos = $fecha ."2". ".jpg";
        $destinodos = "../assets/img/" . $fotodos;

        $imgtres = $_FILES['fototres'];
        $nametres = $imgtres['name'];
        $tmpnametres = $imgtres['tmp_name'];
        $fototres = $fecha ."3". ".jpg";
        $destinotres = "../assets/img/" . $fototres;

        $imgcuatro = $_FILES['fotocuatro'];
        $namecuatro = $imgcuatro['name'];
        $tmpnamecuatro = $imgcuatro['tmp_name'];
        $fotocuatro = $fecha ."4". ".jpg";
        $destinocuatro = "../assets/img/" . $fotocuatro;
        
        $query = mysqli_query($conexion, "INSERT INTO productos(nombre, descripcion, color, genero, precio, imagenuno, imagendos, imagentres, imagencuatro, estado, talla, id_tela, id_categoria, id_especialidad) VALUES ('$nombre', '$descripcion', '$color', '$genero', '$precio','$foto', '$fotodos','$fototres','$fotocuatro','$estado','$talla','$tela','$categoria', '$especialidad')");
        if ($query) {
            if (move_uploaded_file($tmpname, $destino)&& move_uploaded_file($tmpnamedos, $destinodos)&& move_uploaded_file($tmpnametres, $destinotres)&& move_uploaded_file($tmpnamecuatro, $destinocuatro)) {
                header('Location: productos.php');
            }
        }
        else{
            echo '<script language="javascript">alert("error");</script>';
        }
    }
}
include("vistaAdmin/header.php"); ?>
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Productos</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="abrirProducto"><i
            class="fas fa-plus fa-sm text-white-50"></i> Nuevo</a>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table id="tablaproductos" class="table table-hover table-bordered" style="width: 100%;">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Imagen</th>
                        <th style="display: none;">Imagendos</th>
                        <th style="display: none;">Imagentres</th>
                        <th style="display: none;">Imagencuatro</th>
                        <th>Nombre</th>
                        <th style="display: none;">Descripción</th>
                        <th style="display: none;" >Colores</th>
                        <th style="display: none;" >Genero</th>
                        <th style="display: none;">Precio</th>
                        <th style="display: none;">Estado</th>
                        <th style="display: none;">Talla</th>
                        <th style="display: none;">Tela</th>
                        <th style="display: none;" >Categoria</th>
                        <th style="display: none;" >Especialidad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = mysqli_query($conexion, "SELECT p.*, t.id AS id_tel, t.nombre AS nombretela, c.id AS id_cat, c.categoria, e.id AS id_esp, e.especialidad  FROM productos p INNER JOIN telas t ON t.id = p.id_tela INNER JOIN categorias c ON c.id = p.id_categoria INNER JOIN especialidades e ON e.id = p.id_especialidad ORDER BY p.id DESC");
                    while ($data = mysqli_fetch_assoc($query)) { ?>
                    <tr>
                    <td><?php echo $data['id']; ?></td>
                        <td><img class="img-thumbnail" src="../assets/img/<?php echo $data['imagenuno']; ?>" width="50">
                        </td>
                        <td style="display: none;"><img class="img-thumbnail" src="../assets/img/<?php echo $data['imagendos']; ?>" width="50">
                        </td>
                        <td style="display: none;"><img class="img-thumbnail" src="../assets/img/<?php echo $data['imagentres']; ?>" width="50">
                        </td>
                        <td style="display: none;"><img class="img-thumbnail" src="../assets/img/<?php echo $data['imagencuatro']; ?>" width="50">
                        </td>
                        <td><?php echo $data['nombre']; ?></td>
                        <td style="display: none;"><?php echo $data['descripcion']; ?></td>
                        <td style="display: none;" ><?php echo $data['color']; ?></td>
                        <td style="display: none;" ><?php echo $data['genero']; ?></td>
                        <td style="display: none;" ><?php echo $data['precio']; ?></td>
                        <td style="display: none;" ><?php echo $data['estado']; ?></td>
                        <td style="display: none;" ><?php echo $data['talla']; ?></td>
                        <td style="display: none;" ><?php echo $data['nombretela']; ?></td>
                        <td style="display: none;" ><?php echo $data['categoria']; ?></td>
                        <td style="display: none;" ><?php echo $data['especialidad']; ?></td>
                        <td>
                        <button type="button" class="btn btn-success editbtnpro" data-toggle="modal" data-target="#editar">  
                            <i class="fas fa-pen"></i>
                            </button>

                        <button type="button" class="btn btn-success infobtn" data-toggle="modal" data-target="#info">  
                        <i class="fas fa-plus"></i>
                        </button>

                            <form method="post" action="eliminar.php?accion=pro&id=<?php echo $data['id']; ?>"
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
<div id="productos" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Nuevo Producto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Nombre"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcion" class="form-control" name="descripcion"
                                    placeholder="Descripción" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input id="color" class="form-control" type="text" name="color" placeholder="Color(es)"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <select id="genero" class="form-control" name="genero" required>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Unisex">Unisex</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio: </label>
                                <input id="precio" class="form-control" type="text" name="precio"
                                    placeholder="Precio" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado">Estado: </label>
                                <input id="estado" class="form-control" type="text" name="estado"
                                    placeholder="Estado" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="talla">Talla: </label>
                                <input id="talla" class="form-control" type="text" name="talla"
                                    placeholder="Talla" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="tela">Tela</label>
                                <select id="tela" class="form-control" name="tela" required>
                                    <?php
                                    $telas = mysqli_query($conexion, "SELECT * FROM telas");
                                    foreach ($telas as $tel) { ?>
                                    <option value="<?php echo $tel['id']; ?>"><?php echo $tel['nombre']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="categoria">Categoria</label>
                                <select id="categoria" class="form-control" name="categoria" required>
                                    <?php
                                    $categorias = mysqli_query($conexion, "SELECT * FROM categorias");
                                    foreach ($categorias as $cat) { ?>
                                    <option value="<?php echo $cat['id']; ?>"><?php echo $cat['categoria']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="especialidad">Especialidad <small style="color:#FF0000;"> (*solo para
                                        uniformes medicos*) </small> </label>
                                <select id="especialidad" class="form-control" name="especialidad" required>
                                    <?php
                                    $especialidades = mysqli_query($conexion, "SELECT * FROM especialidades");
                                    foreach ($especialidades as $esp) { ?>
                                    <option value="<?php echo $esp['id']; ?>"><?php echo $esp['especialidad']; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagen">Foto 1</label>
                                <input type="file" class="form-control" name="foto" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagendos">Foto 2</label>
                                <input type="file" class="form-control" name="fotodos" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagentres">Foto 3</label>
                                <input type="file" class="form-control" name="fototres" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="imagencuatro">Foto 4</label>
                                <input type="file" class="form-control" name="fotocuatro" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="editar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Editar Producto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="editar.php?accion=pro" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="update_id">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input id="nombreeditpro" class="form-control" type="text" name="nombreeditpro" placeholder="Nombre"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea id="descripcioneditpro" class="form-control" name="descripcioneditpro"
                                    placeholder="Descripción" rows="3" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="color">Color</label>
                                <input id="coloreditpro" class="form-control" type="text" name="coloreditpro" placeholder="Color(es)"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="genero">Genero</label>
                                <select id="generoeditpro" class="form-control" name="generoeditpro" required>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Unisex">Unisex</option>


                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio (Bs.)</label>
                                <input id="precioeditpro" class="form-control" type="text" name="precioeditpro"
                                    placeholder="Precio" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="estado">Estado: </label>
                                <input id="estadoeditpro" class="form-control" type="text" name="estadoeditpro"
                                    placeholder="Estado" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="talla">Talla: </label>
                                <input id="tallaeditpro" class="form-control" type="text" name="tallaeditpro"
                                    placeholder="Talla" required>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit">Editar Producto</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="info" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Detalles del producto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="id" id="detalles_id">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Nombre: </strong>
                                <p id="nombredetallespro"  name="nombredetallespro"> </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Descripción: </strong> <p id="descripciondetallespro" name="descripciondetallespro"> </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Color: </strong>
                                <p id="colordetallespro" name="colordetallespro"> </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Genero: </strong>
                                <p id="generodetallespro" name="generodetallespro"> </p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Precio (Bs.) : </strong>
                                <p id="preciodetallespro" name="preciodetallespro"> </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Estado : </strong>
                                <p id="estadodetallespro" name="estadodetallespro"> </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Talla : </strong>
                                <p id="talladetallespro" name="talladetallespro"> </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Tela : </strong>
                                <p id="teladetallespro" name="teladetallespro"> </p>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Categoria : </strong>
                                <p id="categoriadetallespro" name="categoriadetallespro"> </p>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Especialidad (area medica) : </strong>
                                <p id="especialidaddetallespro" name="especialidaddetallespro"> </p>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include("vistaAdmin/footer.php"); ?>
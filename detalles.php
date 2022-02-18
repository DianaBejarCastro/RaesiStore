<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles</title>
    
 <!--css estilos-->
 <link href="assets/css/styless.css" rel="stylesheet">
	<link href="assets/css/contacto.css" rel="stylesheet">	
	<!-- Bootstrap -->
	<link href="assets/css/styles.css" rel="stylesheet">
	<!-- Animate -->
	<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <!-- icon -->
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

	
	<link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

	<link rel="stylesheet" href="./assets/css/glightbox.min.css">
	<link href="assets/css/sb-admin-2.min.css" rel="stylesheet">
	<!-- ------------------------------------------------------------------------- -->

</head>
<body>
<?php include("vistaWeb/cabezera.php")?>

<?php
if (isset($_GET)) {
    if (!empty($_GET['accion']) && !empty($_GET['id'])) {
        require_once "config/conexion.php";
        $id = $_GET['id'];
        if ($_GET['accion'] == 'pro') {
            $query = mysqli_query($conexion, "SELECT p.*, t.id AS id_tel, t.nombre AS nombretela, c.id AS id_cat, c.categoria, e.id AS id_esp, e.especialidad, t.descripcion AS descripciontela  FROM productos p INNER JOIN telas t ON t.id = p.id_tela INNER JOIN categorias c ON c.id = p.id_categoria INNER JOIN especialidades e ON e.id = p.id_especialidad WHERE p.id = $id");
            $result = mysqli_num_rows($query);
            if ($query) {
                while ($data = mysqli_fetch_assoc($query)) { ?>

<div class="row">
    <div class="col s12">
        <div class="action-btn-wrapper">
            <div class="fixed-action-btn my-custom-btn horizontal">
                <div class="btn-detalles">
                    <a type="button" href="<?=$_SERVER['HTTP_REFERER'] ?>"> <i class="fas fa-times x-detalles"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="portfolio-details" class="portfolio-details">
    <div class="container">

        <div class="row gy-3">

            <div class="col-lg-4">
                <div class="containes-img-detalles">
                    <div class="portfolio-details-slider swiper">
                        <div class="swiper-wrapper align-items-center">

                            <div class="swiper-slide">
                                <img alt="" src="assets/img/<?php echo $data['imagenuno']; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img alt="" src="assets/img/<?php echo $data['imagendos']; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img alt="" src="assets/img/<?php echo $data['imagentres']; ?>" />
                            </div>
                            <div class="swiper-slide">
                                <img alt="" src="assets/img/<?php echo $data['imagencuatro']; ?>" />
                            </div>



                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>



            <div class="col-lg-8">
                <div class="portfolio-info">
                    <h3><?php echo $data['nombre']; ?></h3>

                    <p>
                        <?php echo $data['descripcion']; ?>
                    </p>
                </div>
                <div class="portfolio-description">
                <ul>
                        <li><strong>Color(es): </strong><?php echo $data['color']; ?></li>
                        <li><strong>Genero: </strong><?php echo $data['genero']; ?></li>
                        <li><strong>Talla: </strong><?php echo $data['talla']; ?></li>
                        <li><strong>Estado: </strong><?php echo $data['estado']; ?></li>
                        <li><strong>Categoria: </strong><?php echo $data['categoria']; ?></li>
                        <li><strong>Tipo de Tela: </strong><?php echo $data['nombretela']; ?></li>
                        
                        <button type="button" class="btn btn-success infobtntela" data-toggle="modal" data-target="#infotela">  
                        <i class="far fa-eye"></i> Ver Detalles de tipo de tela
                        </button>
                        
                        <?php if($data['especialidad']!="Sin especialidad"){
                        ?> <li><strong>Especialidad: </strong><?php echo $data['especialidad']; ?></li>
                        <?php } 
                        ?>
                    </ul>
                    <hr>
                    <h2> <i class="fas fa-money-check-alt"></i> <strong>Precio: </strong><?php echo $data['precio']; ?></h2>
                </div>
            </div>

        </div>

    </div>
</section>
<div id="infotela" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-gradient-success text-white">
                <h5 class="modal-title" id="title">Detalles del tipo de tela</h5>
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
                                <strong>Tipo de Tela: </strong> <p> <?php echo $data['nombretela']; ?> </p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <strong>Descripción: </strong>  <p> <?php echo $data['descripciontela']; ?> </p>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php  }  
          }
            else{
                
                echo '<script language="javascript">alert("error sql");</script>';
            }
        }
    }
}
?>
<?php include("vistaWeb/pie.php")?>


<!-- jQuery Plugins -->
<!-- jQuery Plugins -->
<!-- Bootstrap core JavaScript-->
<script src="assets/js/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/glightbox.min.js"></script>
<script src="assets/js/swiper-bundle.min.js"></script>

<script src="assets/js/scripts.js"></script>

<script src="https://kit.fontawesome.com/e752e02468.js" crossorigin="anonymous"></script>
</body>

</html>
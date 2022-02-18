<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CategoriaPantalon | Raesi</title>
  
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
<?php 
include("vistaWeb/cabezera.php")?>
<?php require_once "config/conexion.php";?>


  <section class="hero hero-pantalones d-flex justify-content-center align-items-center">
    <div class="container position-relative" data-aos="zoom-in" data-aos-delay="100">
      <h1>Categoria Pantalones</h1>
      <h2>No es solo ropa. Es tu personalidad en la pasarela de la vida. Empoderate con estilo.</h2>
    </div>
  </section>

  <section id="portfolio" class="portfolio">

<div class="col-sm-9 ">
  <div class="features_items">
      <section class="py-5">
      <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-2 row-cols-xl-3 justify-content-center">
            
          
          <?php
        $query = mysqli_query($conexion, "SELECT p.*, c.id AS id_cat, c.categoria FROM productos p INNER JOIN categorias c ON c.id = p.id_categoria WHERE categoria='pantalones'");
        while($data = $query->fetch_array()){?>
          <div class="col mb-5 productos" category="<?php echo $data['categoria']; ?>">
                          <div class="card h-100">

                          


                          <div class="product-image-wrapper">
                           <div class="single-products">


                      <div class="productinfo text-center">
                              <img class="img-fluid" alt="" heigth="150px" width="150px"
                                  src="assets/img/<?php echo $data['imagenuno']; ?>" />
                          </div>



                          <div class="portfolio-info">
                              <p><?php echo $data['nombre'] ?></p>
                              <div class="portfolio-links">
                                  <a type="button" class="detallesbtn"
                                      href="detalles.php?accion=pro&id=<?php echo $data['id']; ?>"" title=" More
                                      Details"> ver detalles</a>
                              </div>
                          </div>

                          <p><?php echo $data['nombre'] ?></p>
                          </div>
                      </div>

                             
                             
                          </div>
                      </div>
              <?php  }
              ?>

          </div>
      </div>
  </section>
    </div>
     
  
  </div>

</section>
<?php include("VistaWeb/pie.php")?>
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto | Raesi</title>
  <!--css estilos-->
  <link href="assets/css/styless.css" rel="stylesheet">
	<link href="assets/css/contacto.css" rel="stylesheet">	
    <link rel="stylesheet" href="assets/css/whats.css">


 <link rel="stylesheet" href="assets/css/whats2.css">
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
<?php include("vistaWeb/carrousel.php")?>


<!--whatsapp-->
<div class="nav-bottom">
           <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
            <div class="popup-whatsapp fadeIn">
                <div class="content-whatsapp -top"><button type="button" class="closePopup">
                      <i class="material-icons icon-font-color">close</i>
                    </button> 
                  
                   <p>  	<img src="./assets/recursos-img/logotipo.png" width="50">  Hola, ¿en que podemos ayudarle? </p>
                   
                </div>
                <div class="content-whatsapp -bottom">
                  <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />
                   
                   
                  
          
                    <button class="send-msPopup" id="send-btn" type="button">
                        <i class="material-icons icon-font-color--black">send</i>
                    </button>

                </div>
            </div>
            <button type="button" id="whats-openPopup" class="whatsapp-button">
                <div class="float" >
  <i class="fa fa-whatsapp my-float"></i></div>
            </button>
            <div class="circle-anime"></div>
        </div>
        <!-- fin whatsapp-->

    <section id="portfolio" class="portfolio">

        <div class="container" data-aos="fade-up">
        <section id="popular-courses" class="courses">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>GENERO</h2>
                    </div>

                    <div class="row" data-aos="zoom-in" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <a style="border:none;" href="categoria-m.php"><img
                                        src="assets/recursos-img/mujercategoria.png" class="img-fluid zoom"
                                        alt="..."></a>
                            </div>
                        </div> <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="course-item">
                                <a style="border:none;" href="categoria-h.php"><img
                                        src="assets/recursos-img/varoncategoria.png" class="img-fluid zoom"
                                        alt="..."></a>
                            </div>
                        </div> <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="course-item">
                                <a style="border:none;" href="categoria-u.php"><img
                                        src="assets/recursos-img/unisexcategoria.png" class="img-fluid zoom"
                                        alt="..."></a>
                            </div>
                        </div>



                    </div>

                </div>
            </section>
            <section id="popular-courses" class="courses">
                <div class="container" data-aos="fade-up">

                    <div class="section-title">
                        <h2>categorias</h2>
                    </div>

                    <div class="row" data-aos="zoom-in" data-aos-delay="100">

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                            <div class="course-item">
                                <a style="border:none;" href="categoria-med.php"><img
                                        src="assets/recursos-img/medicina.png" class="img-fluid zoom"
                                        alt="..."></a>
                            </div>
                        </div> <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                            <div class="course-item">
                                <a style="border:none;" href="categoria-pol.php"><img
                                        src="assets/recursos-img/poleras.png" class="img-fluid zoom"
                                        alt="..."></a>
                            </div>
                        </div> <!-- End Course Item-->

                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                            <div class="course-item">
                                <a style="border:none;" href="categoria-pan.php"><img
                                        src="assets/recursos-img/pantalones.png" class="img-fluid zoom"
                                        alt="..."></a>
                            </div>
                        </div>



                    </div>

                </div>
            </section>


<hr>

<section id="portfolio" class="portfolio">

<div class="col-sm-12 ">
  <div class="features_items">
      <section class="py-5">
      <div class="container px-4 px-lg-5">
          <div class="row gx-4 gx-lg-5 row-cols-1 row-cols-md-2 row-cols-xl-4 justify-content-center">
            
          <?php
        $query = mysqli_query($conexion, "SELECT * FROM productos");
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
<script  src="assets/js/script2.js"></script>
</body>

</html>
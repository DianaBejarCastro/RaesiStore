<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
      
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
if (isset($_POST['enviar'])){
if (!empty($_POST['nombre']) && !empty($_POST['asunto']) && !empty($_POST['msg'])&& !
empty($_POST['email'])){
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $msg = $_POST['msg'];
    $email = $_POST['email'];
    $header = "From: seleniama0922@gmail.com" . "\r\n";
    $header.= "Reply-To: seleniama0922@gmail.com" . "\r\n";
    $header.= "X-Mailer: php/". phpversion();
    $mail = @mail($email,$asunto,$msg,$header);
    if($mail){
        echo "<h4>! su correo fue enviado exitosamente! </h4>";
    }
}
}
?>
     
  <main id="main">


<div class="acercade">
    <h2 class="acercade">¡Nos encontramos aqui!</h2>
    <p>Puedes también buscarnos a través de Google maps Calle Venezuela #818</p>

</div><!-- End Breadcrumbs -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">

  <div data-aos="fade-up">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d951.8753272381583!2d-66.15196127083767!3d-17.387713519432452!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e37407b17278db%3A0xabb754b197edf3be!2sCalle%20Venezuela%20815%2C%20Cochabamba!5e0!3m2!1ses!2sbo!4v1642885460642!5m2!1ses!2sbo" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>

  <div class="container" data-aos="fade-up">

    <div class="row mt-5">

      <div class="col-lg-4">
        <div class="info">
          <div class="address">
          <i class="fas fa-map-marked-alt"></i>
            <h4>Dirección:</h4>
            <p>Calle Venezuela #818</p>
          </div>

          <div class="email">
          <i class="fas fa-phone-alt"></i>
            <h4>telefono Fijo:</h4>
            <p>4535294</p>
          </div>

          <div class="phone">
          <i class="fas fa-mobile-alt"></i>
            <h4>Celular:</h4>
            <p>72193150</p>
          </div>

        </div>

      </div>

      <div class="col-lg-8 mt-5 mt-lg-0">
    <h4 class="styleh4">Contactanos</h4>
        <form action="vistaWeb/Contactos/correos.php" method="POST" role="form" class="php-email-form">
          <div class="row">
            <div class="col-md-6 form-group">
              <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Correo electronico" required>
            </div>
          </div>
          <div class="form-group mt-3">
            <input type="text" class="form-control" name="asunto" id="asunto" placeholder="Asunto" required>
          </div>
          <div class="form-group mt-3">
            <textarea class="form-control" name="mensaje" id="mensaje" rows="5" placeholder="Mensaje" required></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Enviar Mensaje</button></div>
        </form>

      </div>

    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->



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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcercaDe | Raesi</title>
  
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
    
<?php include("vistaWeb/cabezera.php")?>
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


<div class="container-information">

    <div class="container-info">

        <section id="events" class="events">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/recursos-img/medical1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Uniformes Medicos</a></h5>
                                <p class="fst-italic text-center">Para todas las especialidades</p>
                                <p class="card-text">Confeccionamos en telas de alta calidad, ofrecemos variedad de
                                    Uniformes Medicos en todo tipo y color.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex align-items-stretch">
                        <div class="card">
                            <div class="card-img">
                                <img src="assets/recursos-img/ropa1.jpg" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="#">Ropa en General</a></h5>
                                <p class="fst-italic text-center">Según a cada estilo</p>
                                <p class="card-text">También ofrecemos prendas en general como son: pijamas, uniformes
                                    intitucionales, poleras de todo tipo y modelo, ropa de trabajo, overoles y mas!.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>
    </div>
</div>

<hr>
<section id="why-us" class="why-us">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="content">
                    <h2>¿Quiénes somos?</h2>
                    <p>
                        Somos una empresa que ofrece a la venta ropas en general, con variedad de estilos que te harán sentir la comodidad en tu dia a dia.
                        Nos caracterizamos por la cofeccion de uniformes medicos, con telas de alta calidad y al mejor precio. 
                    </p>

                </div>
            </div>
            <div class="col-lg-8 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-boxes d-flex flex-column justify-content-center">
                    <div class="row">
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                            <i class="fas fa-medal"></i>
                                <h4>Misión</h4>
                                <p> Ofrecer una gran variación de prendas de vestir de calidad. Brindar un servicio impecable y mejorar el compromiso con los clientes, socios y colaboradores
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                            <i class="fas fa-medal"></i>
                                <h4>Visión</h4>
                                <p>Ser la empresa de referencia en la venta de ropa en general en el país reconocida por su ropa de alta calidad y famosa por su buen servicio.
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 d-flex align-items-stretch">
                            <div class="icon-box mt-4 mt-xl-0">
                            <i class="fas fa-map-marked"></i>
                                <h4>¿Dónde estamos?</h4>
                                <p>Nos encontramos en el departamento de Cochabamba - Bolivia <img src="assets/recursos-img/bolivia.png" width="20px">Dir.: Calle Venezuela #818</p>
                            </div>
                        </div>
                    </div>
                </div><!-- End .content-->
            </div>
        </div>

    </div>
</section><!-- End Why Us Section -->

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
<script  src="assets/js/script2.js"></script>
</body>

</html>
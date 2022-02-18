<?php
session_start();
if (!empty($_SESSION['active'])) {
    header('location: productos.php');
} else {
    if (!empty($_POST)) {
        $alert = '';
        if (empty($_POST['usuario']) || empty($_POST['clave'])) {
            $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Ingrese usuario y contraseña
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
        } else {
            require_once "../config/conexion.php";
            $user = mysqli_real_escape_string($conexion, $_POST['usuario']);
            $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
            $query = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$user' AND clave = '$clave'");
            mysqli_close($conexion);
            $resultado = mysqli_num_rows($query);
            if ($resultado > 0) {
                $dato = mysqli_fetch_array($query);
                $_SESSION['active'] = true;
                $_SESSION['id'] = $dato['id'];
                $_SESSION['nombre'] = $dato['nombre'];
                $_SESSION['user'] = $dato['usuario'];
                header('Location: productos.php');
            } else {
                $alert = '<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
                        Contraseña incorrecta
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                session_destroy();
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/sb-admin-2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/login.css">
   
    <link rel="shortcut icon" href="../assets/img/favicon.ico" />
</head>

<body>

    <div class="container-login">

        <!--  -->
        <div class="wrap-login">
  
                       
                            
                               
                                   
                                    <form class="user" method="POST" action="" autocomplete="off">
                                         <div class="text-center">
                                        <h1 class="title">LOGIN</h1>
                                        <?php echo (isset($alert)) ? $alert : ''; ?>
                                    </div>
                                    <!--input-->
                                           <div class="wrap-input100" >
                                            <input type="text" class="input100" id="usuario" name="usuario" placeholder="Usuario...">
                                            <span class="focus-efecto"></span>
                                        </div>
                                        <div class="wrap-input100" >          
                                            <input type="password" class="input100" id="clave" name="clave" placeholder="Password">
                                            <span class="focus-efecto"></span>
                                        </div>
                                       

                                        <div class="container-login-form-btn">
                    <div class="wrap-login-form-btn">
                        <div class="login-form-bgbtn"></div>
                        <button type="submit" class="login-form-btn" >
                                            CONECTAR
                                        </button>
                       </div>
                </div>
                                        <hr>
                                    </form>
    
                            
                        
                   

            

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/js/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>
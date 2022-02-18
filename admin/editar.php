<?php

if (isset($_POST)) {
    require_once "../config/conexion.php";
    if (!empty($_POST) && $_GET['accion'] == 'esp') {
        $id = $_POST['id'];
        $nombre = $_POST['nombreeditar'];
        $query = mysqli_query($conexion, "UPDATE especialidades SET especialidad = ('$nombre') WHERE id = $id");
        if ($query) {
            header('Location: especialidades.php');
        }
    }
    if (!empty($_POST) && $_GET['accion'] == 'cli') {
        $id = $_POST['id'];
        $nombre = $_POST['nombreeditarca'];
        $estado = $_POST['estadoeditarca'];
        $query = mysqli_query($conexion, "UPDATE categorias SET categoria = ('$nombre'), estado = ('$estado') WHERE id = $id");
        if ($query) {
            header('Location: categorias.php');
        }
    }
    if (!empty($_POST) && $_GET['accion'] == 'pro') {
        $id = $_POST['id'];
        $nombre = $_POST['nombreeditpro'];
        $descripcion = $_POST['descripcioneditpro'];
        $color = $_POST['coloreditpro'];
        $genero = $_POST['generoeditpro'];
        $precio = $_POST['precioeditpro'];
        $estado = $_POST['estadoeditpro'];
        $talla = $_POST['tallaeditpro'];
        $query = mysqli_query($conexion, "UPDATE productos SET nombre = ('$nombre'), descripcion = ('$descripcion'), color = ('$color'), genero = ('$genero'), precio = ('$precio'), estado = ('$estado'), talla = ('$talla') WHERE id = $id");
        if ($query) {
            header('Location: productos.php');
        }
    }
    if (!empty($_POST) && $_GET['accion'] == 'tel') {
        $id = $_POST['id'];
        $nombre = $_POST['nombreeditarte'];
        $descripcion = $_POST['descripcioneditarte'];
        $query = mysqli_query($conexion, "UPDATE telas SET nombre = ('$nombre'), descripcion = ('$descripcion') WHERE id = $id");
        if ($query) {
            header('Location: telas.php');
        }
    }

    if (!empty($_POST) && $_GET['accion'] == 'usu') {
        $id = $_POST['id'];
        $nombre = $_POST['nombreeditarusu'];
        $usuario = $_POST['nombreusuarioeditarusu'];
        $query = mysqli_query($conexion, "UPDATE usuarios SET nombre = ('$nombre'), usuario = ('$usuario') WHERE id = $id");
        if ($query) {
            header('Location: perfil.php');
        }
    }


}

include("vistaAdmin/header.php");
?>
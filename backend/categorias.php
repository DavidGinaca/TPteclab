<?php


include './class/autoload.php';

if (isset($_POST['accion']) && $_POST['accion'] == 'guardar' && trim($_POST['nombre_categorias']) <> ''){
    $img = '';
    if (isset($_FILES['imagen']['tmp_name']) && !empty($_FILES['imagen']['tmp_name'])){
        $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
        $nombre = md5($_FILES['imagen']['tmp_name']. date("YmdHis")).".".$extension;
        $base_guardar = dirname(__FILE__, 2).DIRECTORY_SEPARATOR."assets".DIRECTORY_SEPARATOR."img".DIRECTORY_SEPARATOR;
        if (move_uploaded_file($_FILES['imagen']['tmp_name'], $base_guardar.$nombre)){
            $img = $nombre;
        } else {
            die("No pude guardar el archivo");
        }
    }
 
    $categoria= new categorias($_POST['id']);
    $categoria->nombre = $_POST['nombre_categorias'];
    $categoria->img = $img;
    $categoria->guardar();
    
} else if(isset($_GET['add'])){
    include './views/categorias.html';
    die();
} else    if(isset ($_GET['edit'])){
    $categoria = new categorias($_GET['edit']);
    $_POST['id'] = $_GET['edit'] ;
    $_POST['nombre_categorias']= $categoria->nombre ;
    $_POST['img'] = $categoria->img;
    include './views/categorias.html';
    die();
}


$listas_categorias = categorias::listar();
include './views/lista_categorias.html';
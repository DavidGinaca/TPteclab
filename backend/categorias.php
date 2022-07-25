<?php

include './class/base_datos.php';
include './class/categorias.php';



if(isset($_POST['accion']) && $_POST['accion'] == 'guardar' && trim($_POST['nombre_categorias']) <> '' ){
    
    $categoria= new categorias($_POST['id']);
    $categoria->nombre = $_POST['nombre_categorias'];
    $categoria->guardar();
    
} else if(isset($_GET['add'])){
    include './views/categorias.html';
    die();
} else    if(isset ($_GET['edit'])){
    $categoria = new categorias($_GET['edit']);
    $_POST['id'] = $_GET['edit'] ;
    $_POST['nombre_categorias']= $categoria->nombre ;
    include './views/categorias.html';
    die();
}


$listas_categorias = categorias::listar();
include './views/lista_categorias.html';
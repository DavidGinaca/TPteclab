<?php
      
  

include './backend/class/base_datos.php';
include './backend/class/categorias.php';



$categoria = new categorias();
$categoria-> nombre ='software';
$categoria-> guardar();

$lista_categorias = categorias::listar();

echo '<pre>';
print_r($lista_categorias);
echo '</pre>';

      
    


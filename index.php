<?php
      
  

include './backend/class/autoload.php';



$lista_categorias = categorias::listar();

include './backend/views/lista_productos.html';

      
    

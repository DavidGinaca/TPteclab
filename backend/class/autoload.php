<?php


class autoload {
    
    
    static function autocarga($clase){
        
        $class = array();
        $base = __DIR__.DIRECTORY_SEPARATOR;
        $class['categorias']= $base.DIRECTORY_SEPARATOR."categorias.php";
        $class['base_datos']= $base.DIRECTORY_SEPARATOR."base_datos.php";
    
        
    if(isset($class[$clase])){
              if(file_exists($class[$clase])){
                    include $class[$clase];
        
            
             }else {
                 
                 throw new Exception("Archivo de clase no encontrada [{$class[$clase]}]");
             }
        }    
    }
}

spl_autoload_register('autoload::autocarga');

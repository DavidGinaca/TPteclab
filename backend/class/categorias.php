<?php
class categorias{
    private $id;
    public $nombre;
    public $img;
    private $_exists = false;
    
    function __construct($id = null) {
        if ($id != null){
            $dbm = self::_conexion();
            $categoria = $dbm->select("categorias", "id = ?", array($id));
            if (isset($categoria[0]['id'])){
                $this->id = $categoria[0]['id'];
                $this->nombre = $categoria[0]['nombre'];
                $this->img = $categoria[0] ['img'];
                $this->_exists = true;
            }
        }
    }
    
    static private function _conexion(){
        return new base_datos("mysql", "miproyecto", "127.0.0.1", "root", "");
    }
    
    private function _insertar(){
        $dbm = self::_conexion();
        $resp = $dbm->insert("categorias", "nombre, img", "?, ?", array($this->nombre, $this->img));
        if ($resp){
            $this->id = $resp;
            $this->_exists = true;
            return true;
        } else {
            return false;
        }
        
    }
    
    private function _actualizar(){
        $dbm = self::_conexion();
        return $dbm->update("categorias", "nombre = ?, img = ?", "id = ?", array($this->nombre, $this->img, $this->id));
    }
    
    public function eliminar(){
        $dbm = self::_conexion();
        return $dbm->delete("categorias", "id = ?", array($this->id));
    }
    
    public function guardar(){
        if ($this->_exists){
            return $this->_actualizar();
        } else {
            return $this->_insertar();
        }
    }
    
    static public function listar(){
        $dbm = self::_conexion();
        return $dbm->select("categorias");
    }
    
    
}

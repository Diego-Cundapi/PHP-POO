<?php 
namespace App;
class Category{
    public $categoria;

    public function setCategoria(String $categoria){
        $this->categoria = $categoria;
    }

    public function getCategoria() : String{
        return $this->categoria;
    }
}

?>
<?php 
namespace App;
class Post{
    public $titulo;
    public $content;
    public $categoria;

    public function addCategory(Category $categoria){
        $this->categoria = $categoria;
    }

    public function addTitulo(String $titulo){
        $this->titulo = $titulo;
    }

    public function addContent(String $content){
        $this->content = $content;
    }

    public function getPost() : String {
        return "El titulo es: $this->titulo\nSu categoria es: \n{$this->categoria->getCategoria()}: \n$this->content";
    }
}

?>
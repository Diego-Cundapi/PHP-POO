<?php 
namespace App;

class Autor extends User{
    public $posts=[];
    public $crearPost;

    public function crearPost(Post $post){
        $this->posts[] = $post;
    }

    public function getPosts(): Array{
        return $this->posts;
    }

}

?>
<?php 
use App/User;

class Autor extends User{
    public $post=[];
    public $crearPost;

    public function crear_post(String $crearPost){
        $this->post[] = $crearPost;
    }
}

?>
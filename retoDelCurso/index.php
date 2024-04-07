<?php 

require __DIR__ ."/vendor/autoload.php";
use App\Autor;
use App\Category;
use App\Post;
use App\User;

//creo una categoria
$categoria = New Category();
$categoria->setCategoria('Ciencia ficción');

//Creo el Post
$post = New Post();
$post->addTitulo('Detective pikachu');
$post->addContent('Es una pelicula de pokemon');
$post->addCategory($categoria);

//creo al Autor

$autor = New Autor("diego","hola@email.com");
$autor->crearPost($post);

//enlisto el post
$autor_mensajes= $autor->getPosts();

foreach ($autor_mensajes as $mensaje) {
    # code...
    echo "El Usuario {$autor->getName()}\nemail: {$autor->getEmail()}\nEscribio el siguiente Post\n";
    echo $mensaje->getPost();
}



?>
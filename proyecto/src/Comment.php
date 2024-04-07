<?php

namespace App;

class Comment {
    /* Vemos que hay un método que espera como parámetro "User $usuario", esto quiere decir que, el parámetro $usuario tiene que ser si o si una instancia de la clase Usuario, si yo reemplazara "User" por "string" le estarían diciendo que espero que el parámetro $usuario sea una cadena de texto.

De igual manera, es función tiene al final " : int" esto está diciendo que el método va a devolver si o si un entero, de esta manera podemos hacer un código más robusto y a prueba de errores.
    public $like_count = 0;

    public function like(User $usuario) : int {
        return $this->like_count;
    }
     */
}


?>
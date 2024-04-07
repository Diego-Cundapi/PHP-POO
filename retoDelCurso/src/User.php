<?php 

class User{
    protected $name;
    protected $email;

    public function __construct(String $name, String $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() : String {
        return $this->name;
    }

    public function getEmail() : String {
        return $this->email;
    }

    
}

?>
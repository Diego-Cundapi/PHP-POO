<?php 
use PHPUnit\Framework\TestCase;
use App\Autor;
use App\Category;
use App\Post;
use App\User;

class PostTest extends TestCase{

    /* public function test_add_User(){
        
        $user = new User('Diego Ivan','Diego@email.com');
        $this->assertInstanceof(User::class, $user);
        // $this->assertInstanceof(User::class, $user->getEmail()); 

        $categoria = new Category();
        $categoria->setCategoria('Miedo');
        $this->assertEquals('Miedo', $categoria->getCategoria()); 

        $categoria = New Category();
        $this->assertInstanceof(Category::class, $categoria);
    } */


    public function test_Index(){
        $user = New User('Diego Ivan', 'Diego@email.com');
        $this->assertInstanceof(User::class, $user);

        $autor = New Autor();
        
    }

    


}


?>
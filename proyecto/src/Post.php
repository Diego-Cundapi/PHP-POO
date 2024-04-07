<?php 
namespace App;

class Post{
    protected $comments = [];
    public function addComment(Comment $comments){
        $this->comments[] = $comments;
    }

    public function countComments(){
        return count($this->comments);
    }

    public function getComments(){
        return $this->comments;   
    }
}

?>
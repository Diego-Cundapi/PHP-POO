<?php 

require_once './BaseAbstract.php';
require_once './User.php';
require_once './Admin.php';
require_once './Guest.php';


$guest = new Guest();
echo $guest->login();

$admin = new Admin('diego');
echo $admin->login();

$user = new User("cundapi");
echo $user->login();
?>
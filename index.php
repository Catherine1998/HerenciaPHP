<?php 

require_once 'admin.php'; 

$admin = new Admin('Ana');
echo $admin->getName();
echo "<br>";

$user = new User('Ana');
echo $user->getName();

?>
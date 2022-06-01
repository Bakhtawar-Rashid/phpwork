<?php

function login($e,$p,$db){
    $query = $db->query("SELECT * FROM `users` WHERE `email`='$e' AND `password`='$p'");
    $user = mysqli_fetch_object($query);
    $_SESSION['user'] = $user->id;
}

function isLoggedin(){
    return (isset($_SESSION['user']) ? true:false);
}

?>
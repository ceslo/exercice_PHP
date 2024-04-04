<?php
session_start();
function add_user(){
    };
$user[0]="admin"; 
$user[1]="admin";
$user[2]="admin";
$user[3]=password_hash("admin",PASSWORD_DEFAULT);
var_dump($user)
    ?>
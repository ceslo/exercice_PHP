<?php
session_start();
function add_user(){
    };
$user[0]=$_POST["nom"]; 
$user[1]=$_POST["prenom"];
$user[2]=$_POST["login"];
$user[3]=password_hash($_POST["mdp"],PASSWORD_DEFAULT);
var_dump($user)
    ?>
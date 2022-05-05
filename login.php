<?php

$nome = $_POST['name'];
$senha = $_POST['password'];

if(strlen($nome)==0){
    header("location:login.php?erro=name");
}

if(strlen($senha)==0){
    header("location:login.php?erro=password");
}

if($nome=="administrador", $senha == "admin"){

}

?>
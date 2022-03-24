<?php

include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");


$email = $_POST["email"];
$senha = $_POST["senha"];
$acesso = verficaacesso($conn,$email,$senha);

if($acesso === $email){
header("location:../view/indexadm.php");

}else{
    
header("location:../view/index.php");

}


?>




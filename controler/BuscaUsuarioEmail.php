<?php

include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

$nomeusus = $_POST ["emailusu"];

if(visuUsuarioNome ($conn,$emailusu)){
    header("location:../view/visuUsuEmail.php");
}else{
    header("Nada Encontrado");
}

?>
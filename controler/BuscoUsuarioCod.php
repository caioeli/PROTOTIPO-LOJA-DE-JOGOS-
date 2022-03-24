<?php

include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

$nomeusus = $_POST ["codusu"];

if(visuUsuarioNome ($conn,$codusu)){
    header("location:../view/visuUsuCod.php");
}else{
    header("Nada Encontrado");
}

?>
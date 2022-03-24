<?php

include_once("../view/header.php");
include_once ("../model/conexao.php");
include_once ("../model/usuariomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

 if(inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,
 $cpfusu,$cepusu,$numusu,$compleusu,$tipousu,$senhausu,$pinusu)){
 echo("O Perfil foi cadastrados com Sucesso !!!");
 }else{
 echo("Não foi possível cadastrar seus dados !!!");
 }

include_once("../view/footer.php") 

?>
<?php

include_once("../view/header.php");
include_once ("../model/conexao.php");
include_once ("../model/usuariomodel.php");
extract($_REQUEST,EXTR_OVERWRITE);

 if(deletarUsuario($conn,$codigousu)){
 echo("Usuário excluido com Sucesso !!!");
 }else{
 echo("Não foi possível excluir seus dados !!!");
 }

 include_once("../view/footer.php") 

?>
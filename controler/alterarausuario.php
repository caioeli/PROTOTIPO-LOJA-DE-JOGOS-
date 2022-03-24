<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/usuariomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarUsuario($conn,$codigousu,$nomeusu,$emailusu,$foneusu,
$cpfusu,$cepusu,$numusu,$compleusu,$tipousu)){

echo("Dados alterados com sucesso :)" );   

}else{

echo("Dados Não alterados :(");

}


include_once("../view/footer.php");
?>



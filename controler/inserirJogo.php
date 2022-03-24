<?php

include_once("../view/header.php");

include_once ("../model/conexao.php");
include_once ("../model/jogomodel.php");
extract($_REQUEST,EXTR_OVERWRITE);

 if(inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,
 $qtdjogo,$datalancamentojogo,$studiojogo)){
 echo("O jogo foi cadastrados com Sucesso !!!");
 }else{
 echo("Não foi possível cadastrar o jogo !!!");
 }

 include_once("../view/footer.php")

?>
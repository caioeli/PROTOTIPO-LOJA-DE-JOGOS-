<?php

include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

$nomeujogos = $_POST ["nomejogo"];

if(visujogosnome($conn,$nomejogo)){
    header("location:../view/visujogonome.php");
}else{
    header("location:../view/visujogonome.php");
}

?>
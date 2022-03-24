<?php

include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

$generojogos = $_POST ["codigojogo"];

if(visujogocodigo($conn,$codigojogo)){
    header("location:../view/visujogocodigo.php");
}else{
    header("location:../view/visujogocodigo.php");
}

?>
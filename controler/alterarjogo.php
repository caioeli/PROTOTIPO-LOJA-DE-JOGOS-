<?php
include_once("../view/header.php");
include_once("../model/conexao.php");
include_once("../model/jogomodel.php");

extract($_REQUEST,EXTR_OVERWRITE);

if(alterarJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo)){

echo("Dados alterados com sucesso :)" );   

}else{

echo("Dados Não alterados :(");

}




include_once("../view/footer.php");
?>

<div>
<button type="button" class="btn btn-success">
<input class="btn btn-primary" href="..view/index.php" role="button">voltar</input>
</button>
</div>
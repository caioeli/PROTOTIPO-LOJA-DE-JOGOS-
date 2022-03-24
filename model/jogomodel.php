<?php 

function inserirJogo($conn,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo){
    $query= "INSERT INTO `tbjogos` (`nomejogo`, `valorjogo`, `generojogo`,`qtdjogo`, `datalancamentojogo`, `studiojogo`) VALUES ('{$nomejogo}', '{$valorjogo}', '{$generojogo}', '{$qtdjogo}','{$datalancamentojogo}', '{$studiojogo}')";

    $dados = mysqli_query ($conn,$query);
    return $dados;

}

function visujogosnome ($conn,$nomejogo){
    $query ="select * from tbjogos where nomejogo like '%{$nomejogo}%'";
    $resultado = mysqli_query ($conn,$query);
    
    return $resultado;
 
 }

function visujogogenero ($conn,$generojogo){

    $query ="select * from tbjogos where generojogo like '%{$generojogo}%'";
    $resultado = mysqli_query ($conn,$query);
    
    return $resultado;
 
 }

 function visujogocodigo($conn,$codigojogo){

    $query ="select * from tbjogos where idjogo like '%{$codigojogo}%'";
    $resultado = mysqli_query ($conn,$query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
 
 }

 function alterarJogo($conn,$codigojogo,$nomejogo,$valorjogo,$generojogo,$qtdjogo,$datalancamentojogo,$studiojogo){
 $query="update tbjogos set 
 nomejogo ='{$nomejogo}',
 valorjogo ='{$valorjogo}',
 generojogo ='{$generojogo}',
 qtdjogo ='{$qtdjogo}' , 
 datalancamentojogo ='{$datalancamentojogo}' , 
studiojogo = '{$studiojogo}'where idjogo = '{$codigojogo}'";
 
 $resultado = mysqli_query ($conn,$query);
 return $resultado;
 }
 
 function deletarUsuario($conn,$codigojogo){
 
     $query ="delete from tbjogos where idjogo ='{$codigojogo}'";
     $resultado = mysqli_query($conn,$query);
     return $resultado;
 
 }
 

?>
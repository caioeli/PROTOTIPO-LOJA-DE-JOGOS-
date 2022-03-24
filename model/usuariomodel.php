<?php 
session_start();

function inserirUsuario($conn,$nomeusu,$emailusu,$foneusu,
$cpfusu,$cepusu,$numusu,$compleusu,$tipousu,$senhausu,$pinusu){

$salto = ['cost' => 8];

    $senhacrip = password_hash($senhausu,PASSWORD_BCRYPT,$salto);

    $query= "INSERT INTO `tbusuario` (`idusu`, `nomeusu`, `emailusu`, `tipousu`,
     `cpfusu`, `cepusu`, `numusu`, `compleusu`, `foneusu`,`senhausu`,`pinusu`) VALUES (NULL,
     '{$nomeusu} ', '{$emailusu}', '{$tipousu}', '{$cpfusu}', 
     '{$cepusu}', '{$numusu}', '{$compleusu}', '{$foneusu}','{$senhacrip}','{$pinusu}')";

    $dados = mysqli_query ($conn,$query);
    return $dados;

}

function visuUsuarioNome ($conn,$nomeusu){
   $query ="select * from tbusuario where nomeusu like '%{$nomeusu}%'";
   $resultado = mysqli_query ($conn,$query);
   
   return $resultado;

}

function visuUsuarioEmail($conn,$emailusu){
    $query ="select * from tbusuario where emailusu like '%{$emailusu}%'";
    $resultado = mysqli_query ($conn,$query);
    
    return $resultado;
}

function visuUsuarioCodigo($conn,$codigousu){
    $query ="select * from tbusuario where idusu = $codigousu";
    $resultado = mysqli_query ($conn,$query);
    $resultado = mysqli_fetch_array($resultado);
    return $resultado;
}   

function alterarUsuario($conn,$codigousu,$nomeusu,$emailusu,$foneusu,
$cpfusu,$cepusu,$numusu,$compleusu,$tipousu,$senhacrip,$pinusu){
$query="update tbusuario set 
nomeusu ='{$nomeusu}',
emailusu ='{$emailusu}',
tipousu ='{$tipousu}',
cpfusu ='{$cpfusu}', 
cepusu ='{$cepusu}', 
numusu ='{$numusu}', 
compleusu ='{$compleusu}', 
foneusu ='{$foneusu}',
senhausu='{$senhacrip}',
pinusu='{$pinusu}'where idusu = '{$codigousu}'";

$resultado = mysqli_query ($conn,$query);
return $resultado;
}

function deletarUsuario($conn,$codigousu){

    $query ="delete from tbusuario where idusu='{$codigousu}'";
    $resultado = mysqli_query($conn,$query);
    return $resultado;

}


function verficaacesso($conn,$email,$senha){
    $query = "select * from tbusuario where emailusu='{$email}'";
    $resultado = mysqli_query($conn,$query);
    if(mysqli_num_rows($resultado) > 0 ){
        $row = mysqli_fetch_assoc($resultado);
        if(password_verify($senha,$row["senhausu"])){
            $_SESSION["email"] = $row["emailusu"];
            $_SESSION["nome"] = $row["nomeusu"];
            return $row["emailusu"];
            return $row["nomeusu"];
        }else{
            return"Acesso Negado 1";
        }

        
    }else{
        return"Acesso Negado 2 ";
    }

 return "Acesso Negado 3 ";
}


function usaracesso(){
    $email =isset($_SESSION["email"]);
    if(!$email){
        $_SESSION["msg"] = "<div class='alert alert-danger' role='alert> Faça login para ter acesso ao sistema.</div>'";
        header("location:../view/acesso");
        die();
    }
    
    
    
}

function logout(){
    return session_destroy();      
}
?>
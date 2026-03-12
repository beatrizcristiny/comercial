<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de login usando PHP</title>
</head>
<body>
    <h1>Formulário</h1>
    <form method="POST"> <!-- o post é quando os dados são enviados de forma que n apareça só acessa no php-->
        Usuário <br>
        <input type="text" name="usuario"><br><br>  
        Senha <br>
        <input type="passaword" name="senha"><br><br>
        <input type="submit" value="Entrar">
</form>

<?php
if(isset($_POST["usuario"])){ #aqui ele ta vendo se existe o valor e pegando oq o usuaro digitou pra executar o codigo
$usuario = $POST["usuario"]; #guarda o nome digitado e na linha d baixo a senha
$senha = $_POST["senha"];
$erro = false;
if(strlen($usuario) < 4 || strlen($usuario) > 15){
    echo "Está errado: o nome de usuário deve ter pelo menos entre 4 e 15 caracteres.";
    $erro = true;
}
if (strlen($senha) < 4 || strlen($senha) > 15){
    echo "Está errado: a senha deve conter entre 4 a 15 caracteres.";
    $erro = true;
}
if($erro == false){
    if(($usuario == "PROFESSOR" || $usuario == "COORDENADOR") && $senha == "DEVISATE"){
     $hora = date("H:i") 
     $data = date("d/m/y")
     echo "Bem vindo, $usuario, você realizou o acesso às $hora no dia $data.";  
    }
    else if ($usuario != "PROFESSOR " && $usuario != "COORDENADOR" && $senha != "DEVISATE"){
     echo "Erro: o nome de usuário está incorreto.";   
    }
    else if (($usuario == "PROFESSOR" || $usuario == "COORDENADOR") && $senha != "DEVISATE"){
        echo "Erro: A senha está incorreta.";
    }
    else{
        echo"Erro: o nome de usário e senha estão incorretos.";
    }
}
}

?>
</body>
</html>
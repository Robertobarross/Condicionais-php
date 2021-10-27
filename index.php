<?php
session_start(); // Iniciando a sessão
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incrição para Competidores</title>
    <link rel="stylesheet" href="servicos/style.css">
</head>
<body>

    <div id="formulario">

        <p>Formulário para Inscrição de Competidores</p>

        <form action="script.php" method="post">

            <h1><?php // Retona mensagem informando o status do cadastro
            $mensagemDeRetorno = isset($_SESSION['mensagem']) ? $_SESSION['mensagem'] : '';
            if(!empty($mensagemDeRetorno))
            {
                echo $mensagemDeRetorno;
            }
            ?></h1>

            <p>Seu nome: <input type="text" name="nome" placeholder="Digite seu nome" require></p>
            <p>Sua idade: <input type="text" name="idade" placeholder="Sua idade" require></p>
            <p><input type="submit" value="Enviar dados do competidor" /><p>   

        </form>

    </div>
    
</body>
</html>
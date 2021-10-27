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
</head>
<body>

    <p>Formulário para Inscrição de Competidores</p>

    <form action="script.php" method="post">
        <?php // Retona mensagem de erro
        $mensagemDeErro = isset($_SESSION['mensagem de erro']) ? $_SESSION['mensagem de erro'] : '';
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
        ?>
        <p>Seu nome: <input type="text" name="nome" placeholder="Digite seu nome" require></p>
        <p>Sua idade: <input type="text" name="idade" placeholder="Sua idade" require></p>
        <p><input type="submit" value="Enviar dados do competidor" /><p>       
    </form>
    
</body>
</html>
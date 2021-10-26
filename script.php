<?php

// Condicionais com php

@$categorias = []; // Declarando categorias
@$categorias[] = 'infantil';
@$categorias[] = 'adolescentes';
@$categorias[] = 'adulto';
//@$categorias[] = 'idoso';

//print_r($categorias);

@$nome = $_POST['nome'];
@$idade = $_POST['idade'];

// Validando dados do formulário
if(empty($nome)) // O campo não pode ficar vazio
{
    echo 'O nome não pode ser vazio!';
    return;
}

if(strlen($nome) < 3) // Restringe quantidade minima de caracteres
{
    echo 'O nome não pode conter menos de três caracteres';
    return;
}

if(strlen($nome) > 40) // Restringe a quantidade máxima de caracteres
{
    echo 'O nome é muito extenso!';
    return;
}

if(!is_numeric($idade)) // Permite apenas números para o campo idade
{
    echo 'Informe um número correto para idedade!';
    return;
}

if(strlen($idade) > 3) // Não aceita número acima de três digitos
{
    echo 'O campo idade não pode ser superior a três números!';
    return;
}

//var_dump($nome);
//var_dump($idade);

// Retornando valores de acordo com a informação inserida nos campos nome e idade
if(@$idade >= 6 && @$idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if(@$categorias[$i] == 'infantil')
        echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}
elseif($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if(@$categorias[$i] == 'adolescente')
        echo "O nadador " , $nome, " compete na categoria adolescente " , $categorias[$i];
    }
}
else//($idade >= 19 && $idade <= 100);
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if(@$categorias[$i] == 'adulto')
        echo "O nadador ", $nome, " compete na categoria ", $categorias[$i];
    }
}


?>
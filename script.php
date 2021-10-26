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
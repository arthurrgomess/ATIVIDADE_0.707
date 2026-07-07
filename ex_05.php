<?php

function analisarTexto($texto)
{
    $palavras = str_word_count($texto);

    $caracteres = strlen($texto);

    $vogais = preg_match_all('/[aeiouAEIOU]/', $texto);

    $consoantes = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $texto);

    return [
        "Palavras" => $palavras,
        "Caracteres" => $caracteres,
        "Vogais" => $vogais,
        "Consoantes" => $consoantes
    ];
}

$texto = "PHP é uma linguagem muito utilizada.";

$resultado = analisarTexto($texto);

foreach($resultado as $chave => $valor){
    echo "$chave: $valor <br>";
}

?>
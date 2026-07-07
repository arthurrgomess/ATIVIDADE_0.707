<?php

function gerarSenha($quantidade)
{
    $caracteres = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $caracteres .= "abcdefghijklmnopqrstuvwxyz";
    $caracteres .= "0123456789";
    $caracteres .= "!@#$%&*_-+=?";

    $senha = "";

    for ($i = 0; $i < $quantidade; $i++) {
        $indice = rand(0, strlen($caracteres) - 1);
        $senha .= $caracteres[$indice];
    }

    return $senha;
}

$tamanho = 12;

echo "Senha Gerada: " . gerarSenha($tamanho);

?>
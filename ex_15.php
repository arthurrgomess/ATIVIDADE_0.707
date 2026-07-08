<?php

function calcularIMC($peso, $altura)
{
    return $peso / ($altura * $altura);
}

function validarEmail($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) ? true : false;
}

function gerarSenha($tamanho = 8)
{
    $caracteres = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%&*";
    $senha = "";

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

function contarVogais($texto)
{
    preg_match_all('/[aeiouAEIOU]/', $texto, $vogais);
    return count($vogais[0]);
}

function inverterTexto($texto)
{
    return strrev($texto);
}

function calcularIdade($anoNascimento)
{
    $anoAtual = date("Y");
    return $anoAtual - $anoNascimento;
}

function converterMoeda($valor, $cotacao)
{
    return $valor * $cotacao;
}

function formatarTelefone($telefone)
{
    $telefone = preg_replace('/[^0-9]/', '', $telefone);

    if (strlen($telefone) == 11) {
        return "(" . substr($telefone, 0, 2) . ") " .
               substr($telefone, 2, 5) . "-" .
               substr($telefone, 7, 4);
    }

    return "Telefone inválido";
}

function gerarSaudacao()
{
    $hora = date("H");

    if ($hora < 12) {
        return "Bom dia!";
    } elseif ($hora < 18) {
        return "Boa tarde!";
    } else {
        return "Boa noite!";
    }
}

function validarSenhaForte($senha)
{
    if (
        strlen($senha) >= 8 &&
        preg_match('/[A-Z]/', $senha) &&
        preg_match('/[a-z]/', $senha) &&
        preg_match('/[0-9]/', $senha) &&
        preg_match('/[\W]/', $senha)
    ) {
        return true;
    }

    return false;
}

?>
<?php

function mascararCpf($cpf)
{
    $cpf = str_replace(['.', '-'], '', $cpf);

    $cpfMascarado = str_repeat("*", strlen($cpf) - 4) . substr($cpf, -4);

    return $cpfMascarado;
}

$cpf = "12345678901";

echo "CPF Original: $cpf <br>";
echo "CPF Mascarado: " . mascararCpf($cpf);

?>
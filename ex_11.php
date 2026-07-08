<?php

function formatarTexto($texto)
{
    return [
        "Maiúsculas" => strtoupper($texto),
        "Minúsculas" => strtolower($texto),
        "Primeira letra maiúscula" => ucwords(strtolower($texto))
    ];
}

$texto = "a empresa deseja padronizar automaticamente seus relatórios.";

$resultado = formatarTexto($texto);

echo "Texto original: " . $texto . "<br><br>";

echo "Texto em maiúsculas: " . $resultado["Maiúsculas"] . "<br>";
echo "Texto em minúsculas: " . $resultado["Minúsculas"] . "<br>";
echo "Primeira letra de cada palavra em maiúscula: " . $resultado["Primeira letra maiúscula"];

?>
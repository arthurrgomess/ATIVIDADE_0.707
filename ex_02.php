<?php

function inverterTexto($texto)
{
    return strrev($texto);
}

$texto = "Uma empresa de tecnologia está desenvolvendo um sistema para tratamento de textos.";

echo "Texto original: " . $texto . "<br><br>";

echo "Texto invertido: " . inverterTexto($texto) . "<br><br>";

echo "Quantidade de caracteres: " . strlen($texto);

?>
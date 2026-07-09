<?php

function Invertertexto (texto) 
{
    $textoInvertido = strrev($texto);
    return $textoInvertido;
}
echo ("ola mundo")."<br>";
echo "texto invertido: " . Invertertexto("ola mundo") . "<br>";

?>
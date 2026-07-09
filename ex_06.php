<?php
function convertertemperatura ($valor, $origem, $destino)
{
    {
    if($origem == "c" && $destino == "f"){
    return ($valor * 9/5) + 32;}
   
    if($origem == "c" && $destino == "k"){
    return $valor + 273.15;}

    if($origem == "f" && $destino == "c"){
        return ($valor - 32) * 5/9;}
    
    if($origem == "f" && $destino == "k"){
        return ($valor - 32) * 5/9 + 273.15;}
    
    if($origem == "k" && $destino == "c"){
        return $valor - 273.15;}
    
    if($origem == "k" && $destino == "f"){
        return ($valor - 273.15) * 9/5 + 32;}
    
    else(origem == $destino){
        return $valor;
    
    }

    else{
        return "escala invalida";
    }
}

echo convertertemperatura(30, "c", "f") . "<br>";
echo convertertemperatura(30, "c", "k") . "<br>";

?>
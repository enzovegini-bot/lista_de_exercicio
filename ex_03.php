<? php

function mascaraCPF ($cpf, $quantidade){
$mascaraCPF = str_reapeat("*", $quatidade);
return substr_replace($texto, $mascaraCPF, -$quantidade);
}
echo
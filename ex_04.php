<?php
function gerarSenha($tamanho) {
    $caracteres = '0123456789abcdefghijklmnopqr';
    $senha = '';
    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }
    return $senha;
}
?>
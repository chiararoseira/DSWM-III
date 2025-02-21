<?php 
//6- Crie uma função que verifique se uma palavra é um palíndromo.
function palavraPalindromo($palavra) {
    $palavra = strtolower(preg_replace('/[^a-zA-Z0-9]/', '', $palavra));
    return $palavra == strrev($palavra);
}

echo palavraPalindromo("Socorram-me, subi no ônibus em Marrocos") ? "É palíndromo" : "Não é palíndromo";

?>
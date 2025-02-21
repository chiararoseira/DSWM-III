<?php 
//5- Conte o número de palavras em uma frase e imprima cada palavra em uma nova linha.
function numeroPalavras($frase) {
    $palavras = explode(' ', $frase);
    foreach ($palavras as $palavra) {
        echo $palavra . "\n";
    }
    return count($palavras);
}

echo "Número de palavras: " . numeroPalavras("Quantas palavras tem essa frase?");

?>
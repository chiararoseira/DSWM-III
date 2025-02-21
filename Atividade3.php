<?php 
//3- Inverta uma string sem usar a função strrev().
function inverterString($str) {
    $inverted = '';
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $inverted .= $str[$i];
    }
    return $inverted;
}

echo inverterString("Alguma musica da Xuxa");

?>
<?php 
//4- Crie uma função que receba um número e retorne se é positivo, negativo ou zero.
function verificarNumero($num) {
    if ($num > 0) return "Positivo";
    if ($num < 0) return "Negativo";
    return "Zero";
}

echo verificarNumero(21);
echo verificarNumero(0);
echo verificarNumero(-1);

?>
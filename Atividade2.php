<?php 
//2- Verifique se um número é primo ou não.
function ePrimo($num) {
    if ($num <= 1) return false;
    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}

echo ePrimo(11) ? "É um número primo" : "Não é um número primo";

?>
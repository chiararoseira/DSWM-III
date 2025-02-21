<?php 
//1- Substitua todas as vogais em uma string por asteriscos (*)
function substituirVogais($str) {
    return preg_replace('/[aeiouAEIOU]/', '*', $str);
} 

echo substituirVogais ("Testando som");

?>
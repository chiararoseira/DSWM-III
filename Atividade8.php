<?php 
//8- Crie uma função que remova os espaços em branco de uma string.
function removerEspacos($str) {
    return str_replace(' ', '', $str);
}

echo removerEspacos ("Três pratos de trigo para três tigres tristes");

?>
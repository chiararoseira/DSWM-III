<?php 
//10-Crie uma função que receba um texto e retorne se é um pangrama (contém todas as letras do alfabeto pelo menos uma vez + se não for, quais letras faltam pra frase ser pangrama).
function pangrama($texto) { 
    $alfabeto = range('a', 'z');
    $texto = strtolower(preg_replace('/[^a-z]/', '', $texto));
    $letras_faltando = [];
    
    foreach ($alfabeto as $letra) {
        if (strpos($texto, $letra) === false) {
            $letras_faltando[] = $letra;
        }
    }
    
    if (empty($letras_faltando)) {
        return "É pangrama";
    } else {
        return "Não é pangrama. Letras faltando: " . implode(", ", $letras_faltando);
    }
}

echo pangrama("juiz faz com que whisky de malte baixe logo preço de venda");
echo pangrama("quais letras faltam pra essa frase ser pangrama?");

?>
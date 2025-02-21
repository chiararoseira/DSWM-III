<?php 
//9- Crie um programa que calcule e imprima os números Fibonacci até o décimo termo.
function fibonacci($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[] = $fib[$i - 1] + $fib[$i - 2];
    }
    return $fib;
}

$fib = fibonacci(10);
foreach ($fib as $num) {
    echo $num . "\n";
}

?>
<?php
function minimo_viagens($c, $a) {
    if ($c <= 1) {
        return "A cabine deve ter capacidade maior que 1.";
    }

    // Como pelo menos um monitor precisa estar em cada viagem, a capacidade útil para alunos é (C-1)
    $capacidade_util = $c - 1;

    // Calcula o número mínimo de viagens necessárias
    $viagens = ceil($a / $capacidade_util);

    return $viagens;
}

// Entrada do usuário
$c = intval(readline("Digite a capacidade da cabine: "));
$a = intval(readline("Digite o número total de alunos: "));

// Calcula e exibe o resultado
echo "Número mínimo de viagens: " . minimo_viagens($c, $a) . "\n"; 
?>
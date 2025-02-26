<?php
function fatorial($num) {
    return ($num == 1 || $num == 0) ? 1 : $num * fatorial($num - 1);
}

function max_confianca($n, $matriz) {
    $permutacoes = permutacoes(range(0, $n - 1));
    $max_confianca = 0;
    
    foreach ($permutacoes as $perm) {
        $confianca = 1;
        for ($i = 0; $i < $n; $i++) {
            $confianca *= $matriz[$i][$perm[$i]];
        }
        $max_confianca = max($max_confianca, $confianca);
    }
    
    return $max_confianca;
}

function permutacoes($array) {
    if (count($array) <= 1) {
        return [$array];
    }
    
    $perms = [];
    for ($i = 0; $i < count($array); $i++) {
        $restantes = $array;
        array_splice($restantes, $i, 1);
        foreach (permutacoes($restantes) as $perm) {
            $perms[] = array_merge([$array[$i]], $perm);
        }
    }
    return $perms;
}

// Entrada do usuário
list($n) = array_map('intval', explode(' ', readline("Digite a quantidade de enfeites: ")));
$matriz = [];
for ($i = 0; $i < $n; $i++) {
    $matriz[] = array_map('intval', explode(' ', readline("Digite as confianças da linha $i: ")));
}

// Calcula e exibe o resultado
echo "Máxima confiança possível: " . max_confianca($n, $matriz) . "\n"; 
?>
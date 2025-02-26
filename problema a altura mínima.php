<?php
function brinquedos_disponiveis($n, $h, $alturas) {
    $contador = 0;
    foreach ($alturas as $altura) {
        if ($h >= $altura) {
            $contador++;
        }
    }
    return $contador;
}

// Entrada do usuário
list($n, $h) = array_map('intval', explode(' ', readline("Digite a quantidade de brinquedos e a altura de Carlitos: ")));
$alturas = array_map('intval', explode(' ', readline("Digite as alturas mínimas dos brinquedos: ")));

// Calcula e exibe o resultado
echo "Número de brinquedos disponíveis: " . brinquedos_disponiveis($n, $h, $alturas) . "\n"; 
?>
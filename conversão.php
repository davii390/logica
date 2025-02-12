<?php
$taxas [
    'USD' => 6.10,
    'EUR' => 5.50,
    'GBP' => 6.30,
    'ASR' => 0.05,
];

$valor_real = 100;

echo 'Valor em Dolar: R$ ' $valor_real / $taxas['USD'] .  <br>;
echo 'Valor em Dolar: R$ ' $valor_real / $taxas['EUR'] .  <br>;
echo 'Valor em Dolar: R$ ' $valor_real / $taxas['GBP'] .  <br>;
echo 'Valor em Dolar: R$ ' $valor_real / $taxas['ASR'] .  <br>;
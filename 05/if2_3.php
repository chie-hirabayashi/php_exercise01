<?php

$foods = [
    '朝食' => 'パン',
    '昼食' => 'うどん',
    '夕食' => 'ライス',
];

echo nl2br('私は、' . PHP_EOL);

foreach ($foods as $key => $value) {
    echo nl2br($key . 'に' . $value . PHP_EOL);
}

echo 'を食べます';

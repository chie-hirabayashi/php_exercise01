<?php

$poket_money = strval(1000);
$fund_raising = strval(101);

echo nl2br('あなたの所持金は' . $poket_money . 'です。' . PHP_EOL);

while ($fund_raising <= $poket_money) {
    $poket_money = $poket_money - $fund_raising;
    echo nl2br('101円募金しました。' . PHP_EOL);
    echo nl2br('残りの残高は' . $poket_money . 'です。' . PHP_EOL);
}

echo 'あなたはこれ以上募金できません。';
// var_dump($fund_raising);
// var_dump($poket_money);

<?php

$total_meals = [];

function calc_cal($total_meals)
{
    echo '摂取カロリー合計は' . array_sum($total_meals) . 'Kcalです';
}

$yesterday_meal = [
    '食パン' => 300,
    'ステーキ' => 1200,
    'うどん' => 500,
];

$today_meal = [
    'シリアル' => 200,
    'とんかつ' => 1000,
    'パスタ' => 400,
];

$merge_meals = array_merge($today_meal, $yesterday_meal); # これは使わないことにした
$total_meals = array_values($merge_meals);

echo calc_cal($total_meals);

// 確認
// var_dump($merge_meals);
// var_dump($total_meals);
// echo array_sum($total_meals);

// ここから下の関数も使わない
$yesterday_meal_total = 0;
foreach ($yesterday_meal as $meal => $cal) {
    $yesterday_meal_total += $cal;
}

$today_meal_total = 0;
foreach ($today_meal as $meal => $cal) {
    $today_meal_total += $cal;
}

// $total_meals = $today_meal_total + $yesterday_meal_total;
// echo $total_meals;

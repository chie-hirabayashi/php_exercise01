<?php

// '朝' or '昼' or '夜'を指定
$time_zone = '朝';

function get_greeting($time_zone)
{
    $greetings = [
        '朝' => 'おはよう',
        '昼' => 'こんにちは',
        '夜' => 'こんばんは',
    ];
    return $time_zone . 'の挨拶は' . $greetings[$time_zone];
}

echo get_greeting($time_zone);

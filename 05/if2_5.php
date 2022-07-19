<?php

$subjects = ['数学', '英語', '理科', '社会', '国語'];
$schedule = [];

foreach ($subjects as $value) {
    switch ($value) {
        case '数学':
            $schedule[$value] = '明日';
            break;
        case '英語':
            $schedule[$value] = '明後日';
            break;
        case '理科':
            $schedule[$value] = '明々後日';
            break;
        case '社会':
            $schedule[$value] = '昨日';
            break;
        case '国語':
            $schedule[$value] = '中止';
            break;
        default:
            break;
    }
}

foreach ($schedule as $key => $value) {
    echo nl2br($key . 'の試験は' . $schedule[$key] . 'です。' . PHP_EOL);
}

// var_dump($subjects);
// var_dump($schedule);

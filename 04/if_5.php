<?php

$num = 1111;

if ($num === 1) {
    echo $num.'は素数ではありません';
} elseif ($num === 2) {
    echo $num.'は素数です';
} elseif ($num === 3) {
    echo $num.'は素数です';
} elseif ($num === 5) {
    echo $num.'は素数です';
} elseif ($num % 2 === 0) {
    echo $num.'は素数ではありません';
} elseif ($num % 3 === 0) {
    echo $num.'は素数ではありません';
} elseif ($num % 5 === 0) {
    echo $num.'は素数ではありません';
} else {
    echo $num.'は素数です';
}

echo nl2br(PHP_EOL);
echo str_repeat('-', 30);
echo nl2br(PHP_EOL);

$flag = '';

for ($i = 2; $i < $num; $i++) {
    if ($num % $i === 0) {
        $flag = 1;
    } else {
    }
}

if ($num == 1 || $flag == 1) {
    echo $num.'は素数ではありません';
} else {
    echo $num.'は素数です';
}

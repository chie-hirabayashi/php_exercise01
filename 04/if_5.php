<?php

$num = 1111;

$flag = 0;
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

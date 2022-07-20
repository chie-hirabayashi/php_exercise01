<?php

$point = intval(100);

if ($point % 2 === 0) {
    echo $point . 'は偶数です';
} elseif ($point % 2 !== 0) {
    echo $point . 'は奇数です';
}

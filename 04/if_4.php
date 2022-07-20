<?php

$score_math = 15;
$score_english = 24;

if ($score_math >= 60 && $score_english >= 60) {
    echo '合格';
} elseif ($score_math >= 50 || $score_english >= 50) {
    echo '再試験';
} elseif ($score_math < 50 && $score_english < 50) {
    echo '不合格';
} 

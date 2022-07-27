<?php

$score = $_GET['score'];
$score_msg = '';

if ($score >= 60) {
    $score_msg = '合格です';
} else {
    $score_msg = '不合格です';
}

function h($score)
{
    echo htmlspecialchars($score, ENT_QUOTES, 'UTF-8');
}

// 確認
// echo var_dump($score);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>合否判定</title>
</head>
<body>
    <h1><?= h($score_msg) ?></h1>
    <a href="javascript:history.back()">戻る</a>
</body>
</html>

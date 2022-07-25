<?php

$msg = '';
$now_day = '';
$now_week = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $date = new DateTime('now');
    $now_day = $date->format('Y年m月d日');
    $week = ['日', '月', '火', '水', '木', '金', '土'];
    $now_week = $week[$date->format('w')];
    $msg = '今日は、' . $now_day . $now_week . '曜日です';
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>日付の確認</title>
</head>
<body>
    <?php if (empty($msg)): ?>
        <h2>本日の日付、曜日を確認しますか？</h2>
        <?php else: ?>
            <h1><?= $msg ?></h1>
    <?php endif; ?>
    <form action="" method="POST">
        <?php if (empty($msg)): ?>
            <input type="submit" name="check" value="はい">
            <?php else: ?>
                <a href="javascript:history.back()">戻る</a>
        <?php endif; ?>
    </form>
</body>
</html>

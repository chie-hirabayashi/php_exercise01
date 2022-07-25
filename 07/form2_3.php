<?php

$score = '';
$err_msg = '';
$score_msg = '点数を入力しください'; #デフォルト値
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $score = $_POST['score'];
    if (empty($score)) {
        $err_msg = '点数が入力されていません。';
    } elseif (!empty($score)) {
        header('Location: judge_ment.php?score=' . $score);
        exit();
    }
}

// 確認
// echo var_dump(h($score));
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>埋め込み</title>
</head>

<body>
    <form action="" method="post">
        <h1><?= $score_msg ?></h1>
            <?php if (!empty($err_msg)): ?>
                <ul>
                    <li><?= $err_msg ?></li>
                </ul>
            <?php endif; ?>
        <input type="number" min="0" max="100" name="score">
        <input type="submit" value="送信">
    </form>
</body>

</html>

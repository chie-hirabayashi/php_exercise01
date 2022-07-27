<?php

$name = '';
$tel = '';
$email = '';
$item_key = '';
$err_msgs = [];

$items = ['バッグ', '靴', '時計', 'ネックレス', 'ピアス'];

$send_name = '氏名:';
$send_tel = '電話番号:';
$send_email = 'メールアドレス:';
$send_item = '購入するもの:';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $item_key = $_POST['items'];
    if (empty($name)) {
        $err_msgs[] = '氏名を入力して下さい';
    }
    if (empty($tel)) {
        $err_msgs[] = '電話番号を入力して下さい';
    }
    if (empty($email)) {
        $err_msgs[] = 'メールアドレスを入力して下さい';
    }
}

function h($str)
{
    echo htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// 確認
// var_dump($err_msgs);
// echo str_pad('氏名:', 10) . 'a';
// echo nl2br(PHP_EOL);
// echo str_pad('氏名', 20, 'p', STR_PAD_RIGHT);
// echo nl2br(PHP_EOL);
// echo str_pad('氏名', 20, ' ', STR_PAD_RIGHT).':';
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
        <h3>個人情報を入力してください</h3>
        <?php if (!empty($err_msgs)): ?>
            <h2>エラーメッセージ</h2>
            <ul>
                <?php foreach ($err_msgs as $err_msg): ?>
                    <li><?= $err_msg ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
            <div>
                <label for="">氏名</label><br>
                <input type="text" name="name" value="<?= $name ?>">
            </div>
            <div>
                <label for="">電話番号</label><br>
                <input type="text" name="tel" value="<?= $tel ?>">
            </div>
            <div>
                <label for="">メールアドレス</label><br>
                <input type="text" name="email" value="<?= $email ?>">
            </div>
        <h3>購入するものを選択して下さい</h3>
            <div class=" submit">
                <select name="items">
                <?php foreach ($items as $item) {
                    echo '<option value=', $item, '>', $item, '</option>';
                } ?>
                </select>
                <br>
                <br>
                <input type="submit" value="送信">
            </div>
    </form>
    <div>
        <?php if (!empty($name) && !empty($tel) && !empty($email)): ?>
            <h2>以下の内容が送信されました</h2>
            <!-- str_padができなかったので(｀Д´) -->
            <!-- <p><? echo str_pad($send_name, 5) . $name ?></p> -->
            <pre>氏名:                 <?= h($name) ?></pre>
            <pre>電話番号:         <?= h($tel) ?></pre>
            <pre>メールアドレス:  <?= h($email) ?></pre>
            <pre>購入するもの:   <?= h($item_key) ?></pre>
        <?php endif; ?>
    </div>
</body>

</html>

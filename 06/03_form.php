<?php
$age = '';
$error_msg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];

    if (empty($age)) {
        $error_msg = '年齢を入力してください.';
    }
}
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
    <h1>POSTメソッド</h1>
    <form action="" method='post'>
        <div>
            <?php if (!empty($error_msg)): ?>
                <ul>
                    <li><?= $error_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">年齢</label><br />
            <input type="number" name='age' min="0" max="150" value='<?= $age ?>'><br />
        </div>
        <div>
            <input type="submit" value="送信">
        </div>
    </form>
    <p>
        <?
            if (!empty($age)) {
                echo '私は'.htmlspecialchars($age, ENT_QUOTES, 'UTF-8').'歳です';
            }
        ?>
    </p>
    
</body>
</html>

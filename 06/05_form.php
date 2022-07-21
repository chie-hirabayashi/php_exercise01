<?php

$num1 = '';
$num2 = '';
$num3 = '';
$sum = '';
$error_msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    if (!is_numeric($num1) || !is_numeric($num2) || !is_numeric($num3)) {
        $error_msg = '全てに数字を入力してください';
    } else {
        $sum = $num1 + $num2 + $num3;
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
    <h1>数字を入力してください</h1>
    <form action="" method='POST'>
        <div>
            <?php if (!empty($error_msg)): ?>
                <ul>
                    <li><?= $error_msg ?></li>
                </ul>
            <?php endif; ?>
            <label for="">1つめの数字</label><br /> 
            <input type="number" name='num1'><br />
            <label for="">2つめの数字</label><br />
            <input type="number" name='num2'><br />
            <label for="">3つめの数字</label><br />
            <input type="number" name='num3'><br />
        </div>
        <div>
            <input type="submit" value='送信'>
        </div>
        <p>
            <?php if (!empty($sum)) {
                echo '合計値は' .
                    htmlspecialchars($sum, ENT_QUOTES, 'UTF-8') .
                    'です';
            } ?>
        </p>
    </form>
</body>
</html>

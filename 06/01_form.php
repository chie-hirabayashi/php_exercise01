<?php

$age = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $age = $_POST['age'];
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
    <form action="" method="POST">
        <div>
            <label for="">年齢</label><br />
            <input type="number"  min="0" max="150" name="age"><br />
            <input type="submit" value="送信">
        </div>
    </form>
            
    <p>
        <?php if (!empty($age)) {
            echo '私は' .
                htmlspecialchars($age, ENT_QUOTES, 'UTF-8') .
                # numberで入力しているからこれは不要かも
                '歳です';
        } ?>
    </p>
</body>
</html>

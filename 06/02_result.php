<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                echo '私の名前は'.htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8').'です';
            }
        ?>
    </p>
    <!-- <a href="#" oneclick='history.back(-1);return false;'>戻る</a> -->
    <!-- <button type='button' onclick="history.back()">戻る</button> -->
    <a href="javascript:history.back()">戻る</a>
</body>
</html>

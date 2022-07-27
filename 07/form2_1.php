<?php

$stylists = [
    'スタイリスト' => 'Takashi',
    'ハイスタイリスト' => 'Ken',
    'トップスタイリスト' => 'Kyoutaro',
];

$select_stylist = '';
$stylist_type = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stylist_type = $_POST['stylist'];
}

// 確認コード
// echo $stylist_type;
$select_stylist = 'あなたの担当は' . $stylists[$stylist_type] . 'です';
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
    <h1>希望する美容師のランクを選んでください</h1>
    <form action="" method="post">
        <select name="stylist">
            <?php foreach ($stylists as $stylist_type => $stylist_name) {
                echo '<option value=',
                    $stylist_type,
                    '>',
                    $stylist_type,
                    '</option>';
            } ?>
        </select>
        <br>
        <input type="submit" value="送信">
    </form>
    <p><?= $select_stylist ?></p>
</body>

</html>

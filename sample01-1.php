<?php
//データの表示(書き込み)
print "Hello PHP World.";

// 変数の宣言
$siteName = "サーバーサイド演習1";

//データの確認デバック命令
var_dump($siteName)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHPのお勉強</h1>
    <p><?php print "Hello PHP World"?></p>

    <p><?php echo "こんにちは","私は竜崎です"?></p>
    <p><?php echo "";?></p>

    <p><?= "これはechoの省略の書き方だよ"?></p>

    <?= "サイトの名前は、 {$siteName}です" ?>
</body>
</html>
<?php
//sample03-1.php

$classes = json_decode(filter_input(INPUT_COOKIE, "sample03_1"));
// //クッキーの保存
// setcookie("sample03", "WD2A", time() + 60);
// //配列をJSONデータへ変換@
// $data = json_encode(["WD1A" . "WD2A", "WD3A"]);
// setcookie("sample03_1", $data, time() + 60);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>

<body>
    <h1>
        クッキー</h1>
    <h2>クッキーの読み込み</h2>
    <ul>

        <?php foreach ($classes as $class): ?>
            <li><?= $class ?></li>
        <?php endforeach ?>

    </ul>
    <pre><?php var_dump($_COOKIE) ?></pre>

    <p><a href="sample03-2.php">3</a></p>
</body>

</html>
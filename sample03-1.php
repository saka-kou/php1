<?php
//sample03-1.php

//クッキーの保存
setcookie("sample03", "WD2A", time() + 60);
//配列をJSONデータへ変換
$data = json_encode(["WD1A" . "WD2A", "WD3A"]);
setcookie("sample03_1", $data, time() + 60);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>

<body>
    <h1>クッキー</h1>
    <h2>クッキーの読み込み</h2>
    <pre><?php var_dump($_COOKIE) ?></pre>
</body>

</html>
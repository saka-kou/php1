<?php
// temp.php

//送信データの取り消し
//$_POSTでアクセス
if (isset($_POST["_name"])) {
    $name = $_POST["_name"];
} else {
    $name = null;
}
var_dump($name);

//filter_input()で取り出す

$filterName = filter_input(INPUT_POST, "name");
var_dump($filterName);


?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>

<body>
    <h1>Formのデータの送受信</h1>
    <h2>受信側</h2>
</body>

</html>
<?php

//スーパーグローバル変数の確認
print "<pre?>";
var_dump($_GET);
print "</pre>";

//定数の宣言
const SITE_NAME = "サーバーサイド1";

//変数の宣言

print "<hr>";
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= SITE_NAME></title>
</head>
<body>
    <h1>テンプレート</h1>
</body>
</html> 
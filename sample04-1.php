<?php
// temp.php

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP1</title>
</head>

<body>
    <h1>多重ループ</h1>
    <h2>九九の表</h2>
    <table>
        <?php for ($i = 0; $i < 9; $i++): ?>
            <tr>
                <?php for ($i = 0; $i < 9; $i++): ?>
                    <td>あ</td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
    <h2>チェスボード</h2>
    8✕8
    各セルは交互に黒と白で構成され黒|白を交互に並ぶ
    左上のセル(0-,)は黒とする
    <table>
        <?php for ($i = 0; $i < 9; $i++): ?>
            <tr>
                <?php for ($i = 0; $i < 9; $i++): ?>
                    <td>あ</td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
</body>

</html>
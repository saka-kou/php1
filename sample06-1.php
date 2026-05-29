<?php
//ファイルの読み込み
$fileContent = file_get_contents("files/sample06-1.txt");

var_dump($fileContent);

//ファイルの出力(作成)
file_put_contents("files/sample06-1.txt", "PUTで出力したファイル");

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP</title>
</head>
<body>

  <!-------------------------------    ファイルの読み込み       --------------->
  <?php

  /*-----------------------------------------------------------
ファイルのダウンロード
------------------------------------------------*/
// 出力バッファを開始
ob_start(); 
$filePath = 'hello.png';

// ファイルのダウンロード
header('Content-Type:application/octect-stream');

// 名前を付けて保存ダイアログボックスがポップアップ表示される
header('Content-Disposition: attachment; filename="'. basename($filePath).'"');

readfile($filePath);

ob_end_flush();
// 改行
  $br = "<br>";
  ob_end_flush();

  $fileName = "test.txt";

  // 関数を使用して読み取り専用で読み込む
  $file = fopen($fileName,"r");

  // ファイルが読み込めなかった場合
  if($file == false){
    echo "読み込みエラー";
    exit();
  }

  // 関数を使用してファイルの長さを取得する
  $fileSize = filesize($fileName);

  // 関数を利用してファイルの内容を読み取る
  $fileText = fread($file,$fileSize);
  fclose($file);

  echo "Filesize : $fileSize bytes";
  echo "<pre>$fileText</pre>";
  ?>


  <!---------------------   ファイルの書き込み   --------------------------->
  <?php
  // 書き込みファイルを格納
  $fileName = "newtext.txt";

  // 書き込み専用で読み込み
  $file = fopen($fileName,"w");

  // ファイルが読み込めなかった場合
  if($file == false){
    echo "読み込みエラー";
  }

  fwrite($file,"ファイルの書き込を行います\n");
  fclose($file);

  // 書き込み処理
  $fileName = "newtext.txt";
  $file = fopen($fileName,"r");

  if($file == false){
    echo "読み込みエラー";
  }

  $fileSize = filesize($fileName);
  $fileText = fread($file,$fileSize);
  fclose($file);

  echo "ファイルサイズ： $fileSize bytes".$br;
  echo $fileText.$br;
  echo "ファイル名：$fileName";

  ?>
</body>
</html>
<?php
?>
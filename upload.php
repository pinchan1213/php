<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="アップロード">
</form>
</body>
</html>

<?php
$br = '<br>';
echo "アップロードしたファイルの名前".$br;
echo $_FILES['file']['name'].$br;
echo "ファイルのMIMEタイプ".$br;
echo $_FILES['file']['type'].$br;
echo "アップロードされたファイルのサイズ".$br;
echo $_FILES['file']['size'].$br;
echo "アップロードされたファイルがサーバーに保存されている一時ファイル名".$br;
echo $_FILES['file']['tmp_name'].$br;
echo "アップロードに関連付けられたエラーコード".$br;
echo $_FILES['file']['error'].$br;
?>
<?php
/*-----------------------------------------------------------
データベース接続
--------------------------------------------------------*/
$dbhost = 'localhost:8888';
$dbuser = 'mao';
$dbpass = 'mmmm';

// データベース接続オブジェクトを確立
$db = mysqli_connect($dbhost,$dbuser,$dbpass);

if(! $db ) {
  // 接続が失敗した場合、接続を停止し、エラーメッセージを表示させる
  die('Could not connect: ' . mysqli_error());
}

// データベースの接続が成功したときの出力
echo 'Connected successfully';

// SQLクエリの実行
$sql = "CREATE Database test_db";
$retval = mysqli_query($db,$sql);

if(! $retval ) {
  die('Could not create database: ' . mysqli_error());
}

echo "Database test_db created successfully\n";

// データベースの作成
$sql = 
'CREATE TABLE koma('.
'koma_id INT NOT NULL AUTO?INCREMENT'.
'koma_name VARCHAR(20) NOT NULL'.
'koma_mail VARCHAR(20) NOT NULL'.
'join_date timestamp(14) NOT NULL'.
'primary key(koma_id)';

// データベースの選択
mysqli_select_db($db,'test_db');

// 開いているデータベースの接続を終了する
mysqli_close($db);
?>
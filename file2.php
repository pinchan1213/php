<?php
/*-------------------------------------------------------------
ファイルのコピー
---------------------------------------------------------------*/
// 既存のファイルをコピー
$file = fopen("test.txt","r");
$newFile =fopen("new.txt","w");
while( feof($file)){
  $str = fgetc($file);
  fputs($newFile,$str);
}
fclose($file);
fclose($newFile);

/*-------------------------------------------------------------------
csvの処理
---------------------------------------------------------------*/
$data = [
  ["name","email","age"],
  ["mao","test@email.com","22"],
  ["koma","test2@email.com","22"],
];
$fileName = 'sample.csv';

$f = fopen($fileName,"w");

if($f === false){
  die('エラー'.$fileName);
}

foreach($data as $key){
  fputcsv($f,$key);
}
fclose($f);

/*------------------------------------------------------------------------
ファイル権限
---------------------------------------------------------------------*/
$filename = 'test.txt';
$format = "ID";
printf($format,$filename,date('r'),filegroup($filename));
chgrp($filename,"admin");
clearstatcache();
printf($format,$filename,date('r'),filegroup($filename));

/*---------------------------------------------------------------
ファイルディレクトリの表示
------------------------------------------------------------*/
$dir = "C:/xampp/htdocs/PHP";

$files = scandir($dir);
var_dump($files);
?>


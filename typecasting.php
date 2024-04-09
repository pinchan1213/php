<?php
// 改行
$br = '<br>';
/*------------------ 型キャスト -------------------*/
$a = 10;
// シングルクォートはそのまま出力
$b = '20';
$c = $a + $b;
echo "c =".$c.$br;

$a = 10;
$b = '20';
// そのまま連結される
$c = $a.$b;
echo "c =".$c.$br;

/*--------------- 型キャスト演算子 ------------------*/
// 浮動小数点
$a = 9.99;
// 浮動小数点を整数(int)に変換
$b = (int)$a;
var_dump($b);
echo $br;

// 文字列から整数への変換
$a = "99";
$b = (int)$a;
var_dump($b);
echo $br;

// 変数、式をfloatに変換できる
$a = 100;
$b = (double)$a;
var_dump($b);
echo $br;

// キャスト演算子を使用してfloat型にキャストする
$a = '100';
$b = (double)$a;
var_dump($b);
echo $br;

$a = "9.99";
$b = (float)$a;
var_dump($b);
echo $br;
?>
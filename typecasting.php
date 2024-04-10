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

// floatの科学表記法が埋め込まれている場合もfloatに変換される
$a = "1.23E01";
$b = (double)$a;
var_dump($b);
echo $br;

$a = "5.5E-5";
$b = (float)$a;
var_dump($b);
echo $br;

$a = "295.95 only";
// 数字以外は無視される (onlyが消される)
$b = (double)$a;
var_dump($b);
echo $br;

$a = "$2.50";
// 文字列が数字以外の文字で始まる場合は文字列は0になって変換される
$b = (float)$a;
var_dump($b);
echo $br;

/*---------------------- 文字列型へのキャスト --------------------------*/
$a = 100;
// 100を文字列として出力
$b = (string)$a;
var_dump($b);
echo $br;

$x = 55.50;
// 55.5として出力
$y = (string)$x;
var_dump($y);
echo $br;

/*-------------------- bool型へのキャスト ---------------------*/
$a = 100;
// 0以外の数値はtrueにキャストされる
$b = (bool)$a;
var_dump($a);
echo $br;

$x = 0;
$y = (bool)$x;
var_dump($y);
echo $br;

$m = "hello";
$n = (bool)$m;
var_dump($n);
echo $br;

/*----------- intval()関数 --------------*/
echo intval(42).$br;

// 小数点を切り捨てて整数で表示
echo intval(4.2).$br;

// 文字列も整数に変換
echo intval("42").$br;

/*--------------- floatval()関数 --------------------*/
echo floatval(42).$br;
echo floatval(4.2).$br;
echo floatval('42').$br;

/*------------------ strval()関数 -------------------*/
// 変数の文字列値を取得
echo strval(42).$br;
echo strval(4.2).$br;
echo strval(4.2E5).$br;

/*-------------  文字列  ----------------------*/
$str = 'This is a \'simple\' string';
echo $str .$br;

$str = "\120\110\120";
echo "PHP with Octal:".$str.$br;

$price = 200;
echo "price = \$ $price".$br;

/*------------ 文字列連結演算子 ----------------*/
$str = "Hello world";
$str2 = "1234";

echo $str." ".$str2.$br;

/*------------------ strlen()関数 ---------*/
// 文字列の長さを取得する（空白もカウント）
echo strlen("Hello world").$br;

/*----------- strpos()関数 -------------*/
// 一致した文字列の検索、最初に一致した一を返す（空白カウント）
echo strpos("Hello World","World").$br;

/*----------------- bool値 -----------------*/
$gender = "Male";
var_dump($gender == "Male");
echo $br;

// 0以外の数値はtrueとみなされ、+0,-0,0飲みがfalseになる
$a= 10;
echo "$a: ";
// true
var_dump((bool)$a);
echo $br;

$a = 0;
echo "$a: ";
// false
var_dump((bool)$a);
echo $br;

$a = "hello";
echo "$a: ";
// true
var_dump((bool)$a);
echo $br;

$a = "";
echo "$a: ";
// false
var_dump((bool)$a);
echo $br;

/*------------------ 整数 ----------------*/
$a = 1234;
echo "1234 is an Integer in decimal notation:$a\n".$br;
?>
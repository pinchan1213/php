<?php
// 改行
$br = '<br>';

/* -------------------------------------------
ユーザー定義関数
----------------------------------------------------*/
function message($br){
  echo "これはメッセージです。".$br;
  echo "test";
}
message($br);

/*--------------------------------------------------
パラメータ
-------------------------------------------------------*/
function add($first,$second,$br){
  $res = $first + $second;
  echo "first：".$first.$br;
  echo "second：".$second.$br;
  echo $res.$br;
}
add(10,20,$br);
$x = 100;
$y = 200;
add($x,$y,$br);

/*---------------------------------------------------------
コールバック
-----------------------------------------------------------*/
function changName($num,$br){
  echo "私の名前は".$num."です。".$br;
  $num = "mao";
}
$name = "koma";
echo $name."はタママに似ています。".$br;
changName($name,$br);

/*----------------------------------------------------------
参照による呼び出し
--------------------------------------------------------------*/
function name(&$num,$br){
  echo $num.$br;
  $num = $num;
  echo $num.$br;
}

$name = "koma";
echo "タママに似ている".$name."です。".$br;
name($name,$br);
echo $name.$br;

/*-----------------------------------------------------------------
デフォルトの引数
--------------------------------------------------------------*/
function hello($kotoba="こまち",$kotoba2="まお",$br='<br>'){
  echo $kotoba ."".$kotoba2.$br;
}
hello();
hello("komakoma");
hello("tamama","maomao");

/*--------------------------------------------------------------
名前引数
--------------------------------------------------------*/
// function Fname($x,$y,$br){
//   echo $x.$y.$br;
// }
// Fname(x:10,y:20,$br);

/*--------------------------------------------------------
戻り値
--------------------------------------------------------*/
function abb($fir,$sec,$br){
  $res = $fir + $sec.$br;
  return $res;
}

$x = 10;
$y = 20;
$z = abb($x,$y,$br);
echo $x,$y,$z.$br;

/*------------------------------------------------------------
関数の受け渡し
-----------------------------------------------------*/
function square($num){
  return $num * $num;
}

$arr = [1,2,3,4,5];
// 関数と配列を渡す
$squares = array_map('square',$arr);
var_dump($squares);

/*-------------------------------------------------
再帰関数
--------------------------------------------*/
function fac($n,$br){
  if($n == 1){
    echo $n.$br;
    return 1;
  }else{
    echo "$n * ".$br;
    return $n*fac($n-1,$br);
  }
}
echo fac(5,$br);

/*-----------------------------------------------
型ヒント
------------------------------------------------*/
class Student {
  public $name;
  public  $age;

  public function __construct($name, $age) {
     $this->name = $name;
     $this->age = $age;
  }

  public function dispStudent() {
    global $br;
     echo "Name: $this->name Age: $this->age".$br;
  }
}

/*-------------------------------------------
グローバル関数
------------------------------------------------*/
$name = "koma";

// この状態だとscript内で変数が定義されていないため、エラーになるのでグローバルを付ける
function Khello(){
  global $name;
  global $br;
  echo "こんにちは".$name.$br;
}
Khello();

function Mhello(){
  global $name;
  global $br;
  echo "こんにちは".$name.$br;
}
Mhello();


/* ---------------------------------------------------
$GLOBALS -PHPファイルのどこでも使用できる
---------------------------------------------------------*/
$var1 = "hello";
$var2 = 200;
$var3 = array(1,2,3);

echo $GLOBALS["var1"].$br;
echo $GLOBALS["var2"].$br;
echo implode($GLOBALS["var3"]).$br;


/*-----------------------------------------------------------------------
$_SERVER -HTTP ヘッダー、パス、スクリプトの場所などに関する情報が保持される
----------------------------------------------------------------------*/
foreach($_SERVER as $key){
  global $br;
  echo $key.$br;
}

echo "現在進行中のscriptファイル名を保存する".$br;
echo $_SERVER['PHP_SELF'].$br;

echo "サーバーのIPアドレスを返す".$br;
echo $_SERVER['SERVER_ADDR'].$br;

echo "サーバーのscriptが実行されているサーバーホストの名前を返す".$br;
echo $_SERVER['SERVER_NAME'].$br;

echo "クエリの文字列を返す".$br;
echo $_SERVER['QUERY_STRING'].$br;

echo "httpリクエストのメソッド".$br;
echo $_SERVER['REQUEST_METHOD'].$br;

echo "サーバー上のディレクトリの名前を返す".$br;
echo $_SERVER["DOCUMENT_ROOT"].$br;

echo "ユーザーが現在のページを表示しているマシンのIPアドレスを返す".$br;
echo $_SERVER['REMOTE_ADDR'].$br;

echo "ポート番号を返す".$br;
echo $_SERVER['SERVER_PORT'].$br;

/*--------------------------------------------------------------------
$_REQUEST -変数の内容コレクション
---------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h3>Firstname:</h3>
  <?php echo $_REQUEST['first_name'];?>
  <h3>Lastname:</h3>
  <?php echo $_REQUEST['last_name'];?>
</body>
</html>
<!-- /*------------------------------------------------------------------
$_POST -値を暗号化して渡す
-----------------------------------------------------------------*/ -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="first_name" id="">
    <input type="text" name="last_name">
    <input type="text" name="text">
    <input type="submit" value="送信">
  </form>
  <!-- // サーバーから送られてきたHTTPリクエストがPOSTだった場合 -->
   <?php if($_SERVER['REQUEST_METHOD'] == "POST"){  ?>
  <h3>FirstName:<?php echo $_REQUEST['first_name'];?></h3>
  <h3>LastName:<?php echo $_REQUEST['last_name'];?></h3>
  <h3>Text:<?php echo $_POST['text']?></h3>
  <?php }?>
</body>
</html>


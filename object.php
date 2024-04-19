<?php
  $br = '<br>';

  /*-------------------------------------
   クラスの作成
   ---------------------------------*/
  //  PHPクラスを作成
   class SayHello {
    private $br = '<br>';
    function hello(){
      echo "こんにちは".$this->br;
    }
   }
$obj = new SayHello();
var_dump(gettype($obj));
echo $br;
// hello()メソッドの出力
$obj ->hello();

$obj = new stdClass;
$obj ->name = "こま";
$obj ->age = 22;
print_r($obj);

/*-------------------------------------------------
配列からオブジェクトの変換
--------------------------------------------------*/
$arr = array("name" => "こま","age" => 22);
$obj = (object)$arr;
echo $br;
print_r($obj);

/*-------------------------------------------------------
オブジェクトから配列の変換
-------------------------------------------------------*/
$obj = new stdClass;
$obj ->name = "こま";
$obj -> age = 22;

$arr = (array)$obj;
echo $br;
print_r($arr);

/*-----------------------------------------------------------
スカラー型からオブジェクト型への変換
---------------------------------------------------------*/
$name = "こま";
$age = 22;
$hoge = 4.67;

$obj1 =(object)$name;
echo $br;
print_r($obj1);

$obj2 = (object)$age;
echo $br;
print_r($obj2);

$obj3 = (object)$hoge;
echo $br;
print_r($obj3);

/*---------------------------------------------------
関数の定義
---------------------------------------------------*/
function addtion($x,$y){
  $br = '<br>';
  echo "テスト：$x,$y".($x+$y).$br;
}

$x = 10;
$y = 20;
addtion($x,$y);

/*-----------------------------------------------------------
戻り値の型の宣言
---------------------------------------------------------*/
function hoge(int $x,int $y):int{
  $z = $x + $y;
  return $z;
}

$x = 20.5;
$y =10;

echo "テスト：".$x;
echo hoge($x,$y);

/*-----------------------------------------------------------
アクセス修飾子
-------------------------------------------------------*/

// public -クラスのスコープ外からでもどこでもアクセスできる
// private -クラス自体のみアクセスできる
// protected -クラスとその子クラスのみアクセスでき、他の場所にはアクセスできない

// public
class Book{
  var $price;
  var $title;

  function __construct(string $param1 = "PHP",int $param2 = 300){
    $this->title = $param1;
    $this->price = $param2;
  }

  function getPrice(){
    global $br;
    echo "$this->price".$br;
  }

  function getTitle($br){
    echo "$this->title".$br;
  }

}
$b1 = new Book();
echo "$b1->title \n.$b1->price";

// private
class Fook{
  private $price;
  private $title;

  function __construct(string $param1 = "php",int $param2 = 200)
  {
    $this->title = $param1;
    $this->price = $param2;
  }

  public function getPrice(){
    echo "$this->price";
  }

  // メソッド名を修正
  public function getTitle(){
    echo $this->title;
  }
}

$b1 = new Fook();
// オブジェクトを介してメソッドを正しく呼び出す
$b1->getTitle();
echo "<br>"; // 改行を追加
$b1->getPrice();

/*---------------------------------------------------------------
継承
----------------------------------------------------------------*/
class myclass{

  public function hello(){
    echo "こんにちは".PHP_EOL;
  }
  public function thanks(){
    echo "ありがとう".PHP_EOL;
  }
}

// myclassを継承してnewclassクラスを定義
  class newclass extends myclass{
    public function thanks(){
      echo "こまち".PHP_EOL;
    }
  }

  $obj1 = new myclass();
  $obj1 ->hello();
  $obj1->thanks();

  $obj2 = new newclass;
  $obj2->hello();
  $obj2->thanks();

  class Koma{
    protected  $price;
    protected  $title;

    public function getbook(string $param1, int $param2){
      $this->title = $param1;
      $this->price = $param2;
    }

    public function dispbook(){
      echo "$this ->title,$this->price\n";
    }
  }

  class ebook extends Koma{
    private $format;
    public function getebook(string $param1, int $param2, string $param3){
      $this->title = $param1;
      $this->price = $param2;
      $this->format = $param3;
    }

    public function dispbook(){
      echo $this->title;
      echo $this->format;
    }
  }

  $aa = new ebook;
  $aa -> getebook("こま",300,"mao");
  $aa ->dispbook();
  $bb = new Koma;

  

?>
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
?>
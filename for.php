<?php
$br = '<br>';

/*-------------------------------------------------------------
foreach ループ処理
-------------------------------------------------------*/
class myclass{
  private $var;
  protected $var1;
  public $x,$y,$z;

  public function __construct()
  {
    $this->var = "hello";
    $this->var1 = array(1,2,3);
    $this->x = 10;
    $this->y=20;
    $this->z =30;
  }
}
$obj = new myclass();
foreach($obj as $key){
  print $key;
}

/*--------------------------------------------------------------------
オーバーロード
---------------------------------------------------------------------*/
class mclass {
  private $properties = [];

  public function __set($name, $value)
  {
    // プロパティを$properties配列に保存
    $this->properties[$name] = $value;
    echo $name.$value;
  }

  public function __get($name){
    if (array_key_exists($name, $this->properties)) {
      // $properties配列からプロパティの値を取得
      return $this->properties[$name];
    } else {
      // プロパティが存在しない場合には、特定の処理を行う
      echo "プロパティ {$name} は存在しません。";
      return null;
    }
  }
}

$obj = new mclass();
$obj->myproperty = "こまち";
echo $obj->myproperty;


/*--------------------------------------------------------------------
匿名クラス
------------------------------------------------------------------*/
$obj = new class(10){
  private $x;

  function __construct($x){
    $this->x = $x;
  }

  public function addtion($x){
    return $this->x+$x;
  }

  public function div($x){
    return $this ->x/$x;
  }
};

echo $obj  ->addtion(20).$br;
echo $obj ->div(20).$br;

?>
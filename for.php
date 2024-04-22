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
?>
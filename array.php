<?php
$br = '<br>';

$arr1 = [10,20,30];
$arr2 = array("one"=>1,"two"=>2,"three"=>3);

var_dump($arr1[0]);
echo $br;
var_dump($arr2["one"]);
echo $br;

/*-------------------------------------
配列 foreachループ
-----------------------------------*/
$arr =[10,20,30,40,50];
foreach($arr as $val){
  echo $val.$br;
  // 改行
  // echo "$val\n";
}

$arr = [10,20,30,40,50];
foreach($arr as $key =>$val){
  echo "arr[$key] = $val.$br";
}
?>
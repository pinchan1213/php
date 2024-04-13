<?php
  $br = '<br>';

  /*--------------------------------------------
  算術演算子 算術演算の実行(足し算、引き算等)
  -------------------------------------------------*/
  $a = 20;
  $b = 34;

  $c = $a + $b;
  echo $c;

  /*----------------------------------------------------
  比較演算子 比較の結果に基づいてtrueまたはfalseを返す
  -------------------------------------------------------*/
  $a = 30;
  $b = 43;

  if($a == $b){
    echo "同じ値です。".$br;
  }else{
    echo "違う値です".$br;
  }

  if($a > $b){
    echo "aの方がbより大きいです".$br;
  }else{
    echo "bの方が大きいです".$br;
  }

  if($a != $b){
    echo "aとbは等しくない".$br;
  }

  /*-------------------------------------------------------
  論理演算子 条件式に使う
  ----------------------------------------------------*/
  $a = 40;
  $b = 53;

  // $aかつ$bが共にtrueである場合に実行
  if($a && $b)

  // $aかつ$bが共にtrueである場合に実行(&&の方が優先度は高い)
  if($a and $b)

  // $aまたは$bのいずれか(または両方)の時に条件式が適用される
  if($a || $b)

  // $aまたは$bのいずれか(または両方)の時に条件式が適用される(||の方が優先度は高い)
  if($a or $b)

  // $aではないときに実行される(false)の時
  if(!$a)

  /*--------------------------------------------------------
  文字列演算子 文字列を連結する
  -------------------------------------------------------*/
  $a = "";
  $a = "こんにちは ";
  $b = "世界";
  $a .=$b;
  echo $a.$br;

  /*--------------------------------------------------------------
  条件演算子
  -----------------------------------------------------------*/
  $a = 10;
  $b = 30;

  // if文を1行に収める
  $test = ($a > $b) ? $a:$b;
  echo $test.$br;

  /*--------------------------------------------------
   スプレッド演算子
   -------------------------------------------*/

  //  ...をスプレッド演算子として使用する
  $arr1 = [4,5];
  $arr2 = [1,2,3,...$arr1];

  print_r($arr2);
  echo $br;

  $arr1 =[1,2,3];
  $arr2 = [4,5,6];
  $arr3 = [...$arr1,$arr2];

  print_r($arr3);
  echo $br;

  $arr1 =[1,2,3];
  $arr2 = [4,5,6];
  // 複数の配列をマージする
  $arr3 = array_merge($arr1,$arr2);

  print_r($arr3);
  echo $br;

  function myfunction($x,$y,$z =30){
    $br = "<br>";
    echo "$x,$y,$z".$br;
  }

  myfunction(...[10,20],z:30);

  function get_squares(){
    for($i= 0;$i<5; $i++){
      $arr[] = $i**2;
    }
    return $arr;
  }
  $squares =[...get_squares()];
  print_r($squares);
  echo $br;

?>
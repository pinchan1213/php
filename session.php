<?php
/*-----------------------------------------------------
セッションをスタート
---------------------------------------------------------*/
session_start();

// セッション関数が既に設定されているか確認する
if(isset($_SESSION['counter'])){
  $_SESSION['counter'] += 1;
}else{
  $_SESSION['counter'] = 1;
}
$msg = "Number of visits in this session: ".  $_SESSION['counter'];

echo $msg;

// 単一の変数の設定を解除する設定
unset($_SESSION['counter']);

// 全てのセッションを破棄
session_destroy()
?>
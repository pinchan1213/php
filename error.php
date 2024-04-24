<?php
/*-----------------------------------------------------------------
エラー処理
------------------------------------------------------------------*/

// 指定されたパスにファイルが存在するかをチェックする
if(!file_exists('test.txt')){
  die('File mot found');
}else{
  // fopen()関数を使ってファイルを読み取りモードで開く
  $file = fopen('test.txt','r');
  // ファイルが開けたこと、成功したことを示すメッセージ
  print "Opend file sucessfully";

  // 開いたファイルを閉じる
  fclose($file);
}


/*-----------------------------------------------------------
カスタム関数でエラー処理を実装する
------------------------------------------------------------*/
// error_reporting()はPHPがどのレベルのエラーを報告するかを指定する
// E_ERRORは致命的な実行時エラーのみを報告するように実行する
// E_WARNING、E_NOTICEは無視されスクリプトの実行はそれらのエラーで大使しないようになる
error_reporting(E_ERROR);

// 引数として引き取りエラーメッセージを出力する
function errHandler($errno,$errstr){
  echo "$errno.message:$errstr".PHP_EOL;
  // 関数でスクリプトを終了する
  die();
}

set_error_handler('errHandler');

// 指定されたファイルを読み取りモードで開く
$f = fopen('text.txt','r');
// ファイルが正常に開けたことを表すメッセージ
echo 'ファイルを開けました';
// 開かれたファイルを閉じ、リソースを開放する
fclose($f);

/*---------------------------------------------------------
例外処理
-------------------------------------------------------*/
try{
  // 常にエラーを表示させる
  // 例外メッセージとして使用
  $err = 'Always throw this error';

  // Exceptionクラスの新しいインスタンスが作成され、$errにエラーメッセージが渡される
  throw new Exception($err);
// 意図的に例外が発生された場合、この行はスキップされる
  echo '実行しない';

  // tryブロック内で投げられたExceptionの例外をキャッチ。$eはcatchされた例外オブジェクトを参照する
}catch(Exception $e){
  // catchされた例外からエラーメッセージを取得し、画面に表示する
  // getMessag()メソッドを呼び出し、設定されたエラーメッセージ(Always throw this error)を返す
  echo '例外をキャッチしました：'. $e->getMessage().'';
}

// 例外がキャッチされた後に実行される。エラーが適切に処理されていることを示す
echo 'こまち';

/*------------------------------------------------------
Exceptionクラスから利用できる関数一覧

// 例外のメッセージ
getMessage();

// 例外のコード
getCode();

// ソースファイル名
getFile();

// ソース行
getLine();

// backtrace() の n 配列
getTrace();

// フォーマットされたトレース文字列
getTranceAsString();

-------------------------------------------------------*/

/*---------------------------------------------------------
ユーザー定義の独自カスタム例外ハンドラーの定義
----------------------------------------------------------*/
// exceptionHandler()を定義
// $exceptionのパラメータを取る
function exceptionHandler($exception){
  echo $exception->getMessage();
}

set_exception_handler('exceptionHandler');
throw new Exception('Uncaught Exception');

echo 'Not Executed';





?>
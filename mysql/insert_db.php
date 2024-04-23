<?php
/*------------------------------------------------------------
データの挿入
--------------------------------------------------------------*/
$dbhost = 'localhost:3306';
$dbuser = 'koma';
$dbpass = 'koma';

$db = mysqli_connect($dbhost,$dbuser,$dbpass);

$sql = 
'INSERT INTO koma'.
'(koma_name,koma_mail,join_date)'.
'VALUES ("koma","test@email.com",NOW())';

mysqli_select_db($db,'test_db');
$retvl = mysqli_query($db,$sql);

/*--------------------------------------------------------
テーブルからレーコードを取得
------------------------------------------------------*/
$sql = 'SELECT koma_id,koma_name FROM koma';
mysqli_select_db($db,'test_db');
$retvl = mysqli_query($db,$sql);

// mysqli_query()から返された値を配列として取得する
// 結果セットからデータがなくなるまで繰り返し処理を出力する
while($row = mysqli_fetch_array($retvl)){
  echo "EMP ID :{$row['koma_id']}  <br> ".
       "EMP NAME : {$row['koma_name']} <br> ".
       "EMP SALARY : {$row['koma_salary']} <br> ".
       "--------------------------------<br>";
}

// mysqli_query()によってデータを全て処理し終えた後にそのデータをメモリから解放するために使う
mysqli_free_result($retvl);


?>
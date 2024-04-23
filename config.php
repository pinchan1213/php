<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','mydb');
// データベース接続オブジェクトの確立
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// ユーザー名とパスワードがユーザー入力と一致する管理テーブル内の行を取得
$username = isset($_POST['username']) ? mysqli_real_escape_string($db, $_POST['username']) : '';
$userpassword = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']) : '';

$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$userpassword'";

// データベース上でクエリを実行する
$result = mysqli_query($db,$sql);
// 結果セットの行数を取得する
$row = mysqli_num_rows($result);
?>
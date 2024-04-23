<?php
/*-----------------------------------------------------------------
cookieをセット
--------------------------------------------------------------*/
if (isset($_COOKIE['username'])){
  echo '<h2>クッキーの名前をセット'.$_COOKIE['username'].'</h2>';
}else{
  // setcookie()関数を使って新しいクッキーをセットする
  setcookie("username","MohanKumar");
  echo 'cokkieをセットします';
}


/*--------------------------------------------------------------
全てのクッキーを取得する
---------------------------------------------------------*/
$arr = $_COOKIE;
foreach($arr as $key);
echo $key;
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<form action="cookie.php" method="POST">
   <input type="text" name="name">
   <input type="text" name="age">
   <input type="submit" name="Submit">
</form>
<?php
if(isset($_POST{"submit"})){
  setcookie("name",$_POST["name"]);
  setcookie("age",$_POST['age']);
}

if (isset($_COOKIE["name"]))
echo "Cookie: name => " . $_COOKIE["name"]. "<br>";
if (isset($_COOKIE["age"]))
echo "Cookie: age => " . $_COOKIE["age"]. "<br>";
?>
</body>
</html>
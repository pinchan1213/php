<?php
include('session.php')
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ようこそ</title>
</head>
<body>
  <h1>ようこそ<?php echo $login_session;?></h1>
  <h2><a href="logout.php">ログアウト</a></h2>
</body>
</html>
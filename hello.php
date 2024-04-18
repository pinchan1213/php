<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    <input type="text" name="first_name" id="">
    <input type="text" name="last_name">
    <input type="submit" value="送信">
  </form>
  <!-- // サーバーから送られてきたHTTPリクエストがPOSTだった場合 -->
   <?php if($_SERVER['REQUEST_METHOD'] == "POST"){  ?>
  <h3>FirstName:<?php echo $_REQUEST['first_name'];?></h3>
  <h3>LastName:<?php echo $_REQUEST['last_name'];?></h3>
  <?php }?>
</body>
</html>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    span{
      color: pink;
    }
  </style>
</head>
<body>
  <p>Search</p>
  <form>
    <input type="text" onkeyup="showHint(this.value)">
  </form>
  <p>name：<span id="txtHint"></span></p>
<script>
  function showHint(str){
    if(str.length == 0){
      document.getElementById('txtHint').innerHTML = "";
      return;
    }else{
      let xml = new XMLHttpRequest();
      xml.onreadystatechange = function(){
        if(xml.readyState == 4 && xml.status == 200){
          document.getElementById('txtHint').innerHTML = xml.responseText;
        }
      }
      xml.open("GET","hello.php?q=" + str,true);
      xml.send();
    }
  }
</script>
</body>
</html>
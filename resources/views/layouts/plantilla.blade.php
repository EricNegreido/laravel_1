<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
  .header{
    background-color: red;
  }
  
  .body{
    background-color: green;
  }
  
  .footer{
    background-color: yellow;
  }
</style>
</head>
<body>
  
<div class="header">
  @yield("header")
</div>
<div class="body">
  @yield("body")
</div>
<div class="footer">
  @yield("footer")
</div>
</body>
</html>
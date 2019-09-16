<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

<form action="/ApiPost" method = "POST">

    {{ csrf_field() }}
   Title :  <input type="text" name = "title" ><br>
   Contetnt : <input type="text" name = "content">
    <input type="submit" value="POST">
</form>
    
</body>
</html>
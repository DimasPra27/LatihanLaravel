<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <table border = "1">
        
        @foreach($data as $res)
        <tr>
            <td>{{ $res->title }}</td><br>
            <td>{{ $res->content }}</td>
        </tr>
        @endforeach

    </table>
    
</body>
</html>
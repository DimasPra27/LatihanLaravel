<!DOCTYPE html>
<html lang="en">
<head>
    <title>Test controller passing data and return view</title>
</head>
<body>
    <h1>Test controller And Passing Data dari controller</h1>
    <p>Nama : {{$nama}}</p>
    <br>
    <ul>

        @foreach($matpel as $mat)

        <li>{{ $mat }}</li>
        @endforeach

    </ul>
</body>
</html>
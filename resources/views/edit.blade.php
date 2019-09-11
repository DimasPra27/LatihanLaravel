<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h2>EDIT DATA</h2>

    <a href="/pegawai">Kembali</a>
    <br>
    <br>

    @foreach($pegawai as $peg)
    <form action="/pegawai/update" method="post">
        {{ csrf_field() }}
        <input type="hidden" name ="id" value ="{{ $peg->pegawai_id }}"><br>
       Nama :  <input type="text" name ="nama" value = "{{ $peg->pegawai_nama }}" required = "required"><br>
       Jabatan :  <input type="text" name ="jabatan" value = "{{ $peg->pegawai_jabatan}}" required = "required"><br>
        Umur : <input type="number" name="umur" value = "{{ $peg->pegawai_umur}}" required = "required"><br>
        Email : <textarea name="Email" required ="required" > {{ $peg->pegawai_Email}}</textarea><br>
        <input type="submit" value="Simpan">
    </form>
    @endforeach
</body>
</html>
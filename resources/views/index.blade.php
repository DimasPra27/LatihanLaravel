<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Data Pegawai</h2>
    <a href="/index/add"> + Tambah Pegawai </a>
    <hr>

    <table border = "1" >
        <tr>
            <td>Nama</td>
            <td>Jabatan</td>
            <td>Umur</td>
            <td>Email</td>
            <td>Update&Delete</td>
        </tr>
        @foreach($pegawai as $peg)
        <tr>
            <td>{{ $peg->pegawai_nama }}</td>
            <td>{{ $peg->pegawai_jabatan }}</td>
            <td>{{ $peg->pegawai_umur }}</td>
            <td>{{ $peg->pegawai_Email }}</td>
            <td>
                <a href="/index/update">Update</a>
                <a href="/index/delete">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
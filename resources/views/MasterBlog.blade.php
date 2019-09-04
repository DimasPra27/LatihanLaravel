<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sitem Tamplate Blade Laravel</title>
</head>
<body>
<header>
    <h2>Belajar Tamplate Blade</h2>
    <nav>
    <a href="/blog">Home</a>
    <a href="/blog/Tentang">Tentang</a>
    <a href="/blog/Kontak">Kontak</a>
    </nav>
</header>
<hr/>
<br>
<br>

<!-- Judul halaman -->
<h3>@yield('Judul')</h3>

<!-- Isi Konten -->
<h3>@yield('Konten')</h3>


</body>
</html>
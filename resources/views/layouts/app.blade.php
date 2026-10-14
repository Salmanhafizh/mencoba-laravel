<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('judul')</title>
</head>
<body>
   <header>
      <h1>KantinKita</h1>
      <nav>
         <a href="{{ route('beranda') }}">Beranda</a>
         <a href="{{ route('tentang') }}">Tentang</a>
      </nav>
   </header>

   <main>
      @yield('isi')
   </main>

   <footer>
      <p>Praktikum PBW2 - D3 RPLA Telkom University</p>
   </footer>
</body>
</html>
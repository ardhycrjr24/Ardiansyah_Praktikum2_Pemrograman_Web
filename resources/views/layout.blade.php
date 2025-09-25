<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'Aplikasi Mahasiswa')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .navbar {
      box-shadow: 0 2px 6px rgba(0,0,0,0.15);
    }
    main {
      flex: 1; /* supaya konten mendorong footer ke bawah */
    }
    footer {
      background: #212529;
      color: #ccc;
      padding: 15px 0;
      text-align: center;
      font-size: 0.9rem;
    }
  </style>

</head>
<body>
  


  <!-- tambah Navbar -->
  <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand fw-bold" href="{{ route('mahasiswa.index') }}">DAFTAR MAHASISWA</a>
      <ul class="navbar-nav flex-row">
        <li class="nav-item mx-2"><a href="{{ route('mahasiswa.index') }}" class="nav-link">Mahasiswa</a></li>
        <li class="nav-item mx-2"><a href="{{ route('dosen.index') }}" class="nav-link">Dosen</a></li>
        <li class="nav-item mx-2"><a href="{{ route('matakuliah.index') }}" class="nav-link">Mata Kuliah</a></li>
    </ul>
    </div>
  </nav>

  <!-- Content -->
  <main class="container my-5">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <p>© {{ date('Y') }} ardhycrjr24 | Laravel12 </p>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoeTalog | Koleksi Sepatu Terbaik</title>
    {{-- Bootstrap CSS dari CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Google Fonts dari CDN --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    {{-- Bootstrap JS dari CDN (ditempatkan di <head> atau sebelum </body>) --}}
    {{-- Untuk kesederhanaan, bisa di <head> atau di kaki halaman --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Jika Anda punya JavaScript kustom, Anda perlu menautkannya secara manual di sini --}}
    {{-- <script src="{{ asset('js/custom.js') }}"></script> --}}
</head>
<body>
    {{-- Navbar Bootstrap (fixed-top untuk tampilan modern) --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">ShoeTalog</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('shoes.index') }}">Semua Sepatu</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>

    <footer class="mt-5 py-3 text-center">
        <div class="container">
            <p>&copy; {{ date('Y') }} ShoeTalog. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
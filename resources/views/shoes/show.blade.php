@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <a href="{{ route('shoes.index') }}" class="btn btn-outline-secondary mb-4">← Kembali ke Daftar Sepatu</a>
        <div class="row">
            <div class="col-md-6 mb-4">
                @if($shoe->image)
                    <img src="https://via.placeholder.com/500x500/{{ rand(0,9) }}{{ rand(0,9) }}{{ rand(0,9) }}?text={{ urlencode($shoe->name) }}" class="img-fluid rounded shadow-sm" alt="{{ $shoe->name }}">
                @else
                    <img src="https://via.placeholder.com/500x500?text=No+Image" class="img-fluid rounded shadow-sm" alt="No Image">
                @endif
            </div>
            <div class="col-md-6 mb-4">
                <h1 class="mb-3" style="font-weight: 700;">{{ $shoe->name }}</h1>
                <p class="lead text-muted">{{ $shoe->brand->name ?? 'Merk Tidak Diketahui' }}</p>
                {{-- <h3 class="mb-4" style="color: #4CAF50; font-weight: 700;">Rp{{ number_format($shoe->price, 0, ',', '.') }}</h3> --}}
                {{-- HILANGKAN BARIS INI (Harga) --}}
                <p class="mb-3">{{ $shoe->description }}</p>
                {{-- <p class="mb-4"><strong>Stok Tersedia:</strong> <span class="badge bg-success">{{ $shoe->stock }}</span></p> --}}
                {{-- HILANGKAN BARIS INI (Stok) --}}

                {{-- Tambahkan info kontak atau tombol untuk inquiry --}}
                <p class="text-muted mt-5">Untuk informasi lebih lanjut mengenai produk ini, silakan hubungi kami:</p>
                <p class="lead mb-2"><a href="mailto:info@shoetalog.com" class="text-primary text-decoration-none">info@shoetalog.com</a></p>
                <p class="lead mb-0">Telp: <a href="tel:+628123456789" class="text-primary text-decoration-none">+62 812-3456-789</a></p>
            </div>
        </div>
    </div>
@endsection
@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <section class="hero-section text-center py-5 mb-5">
            <div class="container">
                <h1>Temukan Sepatu Impian Anda</h1>
                <p class="lead">Jelajahi koleksi terbaru dari merek terbaik, siap menemani setiap langkah Anda.</p>
                <a href="{{ route('shoes.index') }}" class="btn btn-light btn-lg">Telusuri Koleksi</a>
            </div>
        </section>

        <h2 class="text-center mb-5" style="font-weight: 700; color: #343a40;">Koleksi Sepatu Terbaik</h2>
        <div class="row">
            @forelse($shoes as $shoe)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                    <div class="card shoe-card">
                        @if($shoe->image)
                            <img src="https://via.placeholder.com/250x250/{{ rand(0,9) }}{{ rand(0,9) }}{{ rand(0,9) }}?text={{ urlencode($shoe->name) }}" class="card-img-top" alt="{{ $shoe->name }}">
                        @else
                            <img src="https://via.placeholder.com/250x250?text=No+Image" class="card-img-top" alt="No Image">
                        @endif
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">{{ $shoe->name }}</h5>
                                <p class="card-text text-muted">{{ $shoe->brand->name ?? 'Merk Tidak Diketahui' }}</p>
                                {{-- <p class="card-text price">Rp{{ number_format($shoe->price, 0, ',', '.') }}</p> --}}
                                {{-- HILANGKAN BARIS INI (Harga) --}}
                            </div>
                            <a href="{{ route('shoes.show', $shoe->id) }}" class="btn btn-primary mt-auto">Lihat Detail Produk</a> {{-- Ubah teks tombol --}}
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center py-5">
                    <p class="lead">Belum ada sepatu yang tersedia untuk ditampilkan.</p>
                    <img src="https://via.placeholder.com/150x150?text=No+Shoes" alt="No Shoes" class="img-fluid my-4" style="opacity: 0.7;">
                    <p class="text-muted">Tambahkan beberapa data sepatu melalui database atau seeder.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection
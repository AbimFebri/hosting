<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Brand; // Import Model Brand

class ShoeSeeder extends Seeder
{
    public function run(): void
    {
        // Pastikan merek-merek ini ada atau tambahkan di BrandSeeder jika belum
        $nikeBrand = Brand::where('name', 'Nike')->first();
        $adidasBrand = Brand::where('name', 'Adidas')->first();
        $pumaBrand = Brand::where('name', 'Puma')->first();
        $newBalanceBrand = Brand::where('name', 'New Balance')->first();
        $converseBrand = Brand::where('name', 'Converse')->first();
        $vansBrand = Brand::firstOrCreate(['name' => 'Vans']); // Tambahkan jika belum ada
        $reebokBrand = Brand::firstOrCreate(['name' => 'Reebok']); // Tambahkan jika belum ada

        // Bersihkan tabel sebelum menambahkan data baru untuk menghindari duplikasi
        DB::table('shoes')->truncate(); // HATI-HATI: Ini akan menghapus semua data sepatu yang ada!

        DB::table('shoes')->insert([
            [
                'brand_id' => $nikeBrand->id ?? 1,
                'name' => 'Air Force 1',
                'description' => 'Sepatu klasik ikonik dari Nike, cocok untuk gaya sehari-hari dan tahan lama.',
                'price' => 1200000.00, // Tetap simpan harga di DB, hanya tidak ditampilkan
                'stock' => 50,         // Tetap simpan stok di DB, hanya tidak ditampilkan
                'image' => 'nike_af1.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $adidasBrand->id ?? 2,
                'name' => 'Ultraboost 22',
                'description' => 'Sepatu lari berperforma tinggi dari Adidas dengan bantalan responsif untuk kenyamanan maksimal.',
                'price' => 1850000.00,
                'stock' => 30,
                'image' => 'adidas_ultraboost.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $pumaBrand->id ?? 3,
                'name' => 'Suede Classic',
                'description' => 'Siluet ikonik Puma dengan bahan suede premium dan sentuhan emas, gaya klasik abadi.',
                'price' => 950000.00,
                'stock' => 40,
                'image' => 'puma_suede.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $nikeBrand->id ?? 1,
                'name' => 'Jordan 1 Mid',
                'description' => 'Mid-top Air Jordan 1 dengan desain yang selalu relevan dan kombinasi warna yang menarik.',
                'price' => 1700000.00,
                'stock' => 25,
                'image' => 'nike_jordan1.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $adidasBrand->id ?? 2,
                'name' => 'Gazelle',
                'description' => 'Sneaker low-profile klasik Adidas dengan gaya abadi dan nyaman untuk pemakaian sehari-hari.',
                'price' => 1100000.00,
                'stock' => 35,
                'image' => 'adidas_gazelle.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $converseBrand->id ?? 5,
                'name' => 'Chuck 70 Classic',
                'description' => 'Versi premium dari Converse Chuck Taylor All Star, dengan detail vintage.',
                'price' => 1050000.00,
                'stock' => 60,
                'image' => 'converse_chuck70.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $newBalanceBrand->id ?? 4,
                'name' => 'New Balance 990v5',
                'description' => 'Sepatu lari yang nyaman dengan desain ikonik dan kualitas premium, dibuat di USA.',
                'price' => 2500000.00,
                'stock' => 20,
                'image' => 'newbalance_990v5.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $vansBrand->id ?? 6,
                'name' => 'Old Skool',
                'description' => 'Sepatu skate klasik Vans dengan side stripe khas, daya tahan tinggi untuk gaya kasual.',
                'price' => 800000.00,
                'stock' => 70,
                'image' => 'vans_oldskool.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $reebokBrand->id ?? 7,
                'name' => 'Club C 85',
                'description' => 'Sneaker tenis klasik Reebok dengan tampilan minimalis dan sentuhan vintage.',
                'price' => 900000.00,
                'stock' => 45,
                'image' => 'reebok_clubc85.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
            [
                'brand_id' => $adidasBrand->id ?? 2,
                'name' => 'Stan Smith',
                'description' => 'Sneaker ikonik Adidas yang dinamai dari legenda tenis, bersih dan serbaguna.',
                'price' => 1150000.00,
                'stock' => 55,
                'image' => 'adidas_stansmith.jpg',
                'created_at' => now(), 'updated_at' => now(),
            ],
        ]);
    }
}
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('shoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('brand_id')->constrained()->onDelete('cascade'); // Foreign Key ke brands
            $table->string('name'); // Nama sepatu
            $table->text('description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('stock');
            $table->string('image')->nullable(); // Path gambar utama sepatu
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('shoes');
    }
};
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detailorders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idorder')->constrained('orders')->onDelete('cascade');  // Menghubungkan dengan tabel orders
            $table->foreignId('idproduk')->constrained('produks');  // Menghubungkan dengan tabel products
            $table->integer('jumlah');
            $table->decimal('harga', 10, 2);
            $table->decimal('total', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailorders');
    }
};

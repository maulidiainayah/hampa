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
        Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('idorder')->constrained('orders')->onDelete('cascade'); // Pesanan
            $table->decimal('total', 10, 2); // Jumlah pembayaran
            $table->string('metodebayar'); // Metode pembayaran
            $table->string('status')->default('menunggu'); // menunggu, berhasil, gagal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};

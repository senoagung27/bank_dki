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
        Schema::create('stocks', function (Blueprint $table) {
            $table->id(); // Id Barang (sequence)
            $table->string('name'); // Nama Barang
            $table->integer('quantity'); // Jumlah Stok Barang
            $table->string('serial_number'); // Nomor Seri Barang
            $table->json('additional_info')->nullable(); // Additional Info (type JSONB)
            $table->string('image')->nullable(); // Gambar Barang
            $table->unsignedBigInteger('created_by'); // Created By
            $table->unsignedBigInteger('updated_by')->nullable(); // Updated By
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stocks');
    }
};

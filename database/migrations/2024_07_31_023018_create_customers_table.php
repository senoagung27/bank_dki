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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('birth_place');
            $table->date('birth_date');
            $table->enum('gender', ['laki-laki', 'wanita']);
            // $table->foreignId('job_id')->constrained('jobs');
            $table->text('address');
            $table->decimal('initial_deposit', 15, 2); // Format rupiah
            $table->string('status')->default('Menunggu Approval');
            $table->foreignId('created_by')->constrained('users'); // CS User ID
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

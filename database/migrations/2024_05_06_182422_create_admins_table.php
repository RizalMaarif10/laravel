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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('nama_akun');
            $table->string('email')->unique();
            $table->string('gender');
            $table->integer('umur');
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->unsignedBigInteger('toko_id')->nullable();
            $table->foreign('toko_id')->references('id')->on('tokos')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};

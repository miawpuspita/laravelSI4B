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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 10);
            $table->char('npm', 10);
            $table->string('tempat_lahir', 45);
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->foreignId('prodi_id') ->constrained(); 
            // $table->unsignedBigInteger('prodi_id');
            // $table->foreign(prodi_id)->references('id')->on('prodis');
            $table->string('url_foto');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};

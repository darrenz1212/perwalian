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
       Schema::create('polling', function (Blueprint $table){
           $table->integer('id_polling')->primary();
           $table->string('id_matkul');
           $table->dateTime('tanggal_dibuka');
           $table->dateTime('tanggal_ditutup');

       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};

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
        Schema::create('fon', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string("gelnelAciklama");
            $table->string("fonKodu");
            $table->string("fonKurucu");
            $table->integer("yillikYonetimUcreti");
            $table->integer("riskDegeri");
            $table->integer("alisValoru");
            $table->integer("satisValoru");
            $table->boolean("islemDurumu"); //Alert icin
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

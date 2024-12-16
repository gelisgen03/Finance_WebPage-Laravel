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
            Schema::create('ustPanelData', function (Blueprint $table) {
                $table->string('id')->primary();
                $table->string("bulunulanSayfaAdi");
                $table->string("fonAdi");
                $table->string("fonAdiAltAciklama");
                $table->date("guncelTarih");
                $table->string("guncelTarihData");
                $table->string("birAylikGetitiData");
                $table->string("ucAylikGetitiData");
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

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Faker\Factory as Faker;
use phpDocumentor\Reflection\Types\Void_;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fake_info', function (Blueprint $table) {
            $table->id('id');
            $table->string('fake_ad');
            $table->string('fake_surname')->default('100');
            $table->string('fake_gender');
            $table->string('fake_email');
            $table->string('fake_password');
            $table->string('fake_addres');
            $table->string('fake_age'); // Yeni sütun ekleme
            $table->string('fake_telNo');
            $table->timestamps();
        });
       
    }
    public function down(): Void{
        Schema::drop('fake_info');
    }

   
};

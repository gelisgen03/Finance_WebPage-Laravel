<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class post extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = "gonderiler"; // Veritabanındaki tablo adı
    // Birincil anahtar (id varsayılan)
    protected $fillable = ['title', 'slug', 'user', 'see', 'description']; // Toplu atama için izin verilen sütunlar
    



    
}

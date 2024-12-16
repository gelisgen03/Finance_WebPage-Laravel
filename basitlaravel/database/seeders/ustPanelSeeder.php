<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ustPanelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("ustPanelData")->insert([    
            'bulunulanSayfaAdi'=>"Fonlar",
            'fonAdi'=> "IPB",
            'fonAdiAltAciklama'=>"This is notA good idea",
            'guncelTarih'=>"03/03/2003",
            'guncelTarihData'=>"Unknown",
            'birAylikGetitiData'=>"0.5555",
            'ucAylikGetitiData'=>"0.9999",
            
            
    
            ]);
    }
}

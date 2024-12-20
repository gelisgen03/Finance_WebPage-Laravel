<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fonBilgilendirmeWidgetData extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("fon")->insert([    
            'gelnelAciklama'=>"Fon yatırım stratejisi çerçevesinde sabit bir varlık dağılımı hedefi olmayıp değişken piyasa koşullarına göre esnek olarak yönetilmesi esasına dayanır. Fon yönetiminde yatırım yapılacak 
             sermaye piyasası araçlarının seçiminde, getiri potansiyeli yüksek, likit varlıklar tercih edilir.",
            'fonKodu'=> "IPB",
            'fonKurucu'=> "PORTFÖY YÖNETİMİ A",
            'yillikYonetimUcreti'=>"%2,10",
            'riskDegeri'=>'6',
            'alisValoru'=>'1',
            'satisValoru'=>'2',
            'islemDurumu'=>'',
            
            
    
            ]);
    }
}

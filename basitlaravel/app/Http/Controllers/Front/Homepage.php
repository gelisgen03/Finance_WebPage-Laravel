<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Front\ozetRaporlar;
use App\Models\ustPanelData;

use function Pest\Laravel\get;

class HomePage extends Controller

{
public function index(){
    
    /*$data1=DB::table('fon')->get();
    (BU BİR KOLEKSİYON DİZİ DÖNDÜRÜR)
    */ 
    $homedata=DB::table('fon')->first();
    $ustsayfadata=DB::table('ustpaneldata')->first();
    $fonbilgisidata=DB::table('fon')->first();

    $data2=DB::table('fon')->where("id",'=',0);
    return view('front.homepage',compact('homedata','ustsayfadata','fonbilgisidata'));  
}


}

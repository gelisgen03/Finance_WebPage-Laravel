<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Front\ozetRaporlar;
use function Pest\Laravel\get;

class HomePage extends Controller

{
public function index(){
    
    $data1=DB::table('fon')->get();
    $data2=DB::table('fon')->where("id",'=',0);
    return view('front.homepage',compact('data1'));  
}


}

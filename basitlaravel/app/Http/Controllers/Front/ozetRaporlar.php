<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\fon;

class ozetRaporlar extends Controller
{
    public function getData(){
        $datas=fon::first()->get();
        compact('datas');
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class AjaxController extends Controller
{
    public function getData(Request $request)
    {
        $data = DB::table('ustpaneldata')->select('guncelTarih', 'guncelSaat')->first(); // Tek kayıt al
        return response()->json($data);
    }
}
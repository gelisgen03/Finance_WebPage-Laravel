<?php

namespace App\Http\Controllers;
use App\Models\ustPanelData;
abstract class Controller
{
    public function index()
    {
        // Tüm verileri çek
        $data = ustPanelData::all();
        
        // Belirli bir koşula göre veri çekme (örnek)
        // $products = Product::where('price', '>', 100)->get();

        // Sayfalama (opsiyonel)
        // $products = Product::paginate(10);

        return view('ustPanelData.index', compact('ustPanelData'));
    }
    
}

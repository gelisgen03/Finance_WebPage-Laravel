<?php   

namespace App\Http\Controllers;

use Faker\Provider\ar_EG\Text;
use Illuminate\Http\Request;

class Anasayfa extends Controller {
    public function index(){

        
        return view('\front\homepage');
    }
    public function hakkimizda(){
    return "hakkimizda";
}
    public function app(){
        return "route çalişti";
    }
    public function iletisim(){
        return view('iletisim');
    }
    public function post(Request $request){ //kutuphanenin icinde ki degisken $request
        $name = htmlspecialchars($_POST['name']); //yontem 1
        #$email = htmlspecialchars($_POST['mail']);
        echo "<h2> Kayit Basarili </h2> <br>";
        echo "Ad: ", $name,"<br>";
        echo  "Mail: ",$request->mail; //yontem 2

    }
}

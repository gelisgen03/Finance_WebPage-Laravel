<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\post;
use function Pest\Laravel\get;

class App extends Controller
{   
    public function index(){
        post::insert(['title'=>'Laravel Dersleri','user'=>'123','see'=>0,'description'=>'Bu bir aciklama','slug'=>'ananim']);
           
    }

    public function  getUsers(){

        $users = DB::table("fake_info")->where('id',9)->first();
        $users = DB::table("fake_info")->find(8);
        $users=DB::table("fake_info")->where([["fake_gender",'=',0],["fake_age",'>',50]])->get();
        $users = DB::table('fake_info')->where("fake_gender",'=',0)->where("fake_age",'>',60)->get();

        foreach ($users as $user){

            echo $user->fake_ad."<br/>";
        }

        
        
        
        
         
    }   
    
    //
}

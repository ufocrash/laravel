<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataDisplay extends Controller
{
    public function ddata(){
        $companys = DB::table('companys')->get();
        dd($companys->all());
        
    }

    
}

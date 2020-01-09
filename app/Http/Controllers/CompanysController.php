<?php

namespace App\Http\Controllers;

use App\Companys;
use Illuminate\Http\Request;


class CompanysController extends Controller
{
    public function companys(){
        return view('contact');
    }

    public function message(Request $request){

            $this->validate($request, [
                'company'=>'required',
                'employee'=>'required',
                'workfield'=>'required'
                ]);


            $companys = new Companys;
            $companys->company = request('company');
            $companys->employee = request('employee');
            $companys->work_field = request('workfield');

            $companys->save();

    }

    
}

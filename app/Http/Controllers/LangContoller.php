<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LangContoller extends Controller
{
    public function index(ProductsFilterRequest $request){

    }

    public function changeLocale($locale){
        $currentLocale = App::getProfile();
        dd($currentLocale);
    }
}

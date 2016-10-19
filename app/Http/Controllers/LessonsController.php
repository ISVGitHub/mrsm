<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LessonsController extends Controller
{
    public function index()
    {
        $locale = App::getLocale();
        if ($locale == 'en'){
            return view('lessons.less.less_en')->with([
                'title' => 'LESS',
                'locale' => 'en'
            ]);
        }else{
            return view('lessons.less.less_ru')->with([
                'title' => 'LESS',
                'locale' => 'ru'
            ]);
        }
    }
}

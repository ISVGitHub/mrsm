<?php

namespace App\Http\Controllers;

use App;
use Debugbar;
use Illuminate\Support\Facades\Lang;
use LaravelLocalization;
use Html;
use Route;


class MainController extends Controller
{

    function __construct() {
        //
    }

    public function index()
    {
        echo Route::current()->getParameter('title');
        return view('main.index')->with([
            'title' => 'This is my resume.'
        ]);
    }

    public function mydebug()
    {
        // Set locale russian
        //App::setLocale('ru');

        if (Lang::has('main_index_file.title')) {
        }
        echo App::environment();

        $arr = array('we'=>'ds', 'you'=>'id');
        LaravelLocalization::setLocale('en');
        $curren_locale = LaravelLocalization::getCurrentLocale();

        Debugbar::addMessage('просто переменная', $curren_locale);
        Debugbar::debug($arr);
        Html::link('http://test.com');
        Debugbar::addMessage('просто переменная', '11111');
        Html::link('http://test.com');
    }






}

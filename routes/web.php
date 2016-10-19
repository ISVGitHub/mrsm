<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect' ]
    ],
    function()
    {
        /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
        Route::get('/', function()
        {
            return View::make('welcome');
        });

        Route::get('my_test_page', function (){
            return View::make('main.my_test_page',
            [
                'title' => 'My test page'
            ]);
        });

        // My General Page
        Route::get('main','MainController@index');

        /** My Articles: **/
        // How to install Ruby on Rails on Centos 7
        Route::get('install_ruby_centos7',function () {
            if (LaravelLocalization::getCurrentLocale() == 'en') {
                return View::make(
                    'articles.ruby_on_rails_en',
                    [
                        'title' => 'How to install Ruby on Rails on Centos 7'
                    ]
                );
            } else {
                return View::make(
                    'articles.ruby_on_rails_ru',
                    [
                        'title' => 'Установка RUBY on RAILS при помощи RBENV в Centos 7'
                    ]
                );
            }
        }
        );

        // Getting Information About Databases and Tables from MySQL over MariaDB
        Route::get('article_my_experiance_dbmysql',function () {
            if (LaravelLocalization::getCurrentLocale() == 'en') {
                return View::make(
                    'articles.getting_information_about_dbmysql_en',
                    [
                        'title' => 'Getting Information About Databases and Tables from MySQL over MariaDB'
                    ]
                );
            } else {
                return View::make(
                    'articles.getting_information_about_dbmysql_ru',
                    [
                        'title' => 'Получение информации о базах данных и таблицах от MySQL по MariaDB в f23'
                    ]
                );
            }
        }
        );

        // Perform SSH Login Without Password
        Route::get('article_use_keys_in_ssh',function () {
            if (LaravelLocalization::getCurrentLocale() == 'en') {
                return View::make(
                    'articles.perform_ssh_without_password_en',
                    [
                        'title' => 'Perform SSH Login without password using authentication keys'
                    ]
                );
            } else {
                return View::make(
                    'articles.perform_ssh_without_password_ru',
                    [
                        'title' => 'Подключения по SSH без ввода пароля используя ключи аутентификации'
                    ]
                );
            }
        }
        );

        // Adjustment of the firewall on MikroTik router
        /**
         * Description: It is uninvolved. 13.10.16
         */
        Route::get('adjustment_firewall_on_mikrotik', function () {
            if (LaravelLocalization::getCurrentLocale() == 'en') {
                return View::make(
                    'articles.mikrotik_en',
                    [
                        'title' => 'Adjustment of the firewall on MikroTik router'
                    ]
                );
            } else {
                return View::make(
                    'articles.mikrotik_ru',
                    [
                        'title' => 'Настройка сетевого экрана на роутере MikroTik'
                    ]
                );
            }
        }
        );


    });

/** OTHER PAGES THAT SHOULD NOT BE LOCALIZED **/
//Route::get('main', 'MainController@mydebug')->name('mydebug');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Lessons
Route::get('lessons','LessonsController@index');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Testing CkEditor samples
Route::get('my_test_ckeditor', function()
{
    return View::make('/resources/assets/js/ckeditor/samples/index.html');
});




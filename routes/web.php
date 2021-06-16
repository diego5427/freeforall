<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contactos', function () {
    return view('contact');
});

Route::get('/detalles', function () {
    return view('details');
});
// rutas del footer

Route::get('/blog', function () {
    $posts = app\post::all();
    return view('blog', compact('posts'));
})-> name('blog');



route::view('blog', 'postController@index')->name('blog');   

Route::get('/nosotros', function () {
    return ('todo sobre nosotros');
});

Route::get('/adopcion', function () {
    return ('Esta es la pagina de adopcion');
});

Route::get('/legal', function () {
    return ('Pagina de terminos legales');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

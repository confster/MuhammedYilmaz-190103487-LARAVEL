<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Clients;
use App\Http\Controllers\ClientController;

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
    return view('main');
})->name('main');

Route::get('/{lang}', function($lang){
    App::setlocale($lang);
    return view('main'); 
});

Route::get('locale/{locale}', 'LangController@changeLocale')->name('locale');

Route::get('/aboutme', function () {
    return view('aboutme');
})->name('aboutme');

Route::get('/contactme', function () {
    return view('contactme');
})->name('contactme');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('client/add', function() {
    DB::table('clients')->insert([
        'name' => 'Muhammed',
        'surname' => 'Yilmaz',
        'age' => 19
    ]);
});

Route::get('client', [ClientController::class, 'index']);

Route::get('create', function(){
    return view('create');
});

Route::post('create', [ClientController::class, 'store'])->name('add-client');

Route::get('clients', [ClientController::class, 'index']);

Route::get('clients/create', function(){
    return view('client.create');
});

Route::post('client/create', [ClientController::class, 'store'])->name('add-client');

Route::get('client/{id}', [ClientController::class, 'get_client']);
<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/todos','TodoController@index');

Route::get('/todos/index','TodoController@index');

Route::get('/todos/create','TodoController@create');

Route::get('/todos/{id}/edit','TodoController@edit');

Route::post('/todos/create','TodoController@store');



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
   // return env('APP_NAME');
    return View::make('welcome');

});

Route::get('/user','UserController@index');

Route::get('/upload',function(Request $request){
    dd($request()->all());
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

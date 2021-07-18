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

/*Route::get('/', function () {
    return view('home');
});
Route::get('/about', function () {
    return view('about');
});*/
// excuter la méthode home dans le controller HomeController
Route::get('/home','HomeController@home')->name('home');;
Route::get('/about','HomeController@about')->name('about');


// donnée les droit d'accées sur tous les route sauf des route spécifique
Route::resource('/posts', 'PostController')
    ->except(['destroy']);
// donnée les drot d'accée avec des route spécifique
/*Route::resource('/posts','PostController')
    ->only(['index', 'show', 'create', 'store', 'edit', 'update']);*/
// tous les route de controllers
//Route::resource('/posts','PostController');

/*
 * nomalment supprimer
 * si vous défini un valeur par défaut il faut définit un valeur par défaut
 * */
//Route::get('/posts/{id}/{author?}','HomeController@blog')->name('blog-posts');

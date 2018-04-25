<?php

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
	Session::flash('success', 99);
    return redirect('/home');
});
// Route::get('/home', function () {
//     return view('home.welcome');
// });
//$_COOKIE['success'] = (0) -> Login Fail,	(-1) -> Register Fail,	(1) -> Register Success
Route::get('/home', ['as' => 'user.home', 'uses' => 'LoginController@home' ]);

Route::post('/register', ['as' => 'user.register', 'uses' => 'LoginController@register' ]);

Route::post('/login', ['as' => 'user.login', 'uses' => 'LoginController@log_in' ]);
Route::post('/room', ['as' => 'user.join', 'uses' => 'LoginController@join']);

Route::post('/cekjawab', ['as' => 'user.submit', 'uses' => 'LoginController@submit']);
?>

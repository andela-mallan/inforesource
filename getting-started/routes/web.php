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

Route::get('/', 'PostController@getIndex')->name('blog.index');

Route::get('/about', function () {
  return view('other.about');
})->name('other.about');

Route::get('post/{id}', ['uses' => 'PostController@getPost',
                         'as' => 'blog.post']);

Route::group(['prefix' => 'admin'], function (){
  Route::get('', ['uses' => 'PostController@getAdminIndex',
                  'as' => 'admin.index']);

  Route::get('/edit/{id}', ['uses' => 'PostController@getAdminEdit',
                            'as' => 'admin.edit']);

  Route::post('/edit/{id}', ['uses' => 'PostController@postAdminEdit',
                             'as' => 'admin.update']);

  Route::get('/create', ['uses' => 'PostController@getAdminCreate',
                         'as' => 'admin.create']);

  Route::post('/create', ['uses' => 'PostController@postAdminCreate',
                          'as' => 'admin.create']);
});

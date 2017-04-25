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
    return view('blog.index');
})->name('blog.index');

Route::get('/about', function () {
  return view('other.about');
})->name('other.about');

Route::get('post/{id}', function () {
  return view('blog.post');
})->name('blog.post');

Route::group(['prefix' => 'admin'], function (){
  Route::get('', function () {
    return view('admin.index');
  })->name('admin.index');

  Route::get('/edit/{id}', function () {
    return view('admin.edit');
  })->name('admin.edit');

  Route::post('/edit/{id}', function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {
    $validation = $validator->make($request->all(), ['title' => 'required|Min:5',
                                                     'content' => 'required|Min:10']);
    if($validation->fails()){
      return redirect()->back()->withErrors($validation);
    }

    return redirect()->route('admin.index')->with('info', 'Post edited, New Title: ' . $request->input('title'));
  })->name('admin.update');

  Route::get('/create', function () {
    return view('admin.create');
  })->name('admin.create');

  Route::post('/create', function (\Illuminate\Http\Request $request, \Illuminate\Validation\Factory $validator) {
    $validation = $validator->make($request->all(), ['title' => 'required|Min:5',
                                                     'content' => 'required|Min:10']);
    if($validation->fails()){
      return redirect()->back()->withErrors($validation);
    }
    
    return redirect()->route('admin.index')->with('info', 'Post created, Title: ' . $request->input('title'));
  })->name('admin.create');
});

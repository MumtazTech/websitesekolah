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

Route::group(['namespace' => 'Auth'], function () {
    Route::get('/login', 'LoginController@showLoginForm')->middleware('guest')->name('login');
    Route::post('/login', 'LoginController@login')->middleware('guest');
    Route::get('/register', 'RegisterController@showRegistrationForm')->middleware('ceklevel:admin')->name('register');
    Route::post('/register', 'RegisterController@register')->middleware('ceklevel:admin');
    Route::post('/logout', 'LoginController@logout')->name('logout')->middleware(['auth', 'ceklevel:admin,user']);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', 'DashboardController@index');
    
    Route::resource('/kelas', 'KelasController')->middleware('ceklevel:admin');
    Route::resource('/siswa', 'SiswaController')->middleware('ceklevel:admin');
    // Route::resource('/pengumuman', 'PengumumanController')->middleware('ceklevel:admin');

    Route::get('/pengumuman', 'PengumumanController@index')->middleware('ceklevel:admin,user');
    Route::get('/pengumuman/create', 'PengumumanController@create')->middleware('ceklevel:admin');
    Route::post('/pengumuman', 'PengumumanController@store')->middleware('ceklevel:admin');
    Route::get('/pengumuman/{pengumuman_id}', 'PengumumanController@show')->middleware('ceklevel:admin,user');
    Route::get('/pengumuman/{pengumuman_id}/edit', 'PengumumanController@edit')->middleware('ceklevel:admin');
    Route::put('/pengumuman/{pengumuman_id}', 'PengumumanController@update')->middleware('ceklevel:admin');
    Route::delete('/pengumuman/{pengumuman_id}', 'PengumumanController@destroy')->middleware('ceklevel:admin');

    Route::get('/meeting', 'MeetingController@index')->middleware('ceklevel:admin,user');
    Route::get('/meeting/create', 'MeetingController@create')->middleware('ceklevel:admin');
    Route::post('/meeting', 'MeetingController@store')->middleware('ceklevel:admin');
    Route::get('/meeting/{meeting_id}', 'MeetingController@show')->middleware('ceklevel:admin,user');
    Route::get('/meeting/{meeting_id}/edit', 'MeetingController@edit')->middleware('ceklevel:admin');
    Route::put('/meeting/{meeting_id}', 'MeetingController@update')->middleware('ceklevel:admin');
    Route::delete('/meeting/{meeting_id}', 'MeetingController@destroy')->middleware('ceklevel:admin');

    Route::get('/modul', 'ModulController@index')->middleware('ceklevel:admin,user');
    Route::get('/modul/create', 'ModulController@create')->middleware('ceklevel:admin');
    Route::post('/modul', 'ModulController@store')->middleware('ceklevel:admin');
    Route::get('/modul/{modul_id}/edit', 'ModulController@edit')->middleware('ceklevel:admin');
    Route::put('/modul/{modul_id}', 'ModulController@update')->middleware('ceklevel:admin');
    Route::delete('/modul/{modul_id}', 'ModulController@destroy')->middleware('ceklevel:admin');

    Route::get('/tugas', 'TugasController@index')->middleware('ceklevel:admin,user');
    Route::get('/tugas/create', 'TugasController@create')->middleware('ceklevel:admin');
    Route::get('/tugas/{tugas_id}/upload_tugas', 'TugasController@uploadtugas')->middleware('ceklevel:admin');
    Route::post('/tugas', 'TugasController@store')->middleware('ceklevel:admin');
    Route::get('/tugas/{tugas_id}/edit', 'TugasController@edit')->middleware('ceklevel:admin');
    Route::put('/tugas/{tugas_id}', 'TugasController@update')->middleware('ceklevel:admin');
    Route::delete('/tugas/{tugas_id}', 'TugasController@destroy')->middleware('ceklevel:admin');
    
    Route::get('/modul/materi/{modul}', 'MateriController@index')->middleware('ceklevel:admin,user');
    Route::get('/modul/materi/create/{modul}', 'MateriController@create')->middleware('ceklevel:admin');
    Route::post('/modul/materi/{modul}', 'MateriController@store')->middleware('ceklevel:admin');
    Route::delete('/modul/materi/{modul}/{materi}', 'MateriController@destroy')->middleware('ceklevel:admin');
    // Route::get('/modul/materi/{modul_id}', 'MateriController@show')->middleware('ceklevel:admin,user');
});

// Route::get('/home', 'HomeController@index')->name('home');

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
    return view('welcome');
});

Route::get('/form', function () {
    return view('form');
});


//Route::get('sendbasicemail','MailController@basic_email');
//Route::get('sendhtmlemail','MailController@html_email');
//Route::get('sendattachmentemail','MailController@attachment_email');

Route::post('/sendData', array('uses' => 'MailController@basic_email'));
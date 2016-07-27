<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/joinrequest', 'JoinRequestController');
Route::get('/dropdown', 'JoinRequestController@categoryDropDownData');
//Route::Auth();
Route::get('/register/verify/{confirmationCode}', [
    'as' => 'confirmation_path',
    'uses' => 'JoinRequestController@confirm'
]);
Route::resource('/register', 'RegistrationController');
// For group chat starts here
// Route::get('/groupchat/{id}','GroupChatController@index');
//
// Route::post('/groupchatsend','GroupChatController@write');
//
// Route::get('/groupchatreceive/{id}','GroupChatController@receive');

//group chat ends here

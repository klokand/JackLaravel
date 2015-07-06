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


//Route::get('/', 'WelcomeController@index');

Route::get('/','MasterController@indexPage');
Route::get('home', 'HomeController@index');
Route::post('email','EmailController@sendEmail');
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::group(['middleware' => 'auth'], function () {
	Route::post('checkOldEmailP','ContentController@checkOldEmailP');
	Route::post('updatePassword','ContentController@updatePassword');
    Route::post('updateCompanyName','ContentController@updateCompanyName');
	Route::post('updateWhatWeDo','ContentController@updateWhatWeDo');
	Route::post('updateAboutUs','ContentController@updateAboutUs');
	Route::post('updateStrengths','ContentController@updateStrengths');
	Route::post('updateServices','ContentController@updateServices');
    Route::post('updateContact','ContentController@updateContact');
});
Route::any('{path?}','MasterController@indexPage');



<?php

use App\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::group(['namespace'=>'Api\Auth'], function(){
    Route::post('/login', 'AuthenticationController@login');
    Route::post('/register', 'RegisterController@register');
    Route::get('/users', 'UserController@allusers');
    Route::get('/user', 'UserController@user')->middleware('auth:api');
    Route::post('/addadmin', 'RegisterController@newadmin');
    Route::get('/user/{user}', 'UserController@usershow');
    Route::post('/delete/{user}', 'UserController@deleteuser');
    Route::post('/update/{user}', 'UserController@updateuser');
    Route::post('/forgot', 'ForgotPasswordController@forgot');
    Route::post('/reset', 'ForgotPasswordController@reset');
    Route::get('/admins', 'UserController@admin');
});

// Route::group(['namespace'=>'Api\Admin'], function(){
//     Route::post('/register-admin', 'AdminController@register');
//     Route::post('/login-admin', 'AdminController@login');
// });


Route::apiResource('jobs', 'JobController');

Route::apiResource('students', 'StudentController');
Route::apiResource('products', 'ProductController');


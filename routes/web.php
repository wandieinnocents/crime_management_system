<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('welcome');
   });
});



// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['web'],
    'namespace'  => 'Admin',
], function () {

  
    // CRUD resources and other admin routes
    //CRUD::resource('monster', 'MonsterCrudController');
     CRUD::resource('rule','RuleCrudController');
     CRUD::resource('employee','EmployeeCrudController');
     CRUD::resource('prisoner','PrisonerCrudController');
      CRUD::resource('crime','CrimeCrudController');
      CRUD::resource('policestation','PolicestationCrudController');
      CRUD::resource('reportcrime','ReportcrimeCrudController');
      CRUD::resource('prison','PrisonCrudController');
      CRUD::resource('claim','ClaimCrudController');
});

Route::get('api/article', 'Api\ArticleController@index');
Route::get('api/article/{id}', 'Api\ArticleController@show');




Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
//custom login here
Route::post('/login/custom',[

  'uses' => 'LoginController@login',
  'as'   => 'login.custom'

  ]);

Route::group(['middleware' => 'auth'],function()
{

  Route::get('/home', 'HomeController@index')->name('home');

Route::get('/superadmin','HomeController@superadmin')->name('superadmin');



});



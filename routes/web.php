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

Route::get('/checklist', function () {
return view('checklist');
})->name('checklist');

//insert Checklist
Route::post('/insert', 'Controller@insert');
Route::post('/insert_passport', 'Controller@insert_passport');
Route::post('/insert_financing', 'Controller@insert_financing');
Route::post('/insert_insurance', 'Controller@insert_insurance');
Route::post('/insert_pass', 'Controller@insert_pass');
Route::post('/insert_visaform', 'Controller@insert_visaform');
Route::post('/insert_picture', 'Controller@insert_picture');
Route::post('/insert_travelreservation', 'Controller@insert_travelreservation');
Route::post('/insert_hotelreservation', 'Controller@insert_hotelreservation');
Route::post('/insert_employment', 'Controller@insert_employment');
Route::post('/insert_travelinsurance', 'Controller@insert_travelinsurance');
Route::post('/insert_financial_means', 'Controller@insert_financial_means');
Route::post('/insert_consularfee', 'Controller@insert_consularfee');
Route::post('/insert_passcopy', 'Controller@insert_passcopy');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

Route::get('/admin', function()
{
$students = App\Students::all();
return view('admin',compact('students')); 
})->name('admin.dashboard');

Route::resource('detail', 'AdminController');


Route::get('/myaccount', function () {
  return view('myaccount');
  })->name('myaccount');
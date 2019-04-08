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

Route::get('/', 'FrontendController@home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add/company', 'CompanyController@showAddCompanyForm');
Route::post('/add/company', 'CompanyController@saveCompanyInfo');
Route::get('/mange/company', 'CompanyController@manageCompany');
Route::get('/edit/company/{id}', 'CompanyController@editCompany');
Route::post('/update/company', 'CompanyController@updateCompanyById');
Route::get('/publish/company/{id}', 'CompanyController@publishCompanyById');
Route::get('/unPublish/company/{id}', 'CompanyController@unPublishCompanyById');

Route::get('/add/product', 'ProductController@showProductAddForm');
Route::post('/add/product', 'ProductController@saveProductInfo');


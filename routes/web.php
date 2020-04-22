<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'pagescontroller@index')->name('index');
Route::get('/contact', 'pagescontroller@contact')->name('contact');

Route::get('/products', 'pagescontroller@products')->name('products');
Route::get('/products/{slug}', 'pagescontroller@slug')->name('slug');
Route::get('/search', 'pagescontroller@search')->name('search');



Route::get('/admin', 'adminpagescontroller@index')->name('admin.index');
Route::get('/admin/product/create', 'adminpagescontroller@product_create')->name('admin.product.create');
Route::get('/admin/product/manage', 'adminpagescontroller@product_manage')->name('admin.product.manage');
Route::get('/admin/product/edit/{id}', 'adminpagescontroller@product_edit')->name('admin.product.edit');
Route::get('/admin/product/distroy/{id}', 'adminpagescontroller@product_distroy')->name('admin.product.distroy');


Route::get('/admin/category/create', 'CategoryController@category_create')->name('admin.category.create');
Route::get('/admin/category/manage', 'CategoryController@category_manage')->name('admin.category.manage');


Route::post('/admin/product/store', 'adminpagescontroller@product_store')->name('admin.product.store');
Route::post('/admin/product/update/{id}', 'adminpagescontroller@product_update')->name('admin.product.update');
Route::post('/admin/category/store', 'CategoryController@category_store')->name('admin.category.store');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

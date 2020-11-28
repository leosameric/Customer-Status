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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'CustomerController@getCustomerStatus');

// $table->integer('OrderId')->primary();
//             $table->unsignedBigInteger('CustomerId')->references('CustomerId')->on('Customer');
//             $table->string('OrderStatus');
//             $table->string('OrderTotal');
//             $table->timestamp('CreatedDateTime');
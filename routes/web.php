<?php

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Route;
//use Illuminate\Support\Facades\Schema;

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


// trang cắt layout
// Route::get('/', function () {return view('master');}) -> name('index');
// Route::get('/', function () {return view('page.trangchu');}) -> name('home');

// Route::get('loai-san-pham',[				
// 	'as'=>'loaisanpham',			
// 	'uses'=>'PageController@getLoaiSp'			
// 	]);			

//   Route::get('chi-tiet-san-pham',[				
//     'as'=>'chitietsanpham',			
//     'uses'=>'PageController@geChitiet'			
//     ]);	
    
//     Route::get('/database', function () {
//       Schema::create('loaianpham', function ($table) {
//           $table->increments('id');
//           $table->string('ten', 2000);
//       });
  
//       echo "Đã thực hiện tạo bảng thành công!";
//   });
  

Route::get('/signup',"signupController@index");
Route::post('/signup',"signupController@displayInfor");


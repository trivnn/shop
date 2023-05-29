<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Auth\AuthController;
use App\Http\Controllers\Admin\Product\ProductController;
use App\Http\Controllers\TestController;
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
// Router Admin
Route::get("/login",[AuthController::class,'getlogin']);
Route::post("/login",[AuthController::class,'postlogin']);

Router::group(["prefix"=>"/admin"],function(){
    Route::get("/logout",function(){
        return "logout";
    })

    Route::get("/",[AdminController::class,'index']);
    Route::group(["prefix"=>"/product"],function(){

    Route::get("/",[ProductController::class,'index']);
    Route::get("/create",[ProductController::class,'create']);
    Route::get("/store",[ProductController::class,'store']);
    Route::get("/edit",[ProductController::class,'edit']);
    Route::get("/update",[ProductController::class,'update']);
    Route::get("/deltete",function(){
        return "delete product";
    });



})


// Route::get("/form", function(){
//     return '<form  method="post">
//         <input type="text">
//         <button type="submit">Send</button>
//         '.csrf_field().'
//     </form>';
// });

// Route::post("/form", function(){
//     return 'form succsess';
// });

// Route::group(['prefix'=>'/admin'],function(){
//     Route::get('/', function () {
//     return 'admin';
//     });
//     Route::get('/product', function () {
//     return 'product';
//     });
//      Route::get('/user', function () {
//     return 'user';
//     });

// });


// Route::group(['prefix'=>'/login'],function(){
//     Route::get('/', function(){
//          return 'login';
//      });
//     Route::post('/', function(){
//          return 'login';
//      });

// });


// Route::group(['prefix'=>'/admin'], function(){
//     Route::get("/", function(){
//      return 'admin';
//      });
//     Route::get('logout', function(){
//          return 'logout';
//      });

//     Route::group(['prefix'=>'/product'],function(){

//     })
//     Route::get('/', function(){
//          return 'index';
//      });
//     Route::get('/create', function(){
//          return 'create';
//      });
//     Route::post('/store', function(){
//          return 'store';
//      });
//     Route::get('/edit', function(){
//          return 'edit';
//      });
//     Route::post("/update", function(){
//          return 'update';
//      });

//     Route::get('/delete', function(){
//          return 'delete';
//      });
// });







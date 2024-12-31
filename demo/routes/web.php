<?php

use Illuminate\Support\Facades\Route;

use app\Http\controllers\userscontroller;
use app\Http\controllers\productcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
route::get('/',function(){
    return view('index');
});

// Route::get('/logout', function(){
//     // if(session()->has('email'))
//     // {
//     //     session()->pull('email');
//     // // }
//     // return redirect('index');
// });

// route::get('/logindata',function(){
    
//     if(session()->has('email'))
//     {
//         return redirect('product');
//     }
    
//    return view('/');

// });

Route::get('/home',[App\Http\Controllers\userscontroller::class,'index']);

Route::get('/admin',[App\Http\Controllers\userscontroller::class,'user']);
Route::get('/usershow',[App\Http\Controllers\userscontroller::class,'usershow']);

Route::POST('/sigdata',[App\Http\Controllers\userscontroller::class,'sigdata']);
Route::POST('/logindata',[App\Http\Controllers\userscontroller::class,'logindata']);
Route::get('/admindata',[App\Http\Controllers\productcontroller::class,'admin']);
Route::get('/product',[App\Http\Controllers\productcontroller::class,'index']);//->middleware('userauth');

Route::get('/',[App\Http\Controllers\productcontroller::class,'demo1']);
//->middleware('userauth');

Route::get('/search',[App\Http\Controllers\productcontroller::class,'search']);
Route::get('detail/{id}',[App\Http\Controllers\productcontroller::class,'detail']);

Route::POST('/cart',[App\Http\Controllers\productcontroller::class,'addcart']);
Route::get('/logout',[App\Http\Controllers\userscontroller::class,'logout']);

Route::get('/index',[App\Http\Controllers\productcontroller::class,'salse']);




Route::get('/adminuser',[App\Http\Controllers\userscontroller::class,'adminuser']);
Route::get('/adminproduct',[App\Http\Controllers\productcontroller::class,'adminproduct']);

Route::get('/cartlink',[App\Http\Controllers\productcontroller::class,'cartlink']);
Route::get('/remove/{id}',[App\Http\Controllers\productcontroller::class,'remove']);

Route::get('/userdelete/{id}',[App\Http\Controllers\productcontroller::class,'userdelete']);
Route::get('/admindelete/{id}',[App\Http\Controllers\productcontroller::class,'admindelete']); 
Route::get('/adminupdate/{id}',[App\Http\Controllers\productcontroller::class,'adminupdate']);



Route::get('/admin_user_u/{id}',[App\Http\Controllers\productcontroller::class,'admin_user_u']);




Route::POST('/update',[App\Http\Controllers\productcontroller::class,'update']); 


Route::get('/edit',[App\Http\Controllers\productcontroller::class,'edit']); 

Route::get('/order',[App\Http\Controllers\productcontroller::class,'order']);

Route::POST('/orderplace',[App\Http\Controllers\productcontroller::class,'orderplace']);
Route::get('/myorder',[App\Http\Controllers\productcontroller::class,'myorder']);


Route::get('/adminlogin',[App\Http\Controllers\userscontroller::class,'adminlogin']);

Route::POST('/admin_login',[App\Http\Controllers\adminlogin::class,'admin_login']);


//route::get('/product/{id}',[App\Http\Controllers\productcontroller::class,'id']);

//Route::get('/',[App\Http\Controllers\productcontroller::class,'pro']);
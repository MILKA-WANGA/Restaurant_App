<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Hotel;

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
Route::get("/",[Hotel::class,'index']);
//Route::view("list","list");
// Route::get("list",[Hotel::class,'list']);
// Route::view("/add","add");
// Route::post("add",[Hotel::class,'add']);
// //Route::view("edit","edit");
// Route::get('/edit/{id}',[Hotel::class,'edit']);
// Route::get("/delete/{id}",[Hotel::class,'deleteData']);
// Route::put('/edit',[Hotel::class,'update']);
Route::view("/about","about");
Route::view("/contact","contact");
Route::view("/services","services");
Route::view("/order","order");
Route::get("/register",[Hotel::class,'register']);
Route::post("/register-user",[Hotel::class,'registerUser']);
Route::get("/login",[Hotel::class,'login']);
Route::post("login-user",[Hotel::class,'loginUser']);
Route::view("/password","password");
Route::post("/passwordReset",[Hotel::class,'passwordReset']);
Route::get("/dashboard",[Hotel::class,'dashboard']);
Route::get("/breakfast",[Hotel::class,'breakfast']);
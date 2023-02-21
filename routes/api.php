<?php



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\Addpagecontroller;
use App\Http\Controllers\dropdowncontroller;
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
Route::group(['middleware'=>'api'],function($routes){


// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/create',[Authcontroller::class,'create']);



Route::get('/userdata',[Authcontroller::class,'userdata']);
Route::post('/path',[Authcontroller::class,'path']);
})->middleware('Admin');
Route::get('/search',[Authcontroller::class,'search']);
Route::post('/resetPassword',[Authcontroller::class,'resetPassword']);
Route::patch('/updatepassword/{id}',[Authcontroller::class,'updatepassword']);
Route::post('/register',[Authcontroller::class,'register']);

Route::post('/Addpage',[Addpagecontroller::class,'Addpage']);

Route::get('/fetch',[Addpagecontroller::class,'fetch']);

Route::Delete('delete/{id}',[Addpagecontroller::class,'delete']);

Route::get('edit/{First_name}',[Addpagecontroller::class,'edit']);

Route::patch('update/{id}',[Addpagecontroller::class,'update']);
Route::post('/login',[Authcontroller::class,'Login']);

Route::get('/logout',[Authcontroller::class,'logout']);
Route::post('/auth',[Authcontroller::class,'auth']);
Route::post('/upload',[Addpagecontroller::class,'upload']);

Route::post('/contact',[Addpagecontroller::class,'contact']);

Route::get('/jointable',[Addpagecontroller::class,'jointable']);
Route::get('/imagefatch',[Addpagecontroller::class,'imagefatch']);

Route::get('/paginate',[Addpagecontroller::class,'paginate']);
Route::post('/appointment',[Addpagecontroller::class,'appointment']);
Route::patch('passwordupdate/{id}',[Addpagecontroller::class,'passwordupdate']);

Route::get('/getcity', [dropdowncontroller::class, 'getcity']);
Route::get('/getStates', [dropdowncontroller::class, 'getStates']);
Route::get('/dropdown',[dropdowncontroller::class,'dropdown']);
Route::get('/searchjoin',[dropdowncontroller::class,'searchjoin']);



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserauthController;


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

//just view
Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/aboutlink', function () {
    return view('aboutlink');
});
/*Route::view('/about','about');*/
/*Route::get('/{name}', function ($name) {
    echo $name;
    return view('welcome');
});*/

/*Route::get("users",[UserController::class,'index']);*/
/*Route::get('users/{name}',[UserController::class,'index1']);
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get("users",[UserController::class,'fun']);
Route::get('/login',function(){
    return view('login');
});
Route::get("users",[UserController::class,'login']);*/

//member route
//insert data
Route::view('add','member');
Route::get("insert",[MemberController::class,'memberAdd']);

//list view table
Route::get('view',[MemberController::class,'datalist']);
//delete
Route::get('delete/{id}',[MemberController::class,'delete']);
//update
Route::get('update/{id}',[MemberController::class,'update']);
Route::post('/edit',[MemberController::class,'edit_view']);

//product insert
//Route::view('add','product');
//Route::get("insert",[ProductController::class,'productAdd']);
//list product table
Route::get('tableview',[ProductController::class,'datalist']);
//delete product table
//Route::get('delete/{id}',[ProductController::class,'delete']);
//update product
//Route::get('update/{id}',[ProductController::class,'update']);
//Route::post('/edit',[ProductController::class,'edit_view']);
//login view
Route::view('log','loginform');
//profile
Route::view('pro','profile');
Route::get('/form',[ProductController::class,'profilepage']);
//sessionprofile
Route::get('/session',[ProductController::class,'profilesession']);
//reg
Route::view('reg','formreg');
//Route::get("insert",[ProductController::class,'memberAdd']);

Route::view('page','loginpage');
Route::get('/session',[ProductController::class,'registersession']);

//register validation route

Route::get('/regg',function(){
    return view('formreg');
});
//login
Route::get('/login',function(){
    return view('loginpage');
});


Route::get('/register',[UserauthController::class,'login_vali']);
//dashboard
Route::get('dashboard',[UserauthController::class,'dash']);
//login check
Route::get('logged',[UserauthController::class,'check']);
//logout
Route::get('logout',[UserauthController::class,'logout']);
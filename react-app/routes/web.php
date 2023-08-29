<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\testController;
use App\Http\Controllers\InputNameController;
use App\Http\Controllers\ageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YearVerificationController;
use App\Http\Controllers\loginVerification;
use App\Http\Controllers\EmployeeController;

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
})->name('welcome');

Route::get('/gallery', function () {
    return view('gallery');
});



Route::get('test', [testController::class, 'Test']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test-user', [App\Http\Controllers\HomeController::class, 'index'])->middleware(['auth', 'is-active']);

Route::resource('companies', CompanyController::class);


Route::post('age', [ageController::class, 'showAge']);
Route::get('age', [ageController::class, 'showAge']);

Auth::routes();

Route::get('/login2', function (){
    return view('login2');
})->name('login2');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/trylogin', [App\Http\Controllers\YearVerificationController::class, 'yearCheck'])->middleware('check-year');

Route::get('/dashboard', function () {
    return view('gallery');
})->middleware('auth.login');


Route::get('login2', [App\Http\Controllers\loginVerification::class, 'loginmiddleware'])->name('login2');
Route::post('dashboard', [App\Http\Controllers\loginVerification::class, 'login2'])->middleware('loginf');


Route::middleware([Login::class])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    });
});

Route::resource('/employees', EmployeeController::class);


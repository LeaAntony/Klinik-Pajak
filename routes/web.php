<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardZController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\ListItemController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
Use App\Http\Controllers\HomeController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/user/{id}', function ($id) {
    return 'User dengan id ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});

// route::get('/listbarang/{id}/{nama}', function($id, $nama) {
//     return view('list_barang', compact ('id', 'nama'));
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/list_item', [ListItemController::class, 'index']);
Route::get('/dashboardz', [DashboardZController::class, 'index']);
=======
use App\Http\Controllers\HomeController;

// Route::get('/'. function () {
//      return view('welcome');
//  });  You, 1 Second ago. Uncomitted changes


Route::get('/', [HomeController::class, 'index'] );
Route::get('/contact',[HomeController::class, 'contact']);
   
>>>>>>> ee6d7a546df556303d86e4f1303efeeb84da0eb1

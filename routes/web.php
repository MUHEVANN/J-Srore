<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AdminLogin;
use App\Http\Controllers\ClothController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\cloth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    
    $data = cloth::get()->all();
    return view('welcome', ['data' => $data]);
});

Route::get('coba', function(){
    return view('coba');
});
// Route::get('/dashboard', function () {
//     $data = cloth::get()->all();
//     return view('home.index',[]);
// })->middleware(['auth', 'verified','role:admin'])->name('dashboard');
Route::middleware(['auth', 'role:admin'])->group(function (){
    Route::resource('home',ClothController::class);
    Route::get('all-product', function(){
        $data = cloth::get()->all();
        // $category= Category::all();
        return view('home.all',['data'=>$data]);
    });

});
Route::resource('admin', AdminLogin::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
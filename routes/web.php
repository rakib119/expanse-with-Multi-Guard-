<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        // return OrderDetail:: where('product_id',1)->count();
     $orders = OrderDetail:: join('products','products.id','order_details.product_id')
                ->select('products.name',DB::raw('count(order_details.product_id) as total'))->groupBy('products.name');
              $product_name =  $orders->pluck('products.name')->toArray();
                // implode(' ', $product_name);
              $total_sell =  $orders->pluck('total')->toArray();
        return view('welcome',compact('product_name','total_sell'));
    });
});

Auth::routes(['register' => false]);


Route::get('/admin', [LoginController::class, 'showAdminLoginForm'])->name('admin.login-view');
Route::post('/admin', [LoginController::class, 'adminLogin'])->name('admin.login');

Route::get('/admin/register', [RegisterController::class, 'showAdminRegisterForm'])->name('admin.register-view');
Route::post('/admin/register', [RegisterController::class, 'createAdmin'])->name('admin.register');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', function () {
    return view('admin');
})->middleware('auth:admin');

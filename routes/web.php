<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\product\ArrivalsController;



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


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect', [HomeController::class, 'redirect'])->name('redirect');


route::get('/', [HomeController::class, 'index']);

route::get('/product', [AdminController::class, 'product']);

route::post('/uploadproduct', [AdminController::class, 'uploadproduct']);


route::get('/showproduct', [AdminController::class, 'showproduct']);

route::get('/deleteproduct/{id}', [AdminController::class, 'deleteproduct']);

route::get('/updateview/{id}', [AdminController::class, 'updateview']);

route::post('/updateproduct/{id}', [AdminController::class, 'updateproduct']);

route::get('/search', [HomeController::class, 'search']);

route::post('/addtocart/{id}', [HomeController::class, 'addtocart']);
route::post('/add-curated-book', [HomeController::class, 'addCuratedBook'])->name('catalog.add');

route::get('/showcart', [HomeController::class, 'showcart']);


route::get('/delete/{id}', [HomeController::class, 'deletecart']);

route::post('/order', [HomeController::class, 'confirmorder']);

route::get('/showorder', [AdminController::class, 'showorder']);

route::get('/updatestatus/{id}', [AdminController::class, 'updatestatus']);

route::get('/about', [HomeController::class, 'about'])->name('about');



Route::get('/p1', [ArrivalsController::class, 'p1'])->name('p1');

Route::get('/p2', [ArrivalsController::class, 'p2'])->name('p2');

Route::get('/p3', [ArrivalsController::class, 'p3'])->name('p3');

Route::get('/p4', [ArrivalsController::class, 'p4'])->name('p4');

Route::get('/p5', [ArrivalsController::class, 'p5'])->name('p5');






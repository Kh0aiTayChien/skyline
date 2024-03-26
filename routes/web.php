<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomePage\IndexController;
use App\Http\Controllers\HomePage\ProductController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ImageProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('homepage.index');
Route::get('/tai-lieu', [IndexController::class, 'document'])->name('homepage.document');
Route::get('/san-pham/{slug}', [ProductController::class, 'show'])->name('homepage.product.show');
Auth::routes();
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('images', 'ImageController');
    Route::resource('products', 'ProductController');
    Route::resource('articles', 'ArticleController')->except(['index']);
    Route::get('index/{conditionView}', [ArticleController::class, 'index'])->name('articles.index');
    Route::delete('articles/forceDel/{article} ', [ArticleController::class, 'forceDestroy'])->name('articles.forceDestroy');
    Route::post('articles/trash/{article} ', [ArticleController::class, 'restore'])->name('articles.restore');
    Route::post('/order-number', [ArticleController::class, 'OrderNumber'])->name('admin.updateOrderNumber');
    Route::get('/media', [MediaController::class, 'index'])->name('admin.media.index');
    Route::post('/upload', [MediaController::class, 'upload'])->name('admin.media.upload');
    Route::post('/uploadMediaProduct', [ImageProductController::class, 'store'])->name('admin.mediaProduct.upload');
    Route::get('/fixMediaProduct', [ImageProductController::class, 'fix'])->name('admin.mediaProduct.fix');
    Route::post('/updateMediaProduct', [ImageProductController::class, 'update'])->name('admin.mediaProduct.update');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/trash', [ArticleController::class, 'trashBin'])->name('admin.trashBin');
    Route::get('/about', function () {
        return view('admin/about');
    })->name('about');
});




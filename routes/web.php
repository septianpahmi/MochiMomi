<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController as ControllersBlogController;
use App\Http\Controllers\Dahshboard\DashboardController;
use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\DashboardController as DashboardDashboardController;
use App\Http\Controllers\Dashboard\FeedbackController;
use App\Http\Controllers\Dashboard\KategoriController;
use App\Http\Controllers\Dashboard\KontakController;
use App\Http\Controllers\Dashboard\ProdukController;
use App\Http\Controllers\Dashboard\SejarahController;
use App\Http\Controllers\Dashboard\TestimoniController;
use App\Http\Controllers\Dashboard\TransactionController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\VisiController;
use App\Http\Controllers\Dashboard\WhyusController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KontakController as ControllersKontakController;
use App\Http\Controllers\ProdukController as ControllersProdukController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestimoniController as ControllersTestimoniController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
//testimoni
Route::get('/home/testimoni', [ControllersTestimoniController::class, 'index'])->name('testimoni.user');
//kontak
Route::get('/home/contact', [ControllersKontakController::class, 'index'])->name('contact.user');
Route::post('/home/contact/send-feedback', [ControllersKontakController::class, 'send'])->name('contact.send');
//blog
Route::get('/home/blog', [ControllersBlogController::class, 'index'])->name('blog.user');
//about
Route::get('/home/about-us', [AboutController::class, 'index'])->name('about.user');
//produk
Route::get('/home/produk-list', [ControllersProdukController::class, 'index'])->name('produk-list');
Route::get('/home/produk-list/ajx', [ControllersProdukController::class, 'ajax'])->name('produk.ajax');
Route::middleware('auth')->group(function () {
    Route::get('/home/produk-detail/{slug}', [ControllersProdukController::class, 'detail'])->name('produk.detail');
    Route::post('/home/produk-detail/checkout', [ControllersProdukController::class, 'checkout'])->name('produk.checkout');
});

Route::middleware('auth', 'role:admin')->group(function () {
    Route::get('/dashboard', [DashboardDashboardController::class, 'index'])->name('dashboard');

    Route::get('/dashboard/kategori', [KategoriController::class, 'index'])->name('kategori');
    Route::get('/kategori/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');
    Route::post('/kategori/create', [KategoriController::class, 'create'])->name('kategori.create');
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update'])->name('kategori.update');

    Route::get('/dashboard/produk', [ProdukController::class, 'index'])->name('produk');
    Route::get('/dashboard/produk/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
    Route::post('/dashboard/produk/create', [ProdukController::class, 'create'])->name('produk.create');
    Route::post('/dashboard/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');

    Route::get('/dashboard/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/dashboard/blog/{id}', [BlogController::class, 'delete'])->name('blog.delete');
    Route::post('/dashboard/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/dashboard/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');

    Route::get('/dashboard/user', [UserController::class, 'index'])->name('user');
    Route::get('/dashboard/user/{id}', [UserController::class, 'delete'])->name('user.delete');
    Route::post('/dashboard/user/create', [UserController::class, 'create'])->name('user.create');
    Route::post('/dashboard/user/update/{id}', [UserController::class, 'update'])->name('user.update');

    Route::get('/dashboard/sejarah', [SejarahController::class, 'index'])->name('sejarah');
    Route::get('/dashboard/sejarah/{id}', [SejarahController::class, 'delete'])->name('sejarah.delete');
    Route::post('/dashboard/sejarah/create', [SejarahController::class, 'create'])->name('sejarah.create');
    Route::post('/dashboard/sejarah/update/{id}', [SejarahController::class, 'update'])->name('sejarah.update');

    Route::get('/dashboard/visi-misi', [VisiController::class, 'index'])->name('visi-misi');
    Route::get('/dashboard/visi-misi/{id}', [VisiController::class, 'delete'])->name('visi-misi.delete');
    Route::post('/dashboard/visi-misi/create', [VisiController::class, 'create'])->name('visi-misi.create');
    Route::post('/dashboard/visi-misi/update/{id}', [VisiController::class, 'update'])->name('visi-misi.update');

    Route::get('/dashboard/kontak', [KontakController::class, 'index'])->name('kontak');
    Route::get('/dashboard/kontak/{id}', [KontakController::class, 'delete'])->name('kontak.delete');
    Route::post('/dashboard/kontak/create', [KontakController::class, 'create'])->name('kontak.create');
    Route::post('/dashboard/kontak/update/{id}', [KontakController::class, 'update'])->name('kontak.update');

    Route::get('/dashboard/why-us', [WhyusController::class, 'index'])->name('why-us');
    Route::get('/dashboard/why-us/{id}', [WhyusController::class, 'delete'])->name('why-us.delete');
    Route::post('/dashboard/why-us/create', [WhyusController::class, 'create'])->name('why-us.create');
    Route::post('/dashboard/why-us/update/{id}', [WhyusController::class, 'update'])->name('why-us.update');

    Route::get('/dashboard/testimoni', [TestimoniController::class, 'index'])->name('testimoni');
    Route::get('/dashboard/testimoni/{id}', [TestimoniController::class, 'delete'])->name('testimoni.delete');
    Route::post('/dashboard/testimoni/create', [TestimoniController::class, 'create'])->name('testimoni.create');
    Route::post('/dashboard/testimoni/update/{id}', [TestimoniController::class, 'update'])->name('testimoni.update');

    Route::get('/dashboard/feedback', [FeedbackController::class, 'index'])->name('feedback');
    Route::get('/dashboard/feedback/{id}', [FeedbackController::class, 'delete'])->name('feedback.delete');
    Route::get('/dashboard/feedback/active/{id}', [FeedbackController::class, 'active'])->name('feedback.active');
    Route::get('/dashboard/feedback/inactive/{id}', [FeedbackController::class, 'inactive'])->name('feedback.inactive');

    Route::get('/dashboard/transaksi', [TransactionController::class, 'index'])->name('transaksi');
    Route::get('/dashboard/transaksi/{id}', [TransactionController::class, 'delete'])->name('transaksi.delete');
    Route::get('/dashboard/transaksi/sukses/{id}', [TransactionController::class, 'sukses'])->name('transaksi.sukses');
    Route::get('/dashboard/transaksi/pending/{id}', [TransactionController::class, 'pending'])->name('transaksi.pending');
    Route::get('/dashboard/transaksi/failed/{id}', [TransactionController::class, 'failed'])->name('transaksi.failed');

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

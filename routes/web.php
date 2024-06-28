<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CashierController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashborController;
use App\Http\Controllers\DataParkirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\NodeMCUController;
use App\Http\Controllers\ParkingHistoryController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\RiwayatParkirController;
use App\Http\Controllers\SlotParkirController;
use App\Http\Controllers\TbtransaksiController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RoleMiddleware;

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

// Route::get('/', function  () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::resource('users', UserController::class);

Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');


Route::group(['middleware' => ['auth', 'role:Admin']], function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    // Tambahkan rute lain untuk admin di sini
});

Route::group(['middleware' => ['auth', 'role:Kasir']], function () {
    Route::get('/kasir/dashboard', [KasirController::class, 'index'])->name('kasir.dashboard');
    // Tambahkan rute lain untuk kasir di sini
});

Route::group(['middleware' => ['auth', 'role:Pengguna']], function () {
    Route::get('/pengguna/dashboard', [PenggunaController::class, 'index'])->name('pengguna.dashboard');
    // Tambahkan rute lain untuk pengguna di sini
});


Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware('role:Admin')
    ->name('admin.dashboard');

Route::put('/slotparkir/{slotparkir}', [SlotParkirController::class, 'update'])->name('slotparkir.update');

Route::resource('dataparkir', DataParkirController::class);

Route::resource('kendaraan', KendaraanController::class);  
Route::get('/kendaraan/{id}', [KendaraanController::class, 'show'])->name('kendaraan.show');

Route::get('/transaksis', [TransaksiController::class, 'index'])->name('transaksis.index');
Route::get('/transaksis/create', [TransaksiController::class, 'create'])->name('transaksis.create');
Route::post('/transaksis/store', [TransaksiController::class, 'store'])->name('transaksis.store');
Route::get('/transaksis/{transaksi}/edit', [TransaksiController::class, 'edit'])->name('transaksis.edit');
Route::put('/transaksis/{transaksi}/update', [TransaksiController::class, 'update'])->name('transaksis.update');
Route::delete('/transaksis/{transaksi}/delete', [TransaksiController::class, 'destroy'])->name('transaksis.destroy');
Route::delete('/transaksi/{transaksi}', [TransaksiController::class, 'destroy'])->name('transaksis.destroy');

Route::get('/transaksi/{transaksi}', [TransaksiController::class, 'show'])->name('transaksi.show');
Route::resource('slotparkir', SlotParkirController::class);

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('users.destroy');

Route::resource('users', UserController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/parking-history', [ParkingHistoryController::class, 'index'])->name('admin.parking-history');
Route::get('/admin/riwayatparkir', [RiwayatParkirController::class, 'index'])->name('riwayatparkir.index');
Route::get('/users/add', [UserController::class, 'add'])->name('users.add');
Route::get('/kasir/dashboard', [KasirController::class, 'kasirDashboard'])->name('kasir.dashboard');

Route::post('/upload-avatar', [UserController::class, 'uploadAvatar'])->name('upload.avatar');
// Route::get('/user/dashboard', [UserDashboardController::class, 'index'])->name('user.dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('pengguna.dashboard');

Route::get('/users/dashboard', [UserController::class, 'dashboard'])->name('users.dashboard')->middleware('auth');
Route::get('/kendaraan', [UserController::class, 'kendaraan'])->name('users.kendaraan');
Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('users', UserController::class);
    Route::get('/dashboard', 'DashboardController@index')->name('admin.dashboard');
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/pengguna', [UserController::class, 'dashboard'])->name('user.pengguna');
    Route::get('/user/riwayatparkir', [UserController::class, 'riwayatParkir'])->name('user.riwayatparkir');
    Route::get('/user/kendaraan', [UserController::class, 'kendaraan'])->name('users.kendaraan');
    Route::resource('dataparkir', DataparkirController::class);
    Route::resource('kendaraan', KendaraanController::class);
    Route::resource('transaksi', TransaksiController::class);
    Route::resource('riwayatparkir', RiwayatparkirController::class);
    Route::get('/user/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
    Route::get('/user/pengguna', [UserController::class, 'dashboard'])->name('user.pengguna');
    Route::get('/user/riwayatparkir', [UserController::class, 'riwayatParkir'])->name('user.riwayatparkir');
    Route::get('/user/kendaraan', [UserController::class, 'kendaraan'])->name('users.kendaraan');
});
Route::middleware(['auth', 'role:cashier'])->group(function () {
    Route::get('/kasir/dashboard', 'KasirController@dashboard')->name('kasir.dashboard');
    Route::get('/cashier/dashboard', [KasirController::class, 'dashboard'])->name('cashier.dashboard');
});

Route::group(['prefix' => 'kasir', 'middleware' => ['auth', 'role:kasir']], function () {
    Route::get('/transactions', [CashierController::class, 'index'])->name('transactions.index');
    Route::get('/transactions/create', [CashierController::class, 'create'])->name('transactions.create');
    Route::post('/transactions', [CashierController::class, 'store'])->name('transactions.store');
    Route::get('/transactions/{transaksi}/edit', [CashierController::class, 'edit'])->name('transactions.edit');
    Route::put('/transactions/{transaksi}', [CashierController::class, 'update'])->name('transactions.update');
    Route::delete('/transactions/{transaksi}', [CashierController::class, 'destroy'])->name('transactions.destroy');
    Route::get('/transactions/{idtransaksi}', [CashierController::class, 'show'])->name('transactions.show');
});
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.dashboard');
    Route::get('/kasir/dashboard', [KasirController::class, 'dashboard'])->name('kasir.dashboard');
    Route::resource('transaksi', KasirController::class);
    Route::get('/transactions', [KasirController::class, 'transactions'])->name('kasir.transactions');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('pengguna.dashboard');
// routes/web.php

    Route::get('/dashboard', [DashborController::class, 'index'])->name('pengguna.dashboard');
    Route::get('/riwayat', [RiwayatParkirController::class, 'index'])->name('riwayat.index');
    Route::post('/riwayat', [RiwayatParkirController::class, 'store'])->name('riwayat.store');
    Route::put('/riwayat/{riwayat}', [RiwayatParkirController::class, 'update'])->name('riwayat.update');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/', [NodeMCUController::class, 'welcome']);
    Route::get('/simpanslot/{slot1}/{slot2}/{slot3}', [NodeMCUController::class, 'simpandatasensor']);
    Route::get('/slotparkir', [SlotParkirController::class, 'index'])->name('slotparkir.index');

  
Route::post('/transactions/{id}/keluar', 'TransactionsController@keluar')->name('transactions.keluar');
Route::group(['middleware' => 'auth'], function () {
    Route::get('users/profile', [UserController::class, 'edit'])->name('users.profile');
    Route::post('users/profile', [UserController::class, 'updateProfile'])->name('users.updateProfile');
});
Route::put('/users/{id}/avatar', [UserController::class, 'saveAvatar'])->name('users.avatar.save');
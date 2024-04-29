<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AlurPendaftaranController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\KapasitasController;
use App\Http\Controllers\JalurPendaftaranController;
use App\Http\Controllers\ProfilLulusanController;
use App\Http\Controllers\BiayaPendaftaranController;
use App\Http\Controllers\BiayaPerkuliahanController;
use App\Http\Controllers\SyaratPendaftaranController;
use App\Http\Controllers\BrosurController;
use App\Http\Controllers\PanduanPendaftaranController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\HasilCBTController;
use App\Http\Controllers\PascaSarjanaController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\LinkDaftarController;
use App\Http\Controllers\RplSliderController;
use App\Http\Controllers\RplDokumenController;
use App\Http\Controllers\RPLBiayaPendaftaranController;
use App\Http\Controllers\RPLBiayaPerkuliahanController;
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

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('alurpendaftaran', AlurPendaftaranController::class);
    Route::resource('akreditasi', AkreditasiController::class);
    Route::resource('kapasitas', KapasitasController::class);
    Route::resource('jalurpendaftaran', JalurPendaftaranController::class);
    Route::resource('profillulusan', ProfilLulusanController::class);
    Route::resource('biayapendaftaran', BiayaPendaftaranController::class);
    Route::resource('biayaperkuliahan', BiayaPerkuliahanController::class);
    Route::resource('syaratpendaftaran', SyaratPendaftaranController::class);
    Route::resource('hasilcbt', HasilCBTController::class);
    Route::resource('brosur', BrosurController::class);
    Route::resource('panduanpendaftaran', PanduanPendaftaranController::class);
    Route::resource('fakultas', FakultasController::class);
    Route::resource('prodi', ProdiController::class);
    Route::resource('kontak', KontakController::class);
    Route::resource('pascasarjana', PascaSarjanaController::class);
    Route::resource('slider', SliderController::class);
    Route::resource('linkdaftar', LinkDaftarController::class);
    Route::resource('rplgambar', RPLSliderController::class);
    Route::resource('rpldokumen', RPLDokumenController::class);
    Route::resource('rplbiayapendaftaran', RPLBiayaPendaftaranController::class);
    Route::resource('rplbiayaperkuliahan', RPLBiayaPerkuliahanController::class);
});

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('home/alurpendaftaran', [FrontendController::class, 'alurpendaftaran'])->name('alurpendaftaran.user');
Route::get('home/biayapendaftaran', [FrontendController::class, 'biayapendaftaran'])->name('biayapendaftaran.user');
Route::get('home/biayaperkuliahan', [FrontendController::class, 'biayaperkuliahan'])->name('biayaperkuliahan.user');
Route::get('home/syaratpendaftaran', [FrontendController::class, 'syaratpendaftaran'])->name('syaratpendaftaran.user');
Route::get('home/brosur', [FrontendController::class, 'brosur'])->name('brosur.user');
Route::get('home/panduanpendaftaran', [FrontendController::class, 'panduanpendaftaran'])->name('panduanpendaftaran.user');
Route::get('home/hasilcbt/{id}', [FrontendController::class, 'hasilcbt'])->name('hasilcbt.user');
Route::get('home/fakultas', [FrontendController::class, 'fakultas'])->name('fakultas.user');
Route::get('home/kontak', [FrontendController::class, 'kontak'])->name('kontak.user');
Route::get('home/pascasarjana', [FrontendController::class, 'pascasarjana'])->name('pascasarjana.user');
Route::get('home/rpl', [FrontendController::class, 'rpl'])->name('rpl.user');

require __DIR__.'/auth.php';

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

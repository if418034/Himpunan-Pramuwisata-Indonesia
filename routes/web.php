<?php

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


Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/destinasi', 'HomeController@destinasi');
Route::get('/cariDestinasi','HomeController@cariDestinasi');
Route::get('/kegiatan', 'HomeController@kegiatan');
Route::get('/cariKegiatan','HomeController@cariKegiatan');
Route::get('/pramuwisata', 'HomeController@pramuwisata');
Route::get('/cariPramuwisata','HomeController@cariPramuwisata');
Route::post('/buatKomentarPost', 'HomeController@buatKomentarPost');
Route::post('ckeditor/image_upload', 'HomeController@upload')->name('upload');
Route::get('/paket', 'HomeController@paket');
Route::get('/cariPaket','HomeController@cariPaket');
Route::get('/buatPemesanan/{id}', 'HomeController@buatPemesanan');
Route::post('/buatPemesananPost', 'HomeController@buatPemesananPost');
Route::get('/detailKegiatan/{id}', 'HomeController@detailKegiatan');
Route::get('/detailTempat/{id}', 'HomeController@detailTempat');

Route::get('/admin', 'AdminController@index');    
Route::get('/login', 'AdminController@login');
Route::post('/loginPost','AdminController@loginPost');
Route::get('/logout', 'AdminController@logout');

Route::get('/indexAdmin', 'AdminController@index');
Route::get('/terimaPemesanan1/{id}', 'AdminController@terimaPesanan1');
Route::get('/selesaiPemesanan1/{id}', 'AdminController@selesaiPesanan1');
Route::get('/hapusPemesanan1/{id}', 'AdminController@hapusPesanan1');

Route::get('/paketAdmin', 'AdminController@paket');
Route::get('/cariPaketAdmin','AdminController@cariPaketAdmin');
Route::get('/addPaket', 'AdminController@addPaket');
Route::post('/addPaketPost', 'AdminController@addPaketPost');
Route::get('/editPaket/{id}', 'AdminController@editPaket');
Route::post('/editPaketPost', 'AdminController@editPaketPost');
Route::get('/hapusPaket/{id}','AdminController@hapusPaket');

Route::get('/destinasiAdmin', 'AdminController@viewDestinasi');
Route::get('/cariDestinasiAdmin','AdminController@cariDestinasiAdmin');
Route::get('/addDestinasi', 'AdminController@addDestinasi');
Route::get('/deleteDestinasi/{id}', 'AdminController@deleteDestinasi');
Route::post('/addDestinasiPost', 'AdminController@addDestinasiPost');
Route::get('/editDestinasi/{id}', 'AdminController@editDestinasi');
Route::post('/editDestinasiPost', 'AdminController@editDestinasiPost');

Route::get('/pramuwisataAdmin', 'AdminController@pramuwisata');
Route::get('/cariAnggotaAdmin','AdminController@cariAnggotaAdmin');
Route::get('/tambahAnggota', 'AdminController@tambahAnggota');
Route::post('/tambahAnggotaPost', 'AdminController@addAnggotaPost');
Route::get('/editAnggota/{id}', 'AdminController@editAnggota');
Route::post('/editAnggotaPost', 'AdminController@editAnggotaPost');
Route::get('/hapusAnggota/{id}', 'AdminController@hapusAnggota');

Route::get('/kegiatanAdmin', 'AdminController@viewKegiatan');
Route::get('/cariKegiatanAdmin','AdminController@cariKegiatanAdmin');
Route::get('/addKegiatan', 'AdminController@addKegiatan');
Route::post('/addKegiatanPost', 'AdminController@addKegiatanPost');
Route::get('/deleteKegiatan/{id}', 'AdminController@deleteKegiatan');
Route::get('/editKegiatan/{id}', 'AdminController@editKegiatan');
Route::post('/editKegiatanPost', 'AdminController@editKegiatanPost');

Route::get('/bookingAdmin', 'AdminController@booking');
Route::get('/cariBookingAdmin','AdminController@cariBookingAdmin');
Route::get('/terimaPemesanan/{id}', 'AdminController@terimaPesanan');
Route::get('/selesaiPemesanan/{id}', 'AdminController@selesaiPesanan');
Route::get('/hapusPemesanan/{id}', 'AdminController@hapusPesanan');

Route::get('/galeriAdmin', 'AdminController@galeri');
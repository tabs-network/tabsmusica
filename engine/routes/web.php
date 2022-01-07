<?php
use Illuminate\Support\Facades\Route;

// Login
use App\Http\Controllers\login\loginAdminController;

use App\Http\Controllers\web\webHomeController;
use App\Http\Controllers\web\webArtistController;
use App\Http\Controllers\web\webChordController;
use App\Http\Controllers\web\webXmlController;

use App\Http\Controllers\admin\adminDashboardController;
use App\Http\Controllers\admin\artist\adminArtistController;
    use App\Http\Controllers\admin\artist\adminArtistChordController;
use App\Http\Controllers\admin\adminSongController;
use App\Http\Controllers\admin\adminChordController;
use App\Http\Controllers\admin\adminSettingMetaTagController;
use App\Http\Controllers\admin\adminSettingWebController;

// Xml
Route::get('/sitemap.xml', [webXmlController::class, 'sitemap'])->name('web.xml.sitemap');
Route::get('/page_sitemap.xml', [webXmlController::class, 'page'])->name('web.xml.page');
Route::get('/chord_sitemap.xml', [webXmlController::class, 'chord'])->name('web.xml.chord');
Route::get('/artist_sitemap.xml', [webXmlController::class, 'artist'])->name('web.xml.artist');

// Web
Route::get('/', [webHomeController::class, 'index'])->name('web.home.index');
Route::get('artist/', [webArtistController::class, 'index'])->name('web.artist.index');
Route::get('artist/{slug}', [webArtistController::class, 'show'])->name('web.artist.show');
Route::get('chord/', [webChordController::class, 'index'])->name('web.chord.index');
Route::get('chord/{slug}', [webChordController::class, 'show'])->name('web.chord.show');

// Login Controller
Route::get('login/admin/', [loginAdminController::class, 'showLoginForm'])->name('login.loginAdmin.showLoginForm');
Route::post('login/admin/', [loginAdminController::class, 'login'])->name('login.loginAdmin.login');
Route::get('login/admin/logout', [loginAdminController::class, 'logout'])->name('login.loginAdmin.logout');

Route::middleware('auth:admin')->group(function () {
    // Setting Web
    Route::get('admin/setting-web/{id}/edit/', [adminSettingWebController::class, 'edit'])->name('admin.settingWeb.edit');
    Route::put('admin/setting-web/{id}/update/', [adminSettingWebController::class, 'update'])->name('admin.settingWeb.update');

    // Setting Meta Tag
    Route::get('admin/setting-meta-tag/{id}/edit/', [adminSettingMetaTagController::class, 'edit'])->name('admin.settingMetaTag.edit');
    Route::put('admin/setting-meta-tag/{id}/update/', [adminSettingMetaTagController::class, 'update'])->name('admin.settingMetaTag.update');

    // Chord
    Route::get('admin/artist/chord/', [adminChordController::class, 'index'])->name('admin.chord.index');
    Route::get('admin/artist/chord/create/', [adminChordController::class, 'create'])->name('admin.chord.create');
    Route::post('admin/artist/chord/', [adminChordController::class, 'store'])->name('admin.chord.store');
    Route::get('admin/artist/chord/{id}/show/', [adminChordController::class, 'show'])->name('admin.chord.show');
    Route::get('admin/artist/chord/{id}/edit/', [adminChordController::class, 'edit'])->name('admin.chord.edit');
    Route::put('admin/artist/chord/{id}/update/', [adminChordController::class, 'update'])->name('admin.chord.update');
    Route::get('admin/artist/chord/{id}/destroy/', [adminChordController::class, 'destroy'])->name('admin.chord.destroy');

    // Artist
    Route::get('admin/artist/', [adminArtistController::class, 'index'])->name('admin.artist.index');
    Route::get('admin/artist/create/', [adminArtistController::class, 'create'])->name('admin.artist.create');
    Route::post('admin/artist/', [adminArtistController::class, 'store'])->name('admin.artist.store');
    Route::get('admin/artist/{id}/show/', [adminArtistController::class, 'show'])->name('admin.artist.show');
    Route::get('admin/artist/{id}/edit/', [adminArtistController::class, 'edit'])->name('admin.artist.edit');
    Route::put('admin/artist/{id}/update/', [adminArtistController::class, 'update'])->name('admin.artist.update');
    Route::get('admin/artist/{id}/destroy/', [adminArtistController::class, 'destroy'])->name('admin.artist.destroy');
    Route::get('admin/artist/search/', [adminArtistController::class, 'search'])->name('admin.artist.search');
        Route::get('admin/artist/chord/{artist_id}/', [adminArtistChordController::class, 'index'])->name('admin.artist.chord.index');
        Route::get('admin/artist/chord/create/{artist_id}/', [adminArtistChordController::class, 'create'])->name('admin.artist.chord.create');
        Route::post('admin/artist/chord/store/{artist_id}/', [adminArtistChordController::class, 'store'])->name('admin.artist.chord.store');
        Route::get('admin/artist/chord/edit/{id}', [adminArtistChordController::class, 'edit'])->name('admin.artist.chord.edit');
        Route::put('admin/artist/chord/update/{id}', [adminArtistChordController::class, 'update'])->name('admin.artist.chord.update');
        Route::get('admin/artist/chord/search/{artist_id}', [adminArtistChordController::class, 'search'])->name('admin.artist.chord.search');

    // Dashboard
    Route::get('admin/', [adminDashboardController::class, 'index'])->name('admin.dashboard.index');
});


<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleriesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactInfoController;
use App\Http\Controllers\UserController;
use App\Models\Contact;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Models\News;
use App\Models\Gallery;

Route::get('/', function () {
    $news = News::all();
    $news_count = $news->count();
    $pictures = File::files(public_path() . '/gallery-picture');
    $pictures_count = count($pictures);
    $rand_pictures = [];
    if ($pictures_count < 7) {
        $rand_pictures = $pictures;
    } else {
        $keys = array_rand($pictures, $pictures_count > 6 ? 6 : $pictures_count);
        foreach ($keys as $key) {
            $rand_pictures[] = $pictures[$key];
        }
    }

    return view('index', [
        'news' => $news->random($news_count > 5 ? 5 : $news_count)->collect(),
        'pictures' => $rand_pictures,
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/news', function () {
    $news = News::all();
    $news_count = $news->count();
    return view('news', [
        'news' => $news->random($news_count > 8 ? 8 : $news_count)->collect(),
    ]);

    return view('news');
});

Route::get('/gallery', function () {
    $pictures = File::files(public_path() . '/gallery-picture');
    $pictures_count = count($pictures);
    $rand_pictures = [];
    if ($pictures_count < 13) {
        $rand_pictures = $pictures;
    } else {
        $keys = array_rand($pictures, $pictures_count > 6 ? 6 : $pictures_count);
        foreach ($keys as $key) {
            $rand_pictures[] = $pictures[$key];
        }
    }

    return view('gallery', [
        'pictures' => $rand_pictures,
    ]);
});

Route::get('/contact', function () {
    $contactinfo = ContactInfo::first();
    return view('contact', ['contactinfo'=>$contactinfo]);
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', [UserController::class, 'admin']);

    // News
    Route::get('/admin/news', [NewsController::class, 'index']);
    Route::get('/admin/news/create', function () {return view('admin.news.create');});
    Route::get('/admin/news/edit', [NewsController::class, 'edit']);

    // Inbox
    Route::get('/admin/contact', [ContactController::class, 'index']);
    Route::get('/admin/contactinfo', [ContactInfoController::class, 'index']);
    Route::get('/admin/contactinfo/create', function () {return view('admin.contactinfo.create');});
    Route::get('/admin/contactinfo/edit', [ContactInfoController::class, 'edit']);

    // Picture
    Route::get('/admin/gallery', [GalleriesController::class, 'index']);
    Route::get('/admin/gallery/create', function () {return view('admin.gallery.create');});
    Route::get('/admin/gallery/edit',[GalleriesController::class, 'edit']);
});

Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::post('/login', [UserController::class, 'auth']);
Route::post('/register', [UserController::class, 'store']);


//Admin News Page
Route::post('/admin/news/insert', [NewsController::class, 'insert']);
Route::get('/admin/news/delete/{id}',[NewsController::class, 'delete']);
Route::put('/admin/news',[NewsController::class, 'update']);

//Admin Gallery Page
Route::post('/admin/gallery/insert', [GalleriesController::class, 'insert']);
Route::get('/admin/gallery/delete/{id}',[GalleriesController::class, 'delete']);
Route::put('/admin/gallery',[GalleriesController::class, 'update']);

//Admin Contact Page
Route::post('/contact', [ContactController::class, 'insert']);
Route::get('/admin/contact/delete/{id}',[ContactController::class, 'delete']);
Route::post('/admin/contactinfo/insert', [ContactInfoController::class, 'insert']);
Route::put('/admin/contactinfo',[NewsController::class, 'update']);
Route::get('/admin/contactinfo/delete/{id}',[ContactInfoController::class, 'delete']);


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin;

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');
Route::get('/about', function () {
    return view('pages.about');
})->name('about');
Route::get('/contact-us', function () {
    return view('pages.contact-us');
})->name('contact-us');
Route::get('/services', function () {
    return view('pages.services');
})->name('services');
Route::get('/gallery', function () {
    return view('pages.gallery');
})->name('gallery');



Route::prefix('admin')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');

    //Users CRUD
    Route::prefix('users')->group(function () {
        Route::get('/', Admin\Users\Index::class)->name('admin.users.index');
        Route::get('/create', Admin\Users\Create::class)->name('admin.users.create');
        Route::get('/{id}/edit', Admin\Users\Edit::class)->name('admin.users.edit');
    });
    //Services CRUD
    Route::prefix('services')->group(function () {
        Route::get('/', Admin\Services\Index::class)->name('admin.services.index');
        Route::get('/create', Admin\Services\Create::class)->name('admin.services.create');
        Route::get('/{id}/edit', Admin\Services\Edit::class)->name('admin.services.edit');
    });


    Route::prefix('posts')->group(function () {
        Route::get('/', Admin\Posts\Index::class)->name('admin.posts.index');
        Route::get('/create', Admin\Posts\Create::class)->name('admin.posts.create');
        Route::get('/{id}/edit', Admin\Posts\Edit::class)->name('admin.posts.edit');
    });

    Route::prefix('auctions')->group(function () {
        Route::get('/', Admin\Auctions\Index::class)->name('admin.auctions.index');
        Route::get('/create', Admin\Auctions\Create::class)->name('admin.auctions.create');
        Route::get('/{id}/edit', Admin\Auctions\Edit::class)->name('admin.auctions.edit');
    });

    Route::prefix('items')->group(function () {
        Route::get('/', Admin\Items\Index::class)->name('admin.items.index');
        Route::get('/create', Admin\Items\Create::class)->name('admin.items.create');
        Route::get('/{id}/edit', Admin\Items\Edit::class)->name('admin.items.edit');
    });

    Route::prefix('clients')->group(function () {
        Route::get('/', Admin\Clients\Index::class)->name('admin.clients.index');
        Route::get('/create', Admin\Clients\Create::class)->name('admin.clients.create');
        Route::get('/{id}/edit', Admin\Clients\Edit::class)->name('admin.clients.edit');
    });

    Route::prefix('partners')->group(function () {
        Route::get('/', Admin\Partners\Index::class)->name('admin.partners.index');
        Route::get('/create', Admin\Partners\Create::class)->name('admin.partners.create');
        Route::get('/{id}/edit', Admin\Partners\Edit::class)->name('admin.partners.edit');
    });
});

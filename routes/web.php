<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Iman\Streamer\VideoStreamer;

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
    'verified',
])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('dashboard');

    Route::get('/dashboard', [HomeController::class, 'index']);

    Route::get('/{username}', [ProfileController::class, 'index'])->name('profile');

    Route::get('/videos/{id}', function ($id) {
        $path = public_path('/storage/videos/test.mp4');
        VideoStreamer::streamFile($path);
    });
});

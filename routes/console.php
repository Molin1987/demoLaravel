<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');


// use App\Http\Controllers\RequestController;

// Route::get('/requests', [AppsController::class, 'index'])->name('apps.index');
// Route::get('/requests/create', [AppsController::class, 'create'])->name('apps.create');
// Route::post('/requests', [AppsController::class, 'store'])->name('apps.store');


// php artisan make:model User -mc
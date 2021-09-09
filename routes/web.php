<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use \App\Http\Controllers\HomeController;

Route::get( '/', [ HomeController::class, 'welcome' ] )->name( 'welcome' );

Route::middleware( 'auth:sanctum' )->group( function () {
  Route::get( 'dashboard', [ HomeController::class, 'dashboard' ] )
    ->name( 'dashboard' );
  Route::get( 'profile', [ HomeController::class, 'profile' ] )->name( 'home.profile' );
} );

/*Route::get('/', function () {
  return Inertia::render('Welcome', [
    'canLogin' => Route::has('login'),
    'canRegister' => Route::has('register'),
    'laravelVersion' => Application::VERSION,
    'phpVersion' => PHP_VERSION,
  ]);
});*/

/*Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return Inertia::render('Dashboard');
})->name('dashboard');*/

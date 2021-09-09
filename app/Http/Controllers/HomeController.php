<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Inertia\Response;

class HomeController extends Controller {

  /**
   * @return Response
   */
  public function welcome(): Response {
    return Inertia::render( 'Welcome', [
      'canLogin' => Route::has( 'login' ),
      'canRegister' => Route::has( 'register' )
    ] );
  }

  /**
   * @return Response
   */
  public function dashboard(): Response {
    return Inertia::render( 'Dashboard' );
  }

  /**
   * @return Response
   */
  public function profile(): Response {
    return Inertia::render( 'ProfileUser' );
  }
}

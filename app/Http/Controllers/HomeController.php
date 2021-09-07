<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller {
  /**
   * @return Response
   */
  public function dashboard(): Response {
    return Inertia::render( 'Dashboard' );
  }

  public function profile(): Response {
    return Inertia::render( 'ProfileUser' );
  }
}

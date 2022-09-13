<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Home;

class SearchController extends Controller
{

  public function getHomes(){

    $homes = Home::all();

    return response()->json( $homes );
  }

}
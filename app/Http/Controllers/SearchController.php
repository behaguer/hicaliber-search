<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Home;

class SearchController extends Controller
{
    public function index() {

        $homes = Home::all();
    
        return response()->json( $homes );
    
      }
    
      public function getHomes(){
    
        $homes = Home::all();
    
        return response()->json( $homes );
      }
    
}

<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use App\Models\Home;

class SearchController extends Controller
{
    public function index() {

        $homes = Home::all();
    
        return response()->json( $homes );
    
      }
    
      public function searchHomes(Request $request){
    
        $name = $request->input('name');
        $price = $request->input('price');
        $bedrooms = $request->input('bedrooms');
        $bathrooms = $request->input('bathrooms');
        $stories = $request->input('stories');
        $garages = $request->input('garages');

        $conditions = [];

        if (!empty($name))
          $conditions[] = ['name','LIKE',$name];

        if (!empty($price))
          $conditions[] = ['price','<=',$price];

        if (!empty($bedrooms))
          $conditions[] = ['bedrooms','>=',$bedrooms];

        if (!empty($bathrooms))
          $conditions[] = ['bathrooms','>=',$bathrooms];

        if (!empty($stories))
          $conditions[] = ['stories','>=',$stories];

        if (!empty($garages))
          $conditions[] = ['garages','>=',$garages];
        
        $homes = DB::table('homedata')->where($conditions)->get();
     
        return response()->json( $homes );

      }
    
}

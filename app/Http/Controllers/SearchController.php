<?php

namespace App\Http\Controllers;

use App\Attraction;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {   
        //like itu seperti sama dengan ibarat seperti pattern
        $attractions = Attraction::where('tempat_wisata', 'LIKE', '%'.$request->search.'%')->orWhere('provinsi', 'LIKE', '%'.$request->search.'%')->get();
        return view('welcome', compact('attractions'));
    }
}

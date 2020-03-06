<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function mainPage(){
        return view("search.searchpage");
    }

    public function resultsPage(){
       return view("search.results");
    }
}

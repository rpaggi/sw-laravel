<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Core\StarWarsApi;

class CharactersController extends Controller
{
    public function index(Request $request){
        $page = $request->page ? $request->page : 1;

        $peoples = StarWarsApi::getPeoples($page);

        return view('characters')->with(['peoples'=>$peoples, 'page'=>$page]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSites;

class SiteController extends Controller
{
    public function index()
    {
        $data = InfoSites::get();
        

     
        return view('site.index', [
            'data' => $data
        ]);
    }
}

//
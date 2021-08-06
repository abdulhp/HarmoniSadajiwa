<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Musik;
use Illuminate\Http\Request;

class Landing extends Controller
{
    public function index()
    {
        $webData['artikel'] = Artikel::all()->take(3);
        $webData['musik'] = Musik::all()->take(3);
        return view('landing', ['data' => $webData]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function siteMap(){

        $portfolios = Portfolio::all();

        return response()->view('sitemap.index', [
            'portfolios' => $portfolios
        ])->header('Content-Type', 'text/xml');
    }
}

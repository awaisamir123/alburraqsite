<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use App\Models\Review;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        try {
            $returnArr['portfolio'] = Portfolio::orderBy('created_at', 'desc')->take(6)->get();
            $returnArr['services'] = Service::orderBy('created_at', 'desc')->take(3)->get();
            $returnArr['testimonial'] = Review::orderBy('created_at', 'desc')->take(10)->get();;

            return response([
                'status' => 200,
                'data' => $returnArr
            ]);
        }
        catch (\Exception $e) {
            return response([
                'status' => 500,
                'data' => $e->getMessage()
            ]);
        }

    }
}

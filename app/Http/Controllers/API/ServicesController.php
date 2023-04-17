<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index() {

        try{
            $returnArr['services'] = Service::all();
            return response([
                'status' => 200,
                'data' => $returnArr
            ]);
        }
        catch(\Exception $e){
            return response([
                'status' => 500,
                'data' => $e->getMessage()
            ]);
        }



    }

    public function detail($id) {
        try{
            $returnArr['service'] = Service::findOrfail($id);
            return response([
                'status' => 200,
                'data' => $returnArr
            ]);
        }
        catch(\Exception $e){
            return response([
                'status' => 500,
                'data' => $e->getMessage()
            ]);
        }
    }
}

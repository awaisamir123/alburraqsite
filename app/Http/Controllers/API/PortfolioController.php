<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Portfolio;
use App\Models\Stack;
use App\Models\Tag;
use App\Models\Talent;
use App\Models\Tstack;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        try {
            $returnArr['portfolios']=Portfolio::all();
            $returnArr['categories']=Category::all();
            $returnArr['tags']=Tag::all();

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

    public function detail($title, $id){
        try {
            $returnArr['portfolio']= Portfolio::findOrfail($id);
            $returnArr['nextPortfolio'] = Portfolio::where('id', '>', $id)->first();
            $returnArr['previousPortfolio'] = Portfolio::where('id', '<', $id)->first();
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

    public function talentsIndex()
    {
        try {

            $returnArr['talents']=Talent::orderBy('name')->get();
            $returnArr['stacks']=Stack::all();
            $returnArr['tStacks']=Tstack::all();
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
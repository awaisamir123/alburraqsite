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
    public function index($category = null)
    {
        try {
            $returnArr['portfolios']=Portfolio::where(function ($query) use ($category){
                if(isset($category)) {
                    $query->where('category_id', $category);
                }
            })->with('tags.tagsName')->get();
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

    public function detail($id){
        try {
            $returnArr['portfolio']= Portfolio::with('category')->with('images')->findOrfail($id);
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

            $returnArr['talents']=Talent::with('stacks')->orderBy('name')->get();
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

    public function talentDetail($id) {
        try {
            $returnArr['talents']=Talent::orderBy('name')->findOrfail($id);

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

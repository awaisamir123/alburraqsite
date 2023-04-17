<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Pimages;
use App\Models\Portfolio;
use App\Models\Ptags;
use App\Models\Tag;
use App\Models\Stack;
use App\Models\Talent;
use App\Models\Tstack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('detail', 'index', 'talentsIndex');
    }

    public function portfolioList()
    {
        $returnArr['portfolios'] = Portfolio::latest()->get();
        return view('portfolio.portfolioList', $returnArr);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returnArr['portfolios'] = Portfolio::all();
        $returnArr['categories'] = Category::all();
        $returnArr['tags'] = Tag::all();
        return view('portfolio.index', $returnArr);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $returnArr['categories'] = Category::all();
        $returnArr['tags'] = Tag::all();
        return view('portfolio.create', $returnArr);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            /*	        'title'=>'required|min:3|max:30|regex:/^[a-zA-Z]{4,}(?: [a-zA-Z]+){0,2}$/',*/
            'title' => 'required|min:3|max:255|regex:/^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/',
            'description' => 'required|min:100|max:5000',
            'description_problem' => 'required|min:100|max:5000',
            'technologies' => 'required',
            'category_id' => 'required',
            'images' => 'required',
            'featuredimage' => 'required|mimes:jpeg,jpg,png,gif',
        ]);


        $portfolio = new Portfolio();
        $portfolio->title = $request->title;
        $portfolio->description = trim($request->description);
        $portfolio->description_problem = trim($request->description_problem);
        $portfolio->category_id = $request->category_id;


        if ($request->hasFile('featuredimage')) {
            $image = $request->file('featuredimage');
            $filename = 'f' . time() . '.' . $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(2098, 1500);
            $image_resize->save(public_path('portfolioimages/' . $filename));
            $portfolio->featuredimage = $filename;

            $imageUrl = asset(('portfolioimages/' . $filename));
            $portfolio->image_url = $imageUrl;
        }


        $portfolio->save();


        /*$destinationPath = 'portfolioimages';
        $img= $request->file('featuredimage');
        $filename = time() . '.' . $img->getClientOriginalName();
        $img->move($destinationPath, $filename);
        $pimg=new Pimages();
        $pimg->image=$filename;
        $pimg->portfolio_id=$portfolio->id;
        $pimg->save();*/


        if ($request->hasFile('images')) {

            foreach ($request->images as $img) {

                $destinationPath = 'portfolioimages';
                $filename = time() . '.' . $img->getClientOriginalName();
                $img->move($destinationPath, $filename);
                $pimg = new Pimages();
                $pimg->image = $filename;
                $pimg->portfolio_id = $portfolio->id;
                $pimg->save();

            }
        }

        if ($request->has('technologies')) {

            foreach ($request->technologies as $tech) {

                $ptech = new Ptags();
                $ptech->name = $tech;
                $ptech->portfolio_id = $portfolio->id;
                $ptech->save();


            }

        }

        Session::flash('message', 'Portfolio Created Successfully!');
        Session::flash('alert-class', 'alert-success');


        return redirect(route('portfolio.list'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function detail($title, $id)
    {
        $portfolio = Portfolio::findOrfail($id);
        $nextPortfolio = Portfolio::where('id', '>', $id)->first();
        $previousPortfolio = Portfolio::where('id', '<', $id)->first();


        return view('portfolio.show', compact('nextPortfolio', 'portfolio', 'previousPortfolio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $returnArr['categories'] = Category::all();
        $returnArr['tags'] = Tag::all();
        $returnArr['portfolio'] = Portfolio::findOrfail($id);
        $returnArr['tag'] = Tag::all()->pluck('id');
        return view('portfolio.edit', $returnArr);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(),
            [
                'title' => 'required|min:3|max:20|regex:/^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/',
                'description' => 'required|min:50|max:5000',
                // 'description_problem'=>'required|min:50|max:5000',
                'technologies' => 'required',
                'category_id' => 'required',
            ]);

        if ($validator->fails()) {
            $message = $validator->errors()->first();
            Session::flash('info', " $message");
            return Redirect::back()->withErrors($validator)->withInput();
        } else {


            $portfolio = Portfolio::findOrfail($id);


            $portfolio->title = $request->title;
            $portfolio->description = trim($request->description);
            $portfolio->description_problem = trim($request->description_problem);
            $portfolio->category_id = $request->category_id;



            if ($request->hasFile('featuredimage')) {
                $image = $request->file('featuredimage');

                $imgage = "portfolioimages/" . $portfolio->featuredimage;

                if (is_file($imgage)) {
                    unlink($imgage);
                }

                $filename = 'f' . time() . '.' . $image->getClientOriginalName();

                $image_resize = Image::make($image->getRealPath());
                //$image_resize->resize(150, 150);
                $image_resize->save(public_path('portfolioimages/' . $filename));
                $portfolio->featuredimage = $filename;


                $imageUrl = asset(('portfolioimages/' . $filename));

                $portfolio->image_url = $imageUrl;
            }
                $filename = $portfolio->featuredimage;
                $imageUrl = asset(('portfolioimages/' . $filename));
                $portfolio->image_url = $imageUrl;
            $portfolio->update();

            if ($request->hasFile('images')) {
                foreach ($portfolio->images()->get() as $img) {

                    $imgage = "portfolioimages/" . $img->image;
                    if (File::exists($imgage)) {
                        unlink($imgage);
                    }
                    $img->delete();

                }


                foreach ($request->images as $img) {
                    $destinationPath = 'portfolioimages';
                    $filename = time() . '.' . $img->getClientOriginalName();
                    $img->move($destinationPath, $filename);
                    $pimg = new Pimages();
                    $pimg->image = $filename;
                    $pimg->portfolio_id = $portfolio->id;
                    $pimg->save();

                }
            }

            if ($request->has('technologies')) {
                foreach ($portfolio->tags()->get() as $tg) {
                    $tg->delete();
                }


                foreach ($request->technologies as $tech) {

                    $ptech = new Ptags();
                    $ptech->name = $tech;
                    $ptech->portfolio_id = $portfolio->id;
                    $ptech->save();


                }

            }

        }


        Session::flash('message', 'Portfolio Updated Successfully!');
        Session::flash('alert-class', 'alert-success');


        return redirect(route('portfolio.list'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $portfolio = Portfolio::findOrfail($id);

        foreach ($portfolio->images()->get() as $image) {

            $img = "portfolioimages/" . $image->image;
            if (File::exists($img)) {
                unlink($img);
            }
        }

        $portfolio->delete();

        Session::flash('message', 'Portfolio Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');

        return back();
    }

    public function talentsIndex()
    {
        $talents = Talent::orderBy('name')->get();
        $stacks = Stack::all();
        $tStacks = Tstack::all();
        return view('talents.index', compact('talents', 'stacks', 'tStacks'));
    }
}

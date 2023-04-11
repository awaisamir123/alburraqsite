<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use App\Models\Review;
use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returnArr['reviews']=Review::all();
        return view('services.index', $returnArr);
    }

    public function webDesignAndDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',22)->orWhere('category_id','=',23)->orWhere('category_id','=',25)->orWhere('category_id','=',26)->orWhere('category_id','=',11)->paginate(3);

        return view('services.webdesignanddevelopment',$returnArr);
    }

    public function phpDevelopment(){

        $returnArr['portfolios']=Portfolio::where('category_id','=',22)->orWhere('category_id','=',23)->orWhere('category_id','=',25)->orWhere('category_id','=',26)->orWhere('category_id','=',11)->paginate(3);

        return view('services.phpdevelopment' ,$returnArr);

    }
    public function coldfusionDevelopment(){

        $returnArr['portfolios']=Portfolio::where('category_id','=',22)->orWhere('category_id','=',23)->orWhere('category_id','=',25)->orWhere('category_id','=',26)->orWhere('category_id','=',11)->paginate(3);

        return view('services.coldfusiondevelopment' ,$returnArr);

    }

    public function wordpressDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',18)->paginate(3);
        return view('services.wordpressdevelopment',$returnArr);
    }

    public function mobileAppDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',9)->orWhere('category_id','=',12)->orWhere('category_id','=',14)->paginate(3);
        return view('services.mobileappdevelopment',$returnArr);
    }
    public function androiddevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',9)->orWhere('category_id','=',12)->orWhere('category_id','=',14)->paginate(3);
        return view('services.androidappdevelopment',$returnArr);
    }
    public function iosDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',9)->orWhere('category_id','=',12)->orWhere('category_id','=',14)->paginate(3);
        return view('services.iosappdevelopment',$returnArr);
    }
    public function laravelDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',23)->paginate(3);
        return view('services.laraveldevelopment',$returnArr);
    }

    public function softwareDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',22)->orWhere('category_id','=',12)->orWhere('category_id','=',14)->paginate(3);
        return view('services.softwaredevelopment',$returnArr);
    }
    public function seo()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',2)->orWhere('category_id','=',7)->paginate(3);
        return view('services.seo',$returnArr);
    }
    public function socialMediaMarketing()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',2)->orWhere('category_id','=',7)->paginate(3);
        return view('services.socialmediamarketing',$returnArr);
    }
    public function digitalMarketing()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',2)->orWhere('category_id','=',7)->paginate(3);
        return view('services.digitalmarketing',$returnArr);
    }

    public function machineLearning()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',21)->orWhere('category_id','=',20)->paginate(3);
        return view('services.machinelearning',$returnArr);
    }
    public function pythonDevelopment()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',21)->orWhere('category_id','=',20)->paginate(3);
        return view('services.pythondevelopment',$returnArr);
    }

    public function artificialIntelligence()
    {
        $returnArr['portfolios']=Portfolio::where('category_id','=',20)->orWhere('category_id','=',21)->paginate(3);
        return view('services.artificialintelligence',$returnArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $returnArr['reviews']=Review::latest()->paginate(25);
        return view('review.reviewList', $returnArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'comment'=>'required|min:10',
        ]);

        $review=new Review();
        $review->name=$request->name;
        $review->comment=trim($request->comment);
        $review->companyname=$request->companyname;
        $review->save();

        Session::flash('message', 'Review Created Successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('review.index'));

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
        $returnArr['review']=Review::findOrfail($id);
        return view('review.edit', $returnArr);
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
        $this->validate($request,[
            'name'=>'required',
            'comment'=>'required',
        ]);

        $review=Review::findOrfail($id);
        $review->name=$request->name;
        $review->comment=trim($request->comment);
        $review->companyname=$request->companyname;
        $review->update();

        Session::flash('message', 'Review Updated Successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('review.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review=Review::findOrfail($id);
        $review->delete();

        Session::flash('message', 'Review Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');

        return back();
    }
}

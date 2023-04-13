<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

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

        if($request->hasFile('image')) {
            $image       = $request->file('image');
            $filename = 'f'.time() . '.' . $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            // $image_resize->resize(2098, 1500);
            $image_resize->save(public_path('reviewsimage/'.$filename));
            $review->image=$filename;

            $imageUrl =  asset(('reviewsimage/' . $filename));
            $review->image_url = $imageUrl;
        }
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

        if($request->hasFile('image')) {
            $image = $request->file('image');

            $imgage="reviewsimages/".$review->image;
            if (File::exists($imgage)) {
                unlink($imgage);
            }

            $filename = 'f'.time() . '.' . $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            //$image_resize->resize(150, 150);
            $image_resize->save(public_path('reviewsimages/'.$filename));
            $review->featuredimage=$filename;

            $imageUrl =  asset(('reviewsimages/' . $filename));
            $review->image_url = $imageUrl;
        }
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

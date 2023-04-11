<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TagController extends Controller
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
        $returnArr['tags']=Tag::latest()->get();
        return view('tag.tagList',$returnArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tag.create');
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
            'name'=>'required|min:3|max:30|regex:/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/'

        ]);

        $tg=Tag::where('name','=',$request->name)->first();
        if(!empty($tg)){

            Session::flash('message', 'Tag Already Exist!');
            Session::flash('alert-class', 'alert-warning');

            return back();
        }


        $tag=new Tag();
        $tag->name=$request->name;
        $tag->save();

        Session::flash('message', 'Tag Created Sucessfully!');
        Session::flash('alert-class', 'alert-success');

        return back();


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
        $returnArr['tagEdit']=Tag::findOrfail($id);
        $returnArr['tags']=Tag::all();
        return view('tag.tagList', $returnArr);
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
            'name'=>'required|min:3|max:30|regex:/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,2}$/'

        ]);

        $tag= Tag::findOrfail($id);
        $tag->name=$request->name;
        $tag->update();

        Session::flash('message', 'Tag Updated Sucessfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('tag.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tag=Tag::findOrfail($id);
        $tag->delete();

        Session::flash('message', 'Tag Deleted Sucessfully!');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}

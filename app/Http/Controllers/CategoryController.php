<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
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
        $returnArr['categories']=Category::latest()->get();
        return view('category.categoryList',$returnArr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
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
            'name'=>'required|min:3|max:30|regex:/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,3}$/'
        ]);

        $tg=Category::where('name','=',$request->name)->first();
        if(!empty($tg)){

            Session::flash('message', 'Category Already Exist!');
            Session::flash('alert-class', 'alert-warning');

            return back();
        }


        $tag=new Category();
        $tag->name=$request->name;
        $tag->save();

        Session::flash('message', 'Category Created Sucessfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('category.index'));

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
        $returnArr['cat']=Category::findOrfail($id);
        $returnArr['categories']=Category::all();
        return view('category.categoryList',$returnArr);
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
            'name'=>'required|min:3|max:30|regex:/^[a-zA-Z]{3,}(?: [a-zA-Z]+){0,3}$/'
        ]);

        $tag=Category::findOrfail($id);
        $tag->name=$request->name;
        $tag->update();

        Session::flash('message', 'Category Updated Sucessfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::findOrfail($id);
        $category->delete();

        Session::flash('message', 'Category Deleted Sucessfully!');
        Session::flash('alert-class', 'alert-danger');

        return back();

    }
}

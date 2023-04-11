<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class TeamMemberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returnArr['members']=Member::latest()->paginate(25);
        return view('member.memberList',$returnArr);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('member.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'jobtitle'=>'required',
            'image'=>'required',
            'description'=>'required',

        ]);

        $member=new Member();

        if($request->hasFile('image')){
            $destinationPath = 'profileimages';
            $filename = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move($destinationPath, $filename);
            $member->image=$filename;
        }

        $member->name=$request->name;
        $member->jobtitle=$request->jobtitle;
        $member->description=trim($request->description);
        $member->linkedin=$request->linkedin;
        $member->facebook=$request->facebook;
        $member->instagram=$request->instagram;
        $member->twitter=$request->twitter;
        $member->skype=$request->skype;
        $member->save();

        Session::flash('message', 'Member Created Successfully!');
        Session::flash('alert-class', 'alert-success');

        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $returnArr['member']=Member::findOrfail($id);
        return view('member.edit',$returnArr);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'jobtitle'=>'required',
            'description'=>'required',
        ]);

        $member= Member::findOrfail($id);

        if($request->hasFile('image')){

            $img = "profileimages/" . $member->image;
            if (File::exists($img)) {
                unlink($img);
            }

            $destinationPath = 'profileimages';
            $filename = time() . '.' . $request->image->getClientOriginalName();
            $request->image->move($destinationPath, $filename);
            $member->image=$filename;
        }

        $member->name=$request->name;
        $member->jobtitle=$request->jobtitle;
        $member->description=trim($request->description);
        $member->linkedin=$request->linkedin;
        $member->facebook=$request->facebook;
        $member->instagram=$request->instagram;
        $member->twitter=$request->twitter;
        $member->skype=$request->skype;
        $member->update();

        Session::flash('message', 'Member Updated Successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('team-member.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = Member::findOrfail($id);
        $img = "profileimages/" . $member->image;
        if (File::exists($img)) {
            unlink($img);
        }

        $member->delete();

        Session::flash('message', 'Member Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}

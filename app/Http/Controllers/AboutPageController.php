<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AboutPageController extends Controller
{

    public function index() {
        $returnArr['members']=Member::all();
        return view('aboutus.index1',$returnArr);
    }

    public function show($id)
    {
        $member= Member::findOrfail($id);
        $nextMember = Member::where('id', '>', $id)->first();
        $previousMember = Member::where('id', '<', $id)->first();
        return view('aboutus.show',compact('member','nextMember','previousMember'));
    }

}

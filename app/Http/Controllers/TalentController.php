<?php

namespace App\Http\Controllers;

use App\Models\Talent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class TalentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function talentList() {
        $returnArr['talents'] = Talent::latest()->get();
        return view('talents.talentList', $returnArr);
    }

    public function create()
    {
        return view('talents.create');
    }

    public function store(Request $request) {

        $this->validate($request,[
            'name'=>'required',
            'image'=>'required',

        ]);

//        dd("asdfadsf");
        $talent = new Talent();
        $talent->name = $request->name;
        $talent->professional_bio = $request->professional_bio;
        $talent->experience = $request->experience;
        $talent->video = $request->video_url;
        if($request->hasFile('image')) {
            $image       = $request->file('image');

            $filename = 'f'.time() . '.' . $image->getClientOriginalName();
            $image_resize = Image::make($image->getRealPath());

            $image_resize->save(public_path('talent_thumbnails/'.$filename));
            $talent->image=$filename;

            $imageUrl =  asset(('talent_thumbnails/' . $filename));
            $talent->image_url = $imageUrl;
        }

        $talent->save();

        return redirect(route('talent.list'));
    }

    public function edit(string $id)
    {
        $returnArr['talent'] = Talent::findOrfail($id);
        return view('talents.edit', $returnArr);
    }

    public function update(Request $request, string $id)
    {

        $talent = Talent::findOrFail($id);

        $talent->name = $request->name;
        $talent->video = $request->video_url;
        $talent->professional_bio = $request->professional_bio;
        $talent->experience = $request->experience;

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imgage = "talent_thumbnails/" . $talent->image;

            if (is_file($imgage)) {
                unlink($imgage);
            }

            $filename = 'f' . time() . '.' . $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            //$image_resize->resize(150, 150);
            $image_resize->save(public_path('talent_thumbnails/' . $filename));
            $talent->image = $filename;


            $imageUrl = asset(('talent_thumbnails/' . $filename));

            $talent->image_url = $imageUrl;

        }
        $talent->save();
        return redirect(route('talent.list'));

    }

    public function destroy($id)
    {
        $talent=Talent::findOrfail($id);
        $talent->delete();

        Session::flash('message', 'Talent Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');

        return back();
    }

}

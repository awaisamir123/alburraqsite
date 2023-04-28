<?php
//
//namespace App\Http\Controllers;
//
//use App\Models\Talent;
//use Illuminate\Http\Request;
//use Intervention\Image\ImageManagerStatic as Image;
//
//class TalentController extends Controller
//{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//
//
//    public function talentList() {
//        $returnArr['talents'] = Talent::latest()->get();
//        return view('talents.talentList', $returnArr);
//    }
//
//    public function create()
//    {
//        return view('talents.create');
//    }
//
//    public function store(Request $request) {
//        $this->validate($request,[
//            'name'=>'required',
//            'image'=>'required',
//            'video'=>'required',
//        ]);
//        $talent = new Talent();
//        $talent->name = $request->name;
//        $talent->professional_bio = $request->professional_bio;
//        $talent->expereince = $request->expereince;
//
//        if($request->hasFile('image')) {
//            $image       = $request->file('image');
//
//            $filename = 'f'.time() . '.' . $image->getClientOriginalName();
//
//            $image_resize = Image::make($image->getRealPath());
//
//            $image_resize->save(public_path('talent_thumbnails/'.$filename));
//            $talent->image=$filename;
//
//            $imageUrl =  asset(('talent_thumbnails/' . $filename));
//            $talent->image_url = $imageUrl;
//        }
//
//
//        if($request->hasFile('video')) {
//            $video       = $request->file('video');
//
//            $filename = 'f'.time() . '.' . $video->getClientOriginalName();
//
//
//            $image_resize->save(public_path('talentVideos/'.$filename));
//            $talent->image=$filename;
//
//            $videoUrl =  asset(('talentVideos/' . $filename));
//            $talent->video_url = $videoUrl;
//        }
//
//    }
//
//}

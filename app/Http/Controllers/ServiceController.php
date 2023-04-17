<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\ImageManagerStatic as Image;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $returnArr['services']=Service::latest()->paginate(25);
        return view('services.serviceList', $returnArr);
    }

    public function create()
    {
        return view('services.create');
    }
    public function store(Request $request){


        $this->validate($request,[

        ]);
        try {
            $service=new Service();
            $service->title=$request->title;
            $service->short_description=trim($request->short_description);
            $service->overview=trim($request->overview);
            $service->strategy=trim($request->strategy);
            $service->design=trim($request->design);
            $service->development=trim($request->development);

            if($request->hasFile('image')) {
                $image       = $request->file('image');
                $filename = 'f'.time() . '.' . $image->getClientOriginalName();

                $image_resize = Image::make($image->getRealPath());
                // $image_resize->resize(2098, 1500);
                $image_resize->save(public_path('servicesImages/'.$filename));
                $service->thumbnail=$filename;

                $imageUrl =  asset(('servicesImages/' . $filename));
                $service->thumbnail_url = $imageUrl;
            }

            $service->save();

            Session::flash('message', 'Service Created Successfully!');
            Session::flash('alert-class', 'alert-success');
            return redirect(route('service.list'));
        }
        catch (\Exception $e){

        }



    }

    public function edit($id)
    {
        $returnArr['service']=Service::findOrfail($id);
        return view('services.edit', $returnArr);
    }
    public function update(Request $request, $id) {



        $service=Service::findOrfail($id);

        $service->title = $request->title;
        $service->short_description=trim($request->short_description);
        $service->overview=trim($request->overview);
        $service->strategy=trim($request->strategy);
        $service->design=trim($request->design);
        $service->development=trim($request->development);

        if($request->hasFile('image')) {
            $image = $request->file('image');

            $imgage="servicesImages/".$service->thumbnail;
            if (File::exists($imgage)) {
                unlink($imgage);
            }

            $filename = 'f'.time() . '.' . $image->getClientOriginalName();

            $image_resize = Image::make($image->getRealPath());
            //$image_resize->resize(150, 150);
            $image_resize->save(public_path('servicesImages/'.$filename));
            $service->thumbnail=$filename;

            $imageUrl =  asset(('servicesImages/' . $filename));
            $service->thumbnail_url = $imageUrl;
        }
        $filename = $service->thumbnail;
        $imageUrl = asset(('servicesImages/' . $filename));
        $service->thumbnail_url = $imageUrl;
        $service->update();

        Session::flash('message', 'Service Updated Successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('service.list'));

    }
    public function destroy($id){
        $review=Service::findOrfail($id);
        $review->delete();

        Session::flash('message', 'Service Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');

        return back();
    }
}

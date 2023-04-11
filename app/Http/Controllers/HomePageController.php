<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Member;
use App\Models\Portfolio;
use App\Models\Review;
use App\Models\Contact;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Notifications\HireDeveloperLead;
use App\Models\User;
use Exception;
use Validator;
use TimeHunter\LaravelGoogleReCaptchaV3\Validations\GoogleReCaptchaV3ValidationRule;

class HomePageController extends Controller
{
    public function index()
    {

        $returnArr['portfolios']=Portfolio::paginate(3);
        $returnArr['categories']=Category::all();
        $returnArr['members'] =Member::paginate(3);
        $returnArr['reviews'] =Review::all();

        return view('home.index',$returnArr);
    }
    public function developer()
    {
        $returnArr['portfolios']=Portfolio::paginate(3);
        $returnArr['categories']=Category::all();
        $returnArr['members']=Member::paginate(3);
        $returnArr['reviews']=Review::all();

        return view('home.developer', $returnArr);
    }
    public function marketer(){
        $returnArr['portfolios']=Portfolio::paginate(3);
        $returnArr['categories']=Category::all();
        $returnArr['members']=Member::paginate(3);
        $returnArr['reviews']=Review::all();
        return view('home.marketer', $returnArr);
    }
    public function addContact(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'=>'required|string|max:100',
            'email'=>'required|email',
            'company'=>'max:100',
            'need'=>'max:100',
            'message'=>'required|max:1000',
            // 'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('hireDeveloper')]
        ]);

        if ($validator->fails())
        {
            return redirect()->back()->withErrors($validator->errors())->withInput();
        }

        $checkValidPhone = $request->phone;

        $data=$request->except(['_token','g-recaptcha-response']);
        $data['phone'] = $request->phone;
        $data['hire_type'] = $request->hire_type;

        // $data['phone']=$userPhone;
        $contact= \App\Contact::create($data);
        if($contact) {

            $emailNotification = new HireDeveloperLead($contact);

            try {
                $admin = \App\User::where('email', 'ali@al-burraq.com')->first();
                $admin->notify($emailNotification);
            } catch (Exception $e) {
                // return $e;
            }

            Session::flash('success', 'Message received successfully');
        } else {
            Session::flash('error', 'Message Add Fail');
        }

        if($request->hire_type == 'Developer'){
            return redirect()->route('developer');
        }else if($request->hire_type == 'Marketer'){
            return redirect()->route('marketer');
        }
    }
    public function home()
    {

        $returnArr['portfolios']=Portfolio::paginate(3);
        $returnArr['categories']=Category::all();
        $returnArr['members'] =Member::paginate(3);
        $returnArr['reviews'] =Review::all();

        return view('home.home',$returnArr);
    }

}

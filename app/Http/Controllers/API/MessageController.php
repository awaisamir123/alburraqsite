<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Newsletter;
use App\Models\User;
use App\Notifications\ContactMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{
    public function message(Request $request){
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
            // 'g-recaptcha-response' => [new GoogleReCaptchaV3ValidationRule('contact_us')]
        ]);

        $message = new Message();
        $message->name = $request->name;
        $message->email = $request->email;
        $message->subject = $request->subject;
        $message->message = $request->message;
        $message->response = "";
        $message->responsestatus = 0;
        $message->save();

        $emailNotification = new ContactMessage($message->name, $message->email, $message->subject, $message->message);

        try {
            $admin = User::where('email', 'ali@al-burraq.com')->first();
            $admin->notify($emailNotification);
        } catch (\ Exception $e) {
            return response([
                'status' => 500,
                'data' => $e->getMessage()
            ]);
        }

        Session::flash('message', 'Your Message Sent Successfully!');
        Session::flash('alert-class', 'alert-success');

        return response([
            'status' => 200,
            'message' => 'Message has been sent'
        ]);
    }

    public function saveNewsletter(Request $request){
        try {
            $this->validate($request, [

                'email' => 'required',

            ]);

            $newsletter = new Newsletter();
            $newsletter->email = $request->email;
            $newsletter->save();
            return response([
                'status' => 200,
                'data' => 'Newsletter Send'
            ]);
        }
        catch(\Exception $e) {
            return response([
                'status' => 500,
                'data' => $e->getMessage()
            ]);
        }

    }
}

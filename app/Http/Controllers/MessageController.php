<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Notifications\ContactMessage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class MessageController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('store');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returnArr['messages'] = Message::latest()->paginate(25);
        return view('contact.messageList', $returnArr);
    }
    public function responsedMessages()
    {
        $returnArr['messages'] = Message::where('responsestatus', '=', 1)->latest()->get();
        return view('contact.responseMessageList', $returnArr);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

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
        } catch (Exception $e) {
            // return $e;
        }

        Session::flash('message', 'Your Message Sent Successfully!');
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
        $returnArr['message'] = Message::findOrfail($id);
        return view('contact.sendResponse', $returnArr);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'email' => 'required',
            'response' => 'required|min:10',
            'subject' => 'required',
        ]);

        $message = Message::findOrfail($id);
        $message->response = $request->response;
        $message->subject = $request->subject;
        $message->email = $request->email;
        $message->responsestatus = 1;
        $message->update();



        Mail::send('mail.mail', ['name' => $message->name, 'response' => $message->response], function ($m) use ($message) {
            $m->from('alburraqdev@gmail.com', 'Al-burraq');

            $m->to($message->email, $message->name)->subject($message->subject);
        });

        Session::flash('message', 'Email Sent Successfully!');
        Session::flash('alert-class', 'alert-success');

        return redirect(route('message.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message = Message::findOrfail($id);
        $message->delete();

        Session::flash('message', 'Message Deleted Successfully!');
        Session::flash('alert-class', 'alert-danger');
        return back();
    }
}

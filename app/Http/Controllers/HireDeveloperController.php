<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class HireDeveloperController extends Controller
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
        $returnArr['hireDeveloper'] =Contact::latest()->get();
        return view('hiredeveloper.index', $returnArr);
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
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function hireDeveloperDelete(Request $request)
    {
        $hireDeveloper =  Contact::find($request->id);
        if($hireDeveloper){
            Contact::whereId($hireDeveloper->id)->delete();
            $response['status']= true;
            $response['message']="Hire develoer deleted successfully";
        }else{
            $response['status']= false;
            $response['message']="Hire develoer failled to delete";
        }
        return response()->json($response, 200);
    }
}

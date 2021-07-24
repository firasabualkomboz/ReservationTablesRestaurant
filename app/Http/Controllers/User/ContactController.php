<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.contact_form');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $contact = Contact::create([

        //     'name'           => $request->post('name'),
        //     'email'          => $request->post('email'),
        //     'subject'        => $request->post('subject'),
        //     'mobile_number'  => $request->post('mobile_number'),
        //     'message'        => $request->post('message'),

        // ]);

        // return  response()->json($contact);


        Contact::create([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'mobile_number' => $request->mobile_number,
            'message' => $request->message
          ]);

          return response()->json(['success'=>'Form is successfully submitted!']);
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


    public function edit($id)
    {
        //
    }



    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}

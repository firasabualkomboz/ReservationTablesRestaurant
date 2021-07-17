<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Table;
use Carbon\Carbon;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;

class BookingsController extends Controller
{

    public function index()
    {
        $tables = Table::all();
        return view('user.bookings.create',compact('tables'));
    }

    public function filltertable(Request $request)
    {

        $tables = null;
        $table = Table::all();

        if ($request->filled(['number_person','type','start_at','end_at'])) {

        $times = [
        Carbon::parse($request->input('start_at')),
        Carbon::parse($request->input('end_at')),
        ];

        $tables = Table::where('number_person', '<=', $request->input('number_person'))
        ->where('type' , '=' ,$request->input('type'))
        // ->whereBetween('start_at',$times)
        // ->orwhereBetween('end_at',$times)
        // ->orwhere(function($query) use ($times) {
        //     $query->where('start_at', '<', $times[0])
        //     ->where('end_at', '>', $times[1]);
        // })
        ->get();

        }

        return view('user.bookings.create', compact('tables','table'));

    }


    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     //
    // }

     public function store(Request $request)

    {

        // $table = Table::findOrFail($request);

        $validated = $request->validate([
            'table_id'              =>'required|',
            'name'                   =>'required|',
            'phone'                  =>'required',
        ]);

        $book = new Booking();
        $book->table_id        = $request->input('table_id');
        $book->name            = $request->input('name');
        $book->phone           = $request->input('phone');

        $book->save();


        return redirect()->route('admin.index')->with('success','Added Successfuly');


        // dd($request->all());

    }

    public function choice($id)
    {

        $table = Table::find($id);

        $tables = Table::all();
        return view('user.bookings.choice',compact('tables','table'));
    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
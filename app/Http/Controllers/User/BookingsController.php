<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Table;
use App\Models\Time;
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
        $times = Time::all();

        if ($request->filled(['number_person','type','start_at','end_at'])) {

        $dates = [

        Carbon::parse($request->input('start_at')),
        Carbon::parse($request->input('end_at')),

        ];

        $tables = Table::where('number_person', '<=', $request->input('number_person'))
        ->where('type' , '=' ,$request->input('type'))
        ->whereBetween('start_at',$dates)
        ->orwhereBetween('end_at',$dates)
        ->orwhere(function($query) use ($dates) {
            $query->where('start_at', '<', $dates[0])
            ->where('end_at', '>', $dates[1]);
        })
        ->get();

        }

        return view('user.bookings.create', compact('tables','table','times'));

    }

    public function king_table(Request $request)
    {
        $kings = Table::where('number_person' , '>=' , '12')->take(5)->get();
        return view('user.index',compact('kings'));
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


        return view('user.index')->with('success','تم حجز الطاولة بنجاح');


        // dd($request->all());

    }

    public function choice($id)
    {

        $table = Table::find($id);

        $tables = Table::all();
        return view('user.bookings.choice',compact('tables','table'));
    }


    public function get_all()
    {
        $bookings = Booking::paginate(5);
        return view('admin.bookings.index',compact('bookings'));
    }

    public function destroy_booking($id)
    {
        $booking = Booking::findOrFail($id);

        $booking->delete();

        return redirect()->route('admin.booking.all')
        ->with('success','تم حذف الحجز بنجاح');
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

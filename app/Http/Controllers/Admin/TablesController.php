<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;
use App\Models\Table;
use App\Models\Time;
use Carbon\Carbon;
use Facade\Ignition\Tabs\Tab;
use Illuminate\Http\Request;

class TablesController extends Controller
{

    public function index()
    {
        $tables = Table::paginate(5);
        $times  = Time::all();
        return view('admin.tables.index',compact('tables','times'));
    }

    public function create()
    {
        $times = Time::all();
        return view('admin.tables.create',compact('times'));
    }


    public function store(TableRequest $request)

    {


        // $validated = $request->validate([
        //     'number_table'          =>'required|int|max:50',
        //     'number_person'         =>'required|int',
        //     'type'                  =>'required|in:inside,outside',
        // ]);


        // $customMessages = [
        //     'max'    => 'رقم الطاولة يجب ان يكوم أقل من 50.',
        // ];



        $table = new Table;
        $table->number_table        = $request->input('number_table');
        $table->number_person       = $request->input('number_person');
        $table->type                = $request->input('type');
        $table->start_at            = $request->input('start_at');
        $table->end_at              = $request->input('end_at');
        $table->time_id             = $request->input('time_id');

        $table->save();


        return redirect()->route('admin.tables')->with('success','تم إضافة الطاولة بنجاح');



    }


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

        $table = Table::findOrFail($id);

        $table->delete();

        return redirect()->route('admin.tables')
        ->with('success','تم حذف الطاولة بنجاح');



    } //end destroy



}

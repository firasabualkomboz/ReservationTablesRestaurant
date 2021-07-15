<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TableRequest;
use App\Models\Table;
use Illuminate\Http\Request;

class TablesController extends Controller
{

    public function index()
    {
        $tables = Table::all();

        return view('admin.tables.index',compact('tables'));
    }

    public function create()
    {
        return view('admin.tables.create');
    }

    public function store(Request $request)

    {


        $validated = $request->validate([
            'number_table'          =>'required|int',
            'number_person'         =>'required|int',
            'type'                  =>'required|in:inside,outside',
        ]);


        $table = new Table;
        $table->number_table        = $request->input('number_table');
        $table->number_person       = $request->input('number_person');
        $table->type                = $request->input('type');
        $table->start_at             = $request->input('start_at');
        $table->end_at               = $request->input('end_at');

        $table->save();


        return redirect()->route('admin.tables')->with('success','Added Successfuly');



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

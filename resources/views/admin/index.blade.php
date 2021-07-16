@extends('layouts.admin')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif

<div class="col-lg-12">

    <section class="content">
        <div class="container-fluid">
        <a href="{{route('table.create')}}">
        <button class="btn btn-primary mt-3 mb-3">Add new Table</button>
        </a>

        <div class="row">

        <div class="col-lg-12">
        <div class="card">

        <div class="card-header">
        <h3 class="card-title">All Tables in Resturent</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th> #id </th>
            <th> Number Table </th>
            <th> Num Person </th>
            <th>TYPE BOOKING</th>
            <th>FROM Date </th>
            <th>TO Date</th>
            <th>FROM Hour </th>
            <th>TO Hour</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($tables as $table)
        <tr>
            <td>{{$table->id}}</td>
            <td>{{$table->number_table}}</td>
            <td>{{$table->number_person}}</td>
            <td><span class="btn btn-sm btn-outline-success">{{$table->type}}</span>

            {{-- <td>{{$table->start_at}}</td> --}}
            <td><span class="btn btn-outline-primary">{!! date('d-m-Y' , strtotime($table->start_at)) !!}</span>
            {{-- <td>{{$table->end_at}}</td> --}}
            <td> <span class="btn btn-outline-primary">{!! date('d-m-Y' , strtotime($table->end_at)) !!}</span></td>
            <td><span class="btn btn-sm btn-outline-info">{!! date('H' , strtotime($table->start_at)) !!}</span></td>
            <td><span class="btn btn-sm btn-outline-info">{!! date('H' , strtotime($table->end_at)) !!}</span></td>

        </tr>

        @endforeach
        </tbody>

        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>


</div>

<div class="col-lg-6">

    <section class="content">
        <div class="container-fluid">

            <br>
            <br><br>

        <div class="row">

        <div class="col-lg-12">
        <div class="card">

        <div class="card-header">
        <h3 class="card-title">All Bookings</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
        <table id="example2" class="table table-bordered table-hover">
        <thead>
        <tr>
            <th> name </th>
            <th> phone </th>

            <th> ID Table </th>
            {{-- <th> Num Person </th>
            <th>TYPE BOOKING</th>
            <th>FROM </th>
            <th>TO </th> --}}
        </tr>
        </thead>
        <tbody>

            @foreach ($bookings as $booking)
        <tr>
            <td>{{$booking->name}}</td>
            <td>{{$booking->phone}}</td>
            <td>{{$booking->table_id}}</td>

            {{-- <td>{{$post->category->name}}</td> --}}

            {{--</td>
            <td>{{$bookings->end_at}}</td>
            <td>{{$booking->number_table}}</td>
            <td>{{$bookings->number_person}}</td>
            <td>{{$bookings->type}}</td>
            <td>{{$bookings->start_at}}</td>
            <td>{{$bookings->end_at}}</td> --}}
        </tr>

        @endforeach
        </tbody>

        </table>
        </div>
        </div>
        </div>
        </div>
        </div>
        </section>

</div>






@endsection

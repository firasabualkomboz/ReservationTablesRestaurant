@extends('layouts.admin')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif

<section class="content">
<div class="container-fluid">
<a href="{{route('table.create')}}">
<button class="btn btn-primary mt-3 mb-3">Add new Table</button>
</a>

<div class="row">

<div class="col-12">
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
    <th>FROM </th>
    <th>TO </th>
</tr>
</thead>
<tbody>

    @foreach ($tables as $table)
<tr>
    <td>{{$table->id}}</td>
    <td>{{$table->number_table}}</td>
    <td>{{$table->number_person}}</td>
    <td>{{$table->type}}</td>
    <td>{{$table->start_at}}</td>
    <td>{{$table->end_at}}</td>
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


<section class="content">
    <div class="container-fluid">


    <div class="row">

    <div class="col-12">
    <div class="card">

    <div class="card-header">
    <h3 class="card-title">All Bookings</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example2" class="table table-bordered table-hover">
    <thead>
    <tr>
        <th> ID </th>
        <th> name </th>
        <th> phone </th>
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



@endsection

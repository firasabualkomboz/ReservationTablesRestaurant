@extends('layouts.admin')

@section('content')

@if (session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif

<div class="col-xl-12">
    <div class="card">
    <div class="card-header pb-0">
    <div class="d-flex justify-content-between">
    <h4 class="card-title mg-b-0 mb-3">الطاولات الموجودة في المطعم</h4>
    <i class="mdi mdi-dots-horizontal text-gray"></i>
    </div>
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table mg-b-0 text-md-nowrap">
    <thead>
    <tr>

    <th>رقم الطاولة</th>
    <th >عدد الأشخاص</th>
    <th >نوع الحجز</th>
    <th>اكشن</th>

    {{-- <th>من تاريخ</th>
    <th>إلى تاريخ</th>
    <th>من ساعة</th>
    <th>إلى ساعة</th> --}}
    </tr>
    </thead>
    <tbody>

    @foreach ($tables as $table)
    <tr>
    <td>{{$table->number_table}}</td>
    <td>{{$table->number_person}}</td>
    <td> <span class="btn btn-sm btn-outline-success"> {{$table->type}} </span></td>
    <td><a href="{{route('admin.tables')}}"><span class="btn btn-outline-primary">تفاصيل أكثر</span></a></td>

    {{-- <td> <span class="btn btn-outline-primary"> {!! date('d-m-Y'  , strtotime($table->start_at)) !!}</span></td>
    <td> <span class="btn btn-outline-primary"> {!! date('d-m-Y'  , strtotime($table->end_at)) !!}</span></td>
    <td><span class="btn btn-sm btn-outline-info">{!! date('H' , strtotime($table->start_at)) !!}</span></td>
    <td><span class="btn btn-sm btn-outline-info">{!! date('H' , strtotime($table->end_at)) !!}</span></td> --}}

    </tr>
    @endforeach

    </tbody>
    </table>
    {{$tables->links()}}

    </div>
    </div>
    </div>
    </div>


    <div class="col-xl-12">
        <div class="card">
        <div class="card-header pb-0">
        <div class="d-flex justify-content-between">
        <h4 class="card-title mg-b-0 mb-3">الطاولات المحجوزة</h4>
        <i class="mdi mdi-dots-horizontal text-gray"></i>
        </div>

        </div>
        <div class="card-body">
        <div class="table-responsive">
        <table class="table mg-b-0 text-md-nowrap">
        <thead>
        <tr>

        <th>الحجز بأسم</th>
        <th>رقم التواصل</th>
        <th>رقم الطاولة</th>
        <th >عدد الأشخاص</th>
        <th >نوع الحجز</th>
        <th>اكشن</th>
        {{-- <th>من تاريخ</th>
        <th>إلى تاريخ</th>
        <th>من ساعة</th>
        <th>إلى ساعة</th> --}}
        </tr>
        </thead>
        <tbody>

        @foreach ($bookings as $booking)
        <tr>
        <td>{{$booking->name ?? 'NAN'}}</td>
        <td>{{$booking->phone ?? 'NAN'}}</td>
        <td>{{$booking->table->number_table ?? 'NAN'}}</td>
        <td>{{$booking->table->number_person ?? 'NAN'}}</td>
        <td>{{$booking->table->type ?? 'NAN'}}</td>
        <td><a href="{{route('admin.tables')}}"><span class="btn btn-outline-primary">تفاصيل أكثر</span></a></td>
        {{-- <td> <span class="btn btn-outline-primary"> {!! date('d-m-Y', strtotime($booking->table->start_at)) !!}</span></td>
        <td> <span class="btn btn-outline-primary"> {!! date('d-m-Y', strtotime($booking->table->end_at)) !!}</span></td>
        <td><span class="btn btn-sm btn-outline-info">{!! date('H'  , strtotime($booking->table->start_at)) !!}</span></td>
        <td><span class="btn btn-sm btn-outline-info">{!! date('H'  , strtotime($booking->table->end_at)) !!}</span></td> --}}
        </tr>
        @endforeach

        </tbody>
        </table>
        {{$bookings->links()}}

        </div>
        </div>
        </div>
        </div>





@endsection

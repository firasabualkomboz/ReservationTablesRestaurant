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
        <th>من تاريخ</th>
        <th>إلى تاريخ</th>
        <th>الوقت</th>
        <th>اكشن</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($bookings as $booking)
        <tr>
        <td>{{$booking->name}}</td>
        <td>{{$booking->phone}}</td>
        <td>{{$booking->table->number_table}}</td>
        <td>{{$booking->table->number_person}}</td>
        <td>{{$booking->table->type}}</td>
        <td> <span class="btn btn-outline-primary"> {!! date('d-m-Y', strtotime($booking->table->start_at)) !!}</span></td>
        <td> <span class="btn btn-outline-primary"> {!! date('d-m-Y', strtotime($booking->table->end_at)) !!}</span></td>
        <td>{!! date('h a'  , strtotime($booking->table->start_time)) !!} <br> {!! date('h a'  , strtotime($booking->table->end_time)) !!} </td>

        <td>
            <form action="{{route('admin.booking.destroy',[$booking->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
            </form>
            </td>

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

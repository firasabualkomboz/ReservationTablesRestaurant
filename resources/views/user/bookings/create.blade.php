@extends('layouts.user')

@section('content')

<div class="col-lg-5 mt-5">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">احجز طاولة الأن في تيك شيف</h3>
{{-- check error --}}
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $message )
<li>{{$message}}</li>
@endforeach
</ul>
</div>
@endif
{{-- end check --}}
<form>

<div class="card-body">

    <div class="form-group">
    <label for="exampleSelectBorderWidth2">عدد الأشخاص </label>
    <select name="number_person" value="number_person" class="custom-select form-control-border">
    @php
    $max = 21;
    @endphp
    @for ($i = 0; $i < $max; $i++)
    <option  name="number_person"> {{$i}} </option>
    @endfor
    </select>
    </div>


    <div class="form-group clearfix">
    <label>نوع الحجز</label>
    <br>
    <div class="icheck-primary d-inline">
    <input name="type" id="inside" value="inside" type="radio">
    <label for="inside"> داخلي
    </label>
    </div>
    <div class="icheck-primary d-inline">
    <input name="type" id="outside" value="outside" type="radio">
    <label for="outside"> خارجي
    </label>
    </div>
    </div>


    <div class="form-group">
    <label for="exampleInputPassword1">الوقت من </label>
    <input type="date" name="start_at" class="form-control" >
    </div>

    <div class="form-group">
    <label for="exampleInputPassword1">إلى</label>
    <input type="date" name="end_at" class="form-control">
    </div>

    <div class="form-group">
        <label for="">الوقت المتاح</label>
        <select name="time_id" class="form-control">
        <option> لا يوجد وقت محدد </option>
        @foreach ($times as $time)
        <option value="{{ $time->id }}">
            {!! date('h a'  , strtotime($time->start_time)) !!} <br> {!! date('h a'  , strtotime($time->end_time)) !!}
        </option>
        @endforeach
        </select>
        </div>


    <button type="submit" class="btn btn-primary">إحجز طاولة</button>


    </div>
      </form>
    </div>

    </div>
    <!-- /.card -->



  </div>


<div class="col-lg-7 mt-5">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title"> الطاولات المتاحة</h3>

<div class="card-body">

@if($tables !== null)
<hr />
@if($tables->count())
<div class="table-responsive">
<table class=" table table-bordered table-striped table-hover datatable datatable-Event">
<thead>
<tr>
<th>عدد الأشخاص</th>
<th>النوع</th>
<th>من</th>
<th>إلى</th>
<th>الوقت المتاح</th>
<th>أكشن</th>
</tr>
</thead>
<tbody>
@foreach($tables as $table)
<tr>
<td class="room-name">{{ $table->number_person ?? '' }}</td>
<td class="room-name">{{ $table->type ?? '' }}</td>
{{-- <td>{{$table->start_at ?? ''}}</td> --}}
<td>{!! date('d-m-Y'  , strtotime($table->start_at)) !!}</td>
<td>{!! date('d-m-Y'  , strtotime($table->end_at)) !!}</td>
<td>{!! date('h a'  , strtotime($time->start_time)) !!} <br> {!! date('h a'  , strtotime($time->end_time)) !!}</td>

{{-- <td>{{$table->end_at ?? ''}}</td> --}}
{{--  {{route('booking.choice',[$table->id])}} --}}
<td><a class="btn btn-sm btn-primary" href="{{route('booking.choice',[$table->id])}}">حجز الأن</a>
</td>

</tr>
@endforeach
</tbody>
</table>
</div>
@else
<p class="text-center">لا يوجد طاولة بهذه المواصفات , ابحث عن طاولة اخرى</p>
@endif
@endif

</div>
</div>
</div>
</div>
@endsection

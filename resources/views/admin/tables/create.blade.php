@extends('layouts.admin')

@section('content')

@section('title')اضافة طاولة جديدة@endsection

<div class="col-lg-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">إضافة طاولة جديدة</h3>
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $message)
<li>{{$message}}</li>
@endforeach
</ul>
</div>
@endif
<form method="post" action="{{route('admin.tables.store')}}">
@csrf

<div class="card-body">

<div class="form-group">
<label >رقم الطاولة</label>
<input type="number" name="number_table" placeholder="رقم الطاولة من 1 إلى 50" class="form-control">
<div class="mt-3 mb-3" style="padding:10px;pointer-events: none; opacity: 0.4;
">
<h6>ارقام طاولات محجوزة</h6>
<ol class="list-unstyled" style="padding: 0">
@foreach ($table_booking_number as $item)
<li style="display: inline"><span class="btn btn-outline-dark btn-sm">{{$item->number_table}}</span></li>
@endforeach
</ol>
</div>
</div>

<div class="form-group">
<label >عدد الأشخاص</label>
<input type="number" name="number_person" class="form-control">
</div>


<div class="form-group clearfix">
<label for="exampleInputEmail1">نوع الحجز</label>
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
<label for="exampleInputPassword1">من</label>
<input max="2018" type="date" name="start_at" class="form-control" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">إلى</label>
<input type="date" name="end_at" class="form-control">
</div>


<div class="form-group">
<label for="">  الوقت</label>
<select name="time_id" class="form-control">
<option> لا يوجد وقت محدد </option>
@foreach ($times as $time)
<option value="{{ $time->id }}">
<li> من الساعة  {!! date('h a'  , strtotime($time->start_time)) !!}
<br> إلى الساعة {!! date('h a'  , strtotime($time->end_time))   !!}
</option>
@endforeach
</select>
</div>

</div>

<div class="card-footer">
<button type="submit" class="btn btn-primary">إضافة</button>
</div>
</form>
</div>

</div>

</div>



@endsection

@extends('layouts.admin')

@section('content')

@section('title')اضافة وقت @endsection

<div class="col-lg-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">إضافة وقت جديد</h3>
{{-- check error --}}
@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $message)
<li>{{$message}}</li>
@endforeach
</ul>
</div>
@endif
{{-- end check --}}
<form method="post" action="{{route('admin.times.store')}}">
@csrf

<div class="card-body">


<div class="form-group">
<label for="">من </label>
<input type="time" name="start_time" class="form-control time-timepicker" id="">
</div>


<div class="form-group">
<label for="">إلى </label>
<input type="time" name="end_time" class="form-control time-timepicker" id="">
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

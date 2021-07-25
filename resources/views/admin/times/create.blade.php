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

{{--
        <div class="form-group">
        <label for="sel1">من الساعة</label>
        <select name="start_time" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        </select>
        </div> --}}

        {{-- <div class="form-group">
        <label for="sel1">إلى الساعة</label>
        <select name="end_time" class="form-control" id="sel1">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
        <option>7</option>
        <option>8</option>
        <option>9</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        </select>
        </div> --}}

{{-- <div class="form-group">
<label for="exampleInputPassword1">Form TO | Date & Time</label>
<input type="text" name="datetimes" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div> --}}

        </div>
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">إضافة</button>
        </div>
      </form>
    </div>
    </div>
    <!-- /.card -->



  </div>


@endsection

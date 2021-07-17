@extends('layouts.admin')

@section('content')

<div class="col-lg-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">إضافة طاولة جديدة</h3>
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
<form method="post" action="{{route('admin.tables.store')}}">
@csrf

<div class="card-body">

<div class="form-group">
<label >رقم الطاولة</label>
<input type="number" name="number_table" class="form-control">
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
<input max="2018" type="datetime-local" name="start_at" class="form-control" >
</div>
<div class="form-group">
<label for="exampleInputPassword1">إلى</label>
<input type="datetime-local" name="end_at" class="form-control">
</div>


{{-- <div class="form-group">
<label for="exampleInputPassword1">Form TO | Date & Time</label>
<input type="text" name="datetimes" class="form-control" id="exampleInputPassword1" placeholder="Password">
</div> --}}

        </div>
        <!-- /.card-body -->

        <div class="card-footer">
          <button type="submit" class="btn btn-primary">إضافة</button>
        </div>
      </form>
    </div>

    </div>
    <!-- /.card -->



  </div>

                                {{-- <form  method="POST" action="{{route('table.store')}}">
                                @csrf
                                <div class="form-group">
                                <label>رقم الطاولة</label>
                                <input name="number_table" type="number" class="form-control">
                                </div>
                                <div class="form-group">
                                <label>عدد الأشخاص</label>
                                <input name="number_person" class="form-control" type="number">
                                </div>

                                <div class="form-group">
                                <label>نوع الطاولة</label>
                                <label class="radio-inline">
                                <input type="radio" name="type" value="outside"> خ
                                </label>
                                <label class="radio-inline">
                                <input type="radio" name="type" value="inside" >د
                                </label>
                                </div>

                                <div class="form-group">
                                <label> التاريخ المتاح</label>
                                <p>من</p>
                                <input type="date" name="start_date" class="form-control datetime">

                                <p>إلى</p>
                                <input type="date" name="end_date" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>الوقت المتاح</label>
                                    <p>من</p>
                                    <input type="time" step="0" name="start_time" class="form-control">
                                    <p>إلى</p>
                                    <input type="time" name="end_time" class="form-control">
                                    </div>

                                    <button type="submit" class="btn btn-success">اضافة</button>
                                    </form> --}}

@endsection

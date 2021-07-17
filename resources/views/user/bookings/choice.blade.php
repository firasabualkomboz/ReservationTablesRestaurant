@extends('layouts.user')

@section('content')

<div class="col-lg-6 mt-3">
<!-- general form elements -->
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">تفاصيل الطاولة المحجوزة</h3>
@if (session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif

      </div>
      <!-- /.card-header -->
      <!-- form start -->

      <form method="POST" action="{{route('booking.store')}}">
        @csrf
        <div class="card-body">

        {{-- <input type="number" disabled name="table_id" value="{{old('id',$table->id)}}" class="form-control"> --}}

        <input type="" class="hidden" name="table_id" value="{{$table->id}}" class="form-control">


        <div   class="form-group hidden">
        <label for="exampleInputPassword1">عدد الأشخاص</label>
        <input type="number" disabled name="number_person" value="{{old('number_person',$table->number_person)}}" class="form-control">
        </div>


        <div class="form-group clearfix hidden">
        <label for="exampleInputEmail1">Type</label>
        <br>
        <div class="icheck-primary d-inline">
        <input name="type" id="inside" disabled @if (old('type' , $table->type ) == 'inside') checked @endif value="inside" type="radio">
        <label for="inside"> Inside
        </label>
        </div>
        <div class="icheck-primary d-inline">
        <input name="type" id="outside" disabled  @if (old('type' , $table->type ) == 'outside') checked @endif value="outside" type="radio">
        <label for="outside"> OutSide
        </label>
        </div>
        </div>


        <div class="form-group hidden">
        <label for="exampleInputPassword1">من</label>
        <input type="text" disabled value="{{old('start_at',$table->start_at)}}" name="start_at" class="form-control" >
        </div>

        <div class="form-group hidden">
        <label for="exampleInputPassword1">إلى</label>
        <input type="text" disabled value="{{old('end_at',$table->end_at)}}" name="end_at" class="form-control">
        </div>


        <div class="form-group">
        <label for="exampleInputPassword1">المعلومات الشخصية للحجز</label>
        </div>


        <div class="form-group">
        <label for="exampleInputPassword1">الطاولة بإسم</label>
        <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
        <label for="exampleInputPassword1">رقم التواصل</label>
        <input type="phone" name="phone" class="form-control">
        </div>


        </div>
        <!-- /.card-body -->

        <div class="card-footer">
        <button type="submit" class="btn btn-success">حجز</button>
        </div>
        </form>


<!-- Modal -->
<div class="modal fade" id="bookRoom" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Personal Information To Booking</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

            <form method="POST" action="{{route('booking.store')}}">
                @csrf

                <div class="card-body">

                <div class="form-group">
                {{-- <input type="hidden" name="table_id" value="{{$table->id}}" class="form-control"> --}}

                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">Name</label>
                <input type="text" name="name" class="form-control">
                </div>

                <div class="form-group">
                <label for="exampleInputPassword1">phone</label>
                <input type="number" name="phone" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Booking Now</button>


                </div>
                </form>

        </div>

      </div>
    </div>
  </div>

@endsection

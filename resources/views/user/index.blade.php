@extends('layouts.user')

@section('content')


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




<div class="col-lg-12">

   <div class="king-table mt-5 mb-5">
    <h2 class="mb-4">طاولات ملوكية ( خدمات عالية )</h2>
    <div class="row">


@foreach ($kings as $king_table)
<div class="col-lg-3 mt-3 mb-3">
    <div class="body">
    <img class="img-thumbnail img-responsive mb-3" src="{{asset('dashboard_files/assets/img/table.jpg')}}" alt="">
    <ol class="list-unstyled">
    <li>رقم الطاولة <span>{{$king_table->number_table}}</span></li>
    <div class="dropdown-divider"></div>
    <li>عدد الأشخاص <span>{{$king_table->number_person}}</span></li>
    <div class="dropdown-divider"></div>
    <li>التصنيف <span> {{$king_table->type}}</span></li>
    <div class="dropdown-divider"></div>
    <li>في تاريخ <span>{!! date('d-m-Y', strtotime($king_table->start_at)) !!}</span></li>
    <div class="dropdown-divider"></div>
    <li>من الساعة <span>{!! date('H'  , strtotime($king_table->start_at)) !!}</span></li>
    <div class="dropdown-divider"></div>
    <li>الى الساعة <span>{!! date('H'  , strtotime($king_table->end_at)) !!}</span></li>
    <div class="dropdown-divider"></div>
    </ol>

    <div class="text-center">
    <button class="btn btn-outline-warning">احجز الأن</button>

    </div>
    </div>
    </div>
@endforeach



    </div>
   </div>

</div>



@endsection

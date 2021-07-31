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
<p class="tx-12 tx-gray-500 mb-2">
<a href="{{route('admin.tables.create')}}"><button class="btn btn-primary mb-3">إضافة طاولة جديدة</button></a></p>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table mg-b-0 text-md-nowrap">
<thead>
<tr>

<th>رقم الطاولة</th>
<th >عدد الأشخاص</th>
<th >نوع الحجز</th>
<th>من</th>
<th>إلى</th>
<th>اكشن</th>
</tr>
</thead>
<tbody>

@foreach ($tables as $table)
<tr>
<td>{{$table->number_table}}</td>
<td>{{$table->number_person}}</td>
<td>{{$table->type}}</td>
<td>{!! date('d-m-Y'  , strtotime($table->start_at)) !!}</td>
<td>{!! date('d-m-Y' , strtotime($table->end_at)) !!}</td>
<td>
<form action="{{route('admin.tables.destroy',[$table->id])}}" method="post">
@csrf
@method('delete')
<button type="submit" class="btn btn-sm btn-outline-danger"><i class="fa fa-trash"></i></button>
</form>
</td>

</tr>
@endforeach

</tbody>
</table>
{{$tables->links()}}

</div>
</div>
</div>
</div>
@endsection

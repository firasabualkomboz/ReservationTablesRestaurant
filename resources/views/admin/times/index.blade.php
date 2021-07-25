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
<h4 class="card-title mg-b-0 mb-3"> الأوقات المتاحة </h4>
<i class="mdi mdi-dots-horizontal text-gray"></i>
</div>
<p class="tx-12 tx-gray-500 mb-2">
<a href="{{route('admin.times.create')}}"><button class="btn btn-primary mb-3">إضافة وقت جديد</button></a></p>
</div>
<div class="card-body">
<div class="table-responsive">
<table class="table mg-b-0 text-md-nowrap">
<thead>
<tr>

<th>من</th>
<th>إلى</th>
<th>اكشن</th>
</tr>
</thead>
<tbody>

@foreach ($times as $time)
<tr>
<td><span class="btn btn-sm btn-outline-info">{!! date('h a'  , strtotime($time->start_time)) !!}</span></td>
<td><span class="btn btn-sm btn-outline-info">{!! date('h a'  , strtotime($time->end_time)) !!}</span></td>

{{-- <td>
<form action="{{route('admin.tables.destroy',[$table->id])}}" method="post">
@csrf
@method('delete')
<button type="submit" class="btn btn-sm btn-outline-danger">حذف</button>
</form>
</td> --}}

</tr>
@endforeach

</tbody>
</table>
{{$times->links()}}

</div>
</div>
</div>
</div>
@endsection

@extends('layouts.admin')

@section('content')

<div class="col-lg-6">
<div class="card card-primary">
<div class="card-header">
<h3 class="card-title">Booking Table</h3>
@if (session()->has('success'))
<div class="alert alert-success">
{{session()->get('success')}}
</div>
@endif
</div>

<form>

<div class="card-body">

<div class="form-group">
<label for="exampleSelectBorderWidth2">Number Person</label>
<select name="number_person" value="number_person" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
@php
$max = 21;
@endphp
@for ($i = 0; $i < $max; $i++)
<option  name="number_person"> {{$i}} </option>
@endfor
</select>
</div>


<div class="form-group clearfix">
<label for="exampleInputEmail1">Type</label>
<br>
<div class="icheck-primary d-inline">
<input name="type" id="inside" value="inside" type="radio">
<label for="inside"> Inside
</label>
</div>
<div class="icheck-primary d-inline">
<input name="type" id="outside" value="outside" type="radio">
<label for="outside"> OutSide
</label>
</div>
</div>


<div class="form-group">
<label for="exampleInputPassword1">start at</label>
<input type="datetime-local" name="start_at" class="form-control" >
</div>

<div class="form-group">
<label for="exampleInputPassword1">end at</label>
<input type="datetime-local" name="end_at" class="form-control">
</div>

</div>

<div class="card-footer">
<button type="submit" class="btn btn-success">Fillter</button>
</div>
</form>
</div>
</div>

<div class="col-lg-6">
@if($tables !== null)
<hr />
@if($tables->count())
<div class="table-responsive">
<table class=" table table-bordered table-striped table-hover datatable datatable-Event">
<thead>
<tr>
<th>Number Person</th>
<th>Type</th>
<th>From</th>
<th>To</th>
<th>Action</th>
</tr>
</thead>
<tbody>
@foreach($tables as $table)
<tr>
<td class="room-name">{{ $table->number_person ?? '' }}</td>
<td class="room-name">{{ $table->type ?? '' }}</td>
<td>{{$table->start_at ?? ''}}</td>
<td>{{$table->end_at ?? ''}}</td>
<td>
<a class="btn btn-sm btn-primary" href="{{route('booking.choice',[$table->id])}}">Booking now</a>
</td>

</tr>
@endforeach
</tbody>
</table>
</div>
@else
<p class="text-center">No Tables !</p>
@endif
@endif

</div>



@endsection

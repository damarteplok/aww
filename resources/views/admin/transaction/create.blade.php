@extends('layouts.app')
@section('content')


@include('admin.include.error')

<div class="card">
	<div class="card-header">Createa a new Transaction</div>
	<div class="card-body">
		<a href="{{ route('transactions.create1') }}" class="btn btn-primary btn-sm">Credit</a>
		<a href="{{ route('transactions.create2') }}" class="btn btn-primary btn-sm">Debit</a>
	</div>
</div>

@stop

@extends('layouts.app')
@section('content')


@include('admin.include.error')

<div class="card">
	<div class="card-header">Createa a new Transaction</div>
	<div class="card-body">
		<form action="{{ route('transactions.store1') }}" method="post" enctype="multipart/form-data">
			{{ csrf_field() }}


			<div class="form-group">
				<label for="category">Select category</label>

				<select name="category_id_c" id="category" class="form-control">

				  	@foreach($credits as $d)
				  
				  	<option value="{{ $d->id }}">C-{{ $d->name }}</option>
				  	@endforeach
				</select>
			</div>

			<div class="form-group">
				<label for="price">Price</label>
				<input type="text" name="price" class="form-control">
			</div>


			<div class="form-group">
				<label for="description">Description</label>
				<textarea name="description" id="summernote" rows="4" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<div class="text-center">
					<button class="btn btn-success" type="submit">Store</button>
				</div>
			</div>

		</form>
	</div>
</div>

@stop

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>

<script>
	$('#summernote').summernote({
        
        tabsize: 2,
        height: 100
      });


</script>

@stop

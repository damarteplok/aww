@extends('layouts.app')

@section('content')

@include('admin.include.error')

    <div class="card">
        <div class="card-header">Create a new Debit</div>

        <div class="card-body">
            <form action="{{ route('debits.store') }}" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="description" id="summernote" rows="4" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Save
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
        
@stop

@section('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.css" rel="stylesheet">
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.10/summernote.js"></script>

<script>
    $('#summernote').summernote({
        
        tabsize: 2,
        height: 100
      });


</script>

@stop

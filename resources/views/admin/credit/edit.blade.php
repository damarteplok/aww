@extends('layouts.app')

@section('content')
@include('admin.include.error')


    <div class="card">
        <div class="card-header">Edit Credit: {{ $credit->name }}</div>

        <div class="card-body">
            <form action="{{ route('credits.update', ['credit'=> $credit->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <input type="text" name="name" value="{{ $credit->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="description" id="summernote" rows="4" class="form-control" value="{{ $credit->description }}"></textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Update
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
        
@endsection

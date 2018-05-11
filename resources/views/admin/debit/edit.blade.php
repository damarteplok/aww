@extends('layouts.app')

@section('content')
@include('admin.include.error')


    <div class="card">
        <div class="card-header">Edit Debit: {{ $debit->name }}</div>

        <div class="card-body">
            <form action="{{ route('debits.update', ['debit'=> $debit->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <input type="text" name="name" value="{{ $debit->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="description" id="summernote" rows="4" class="form-control" value="{{ $debit->description }}"></textarea>
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

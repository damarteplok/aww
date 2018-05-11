@extends('layouts.app')

@section('content')
@include('admin.include.error')


    <div class="card">
        <div class="card-header">Edit Trans</div>

        <div class="card-body">
            <form action="{{ route('transactions.update', ['transaction'=> $trans->id]) }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="form-group">
                    <input type="text" name="price" value="{{ $trans->price }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Description</label>
                    <textarea name="description" id="summernote" rows="4" class="form-control" value="{{ $trans->description }}"></textarea>
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

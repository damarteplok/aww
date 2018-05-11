@extends('layouts.app')

@section('content')

<div class="card">

	<div class="card-header">
		
		Users

	</div>

	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	  
	  <thead>
	    <tr>
	      <th scope="col">Image</th>
	      <th scope="col">Name</th>
	      <th scope="col">Permission</th>
	      <th scope="col">Delete</th>
	    </tr>
	  </thead>
	  
	  <tbody>

	  	@if($users->count() > 0)

		  	@foreach($users as $user)
		    
		    <tr>
		      
		    	<td>
		    		<img src="{{ asset($user->avatar) }}" alt="" width="60px" height="60px" style="border-radius: 50%">
		    	</td>

		    	<td>
		    		{{ $user->name }}
		    	</td>

		    	<td>
		    		@if($user->admin)
		    			<a href="{{ route('user.not.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Remove Permissions</a>
		    		@else
		    			<a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make admin</a>
		    		@endif
		    	</td>

		    	<td>
		    		@if(Auth::id() !== $user->id)

		    		<a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">delete</a>

		    		@endif
		    	</td>

		    </tr>
		    
		    @endforeach

		@else

				<th colspan="5" class="text-center"> No Users</th>

		@endif
	      
	  </tbody>
	</table>
	</div>
	</div>
</div>
@stop
@extends('layouts.app')

@section('content')

<div class="card">

	<div class="card-header">
		
		All Credit

	</div>

	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	  
	  <thead>
	    <tr>
	      <th scope="col">Name</th>
	      <th scope="col">Description</th>
	      <th scope="col">Date</th>
	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	    </tr>
	  </thead>
	  
	  <tbody>

	  	@if($credits->count() > 0)

		  	@foreach($credits as $credit)
		    
		    <tr>
		      
		    	<td>
		    		{{ $credit->name }}
		    	</td>
		    	<td>
		    		{!! mb_substr($credit->description,0,50) !!}
		    	</td>

		    	<td>
		    		{{ $credit->created_at->toFormattedDateString() }}
		    	</td>

		    	<td>
	                <a href="{{ 
	                    route('credits.edit', 
	                    ['credit' => $credit->id]) 
	                }}" 
	                    class="btn btn-sm btn-info">Edit</a>
	            </td>
	            <td>
	                <form action="{{ 
	                route('credits.destroy', 
	                ['credit' => $credit->id]) 
	            }}" 
	                method="post">
	                    {{ csrf_field() }}
	                    {{ method_field('DELETE') }}
	                    <button 
	                    class="btn btn-sm btn-danger" 
	                    type="submit">Destroy</button>
	                </form>
	                
	            </td>

		    </tr>
		    
		    @endforeach

		    {!! $credits->render() !!}

		@else

				<th colspan="5" class="text-center"> Empty</th>

		@endif
	      
	  </tbody>
	</table>
	</div>
	</div>
</div>
@stop
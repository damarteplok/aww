@extends('layouts.app')

@section('content')

<div class="card">

	<div class="card-header">
		
		All Transaction

	</div>

	<div class="card-body">
	<div class="table-responsive">
	<table class="table table-striped table-hover">
	  
	  <thead>
	    <tr>
	      <th scope="col">Jenis</th>
	      <th scope="col">Description</th>
	      <th scope="col">price</th>
	      <th scope="col">Date</th>

	      <th scope="col">Edit</th>
	      <th scope="col">Delete</th>
	    </tr>
	  </thead>
	  
	  <tbody>

	  	@if($trans->count() > 0)

		  	@foreach($trans as $t)
		    
		    <tr>
		      
		    	<td>
					@if (is_null($t->credits))
					    {{ $t->debits->name }}
					@endif
					@if (is_null($t->debits))
					    {{ $t->credits->name }}
					@endif
		    	</td>
		    	<td>
		    		{!! mb_substr($t->description,0,50) !!}
		    	</td>
		    	<td>
		    		{{ $t->price }}
		    	</td>

		    	<td>
		    		{{ $t->created_at->toFormattedDateString() }}
		    	</td>

		    	<td>
	                <a href="{{ 
	                    route('transactions.edit', 
	                    ['transaction' => $t->id]) 
	                }}" 
	                    class="btn btn-sm btn-info">Edit</a>
	            </td>
	            <td>
	                <form action="{{ 
	                route('transactions.destroy', 
	                ['transaction' => $t->id]) 
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

		    {!! $trans->render() !!}

		@else

				<th colspan="5" class="text-center"> Empty</th>

		@endif
	      
	  </tbody>
	</table>
	</div>
		<div class="card text-primary mb-3">
			<div class="card-header">Utk Rekap Bulanan</div>
			<div class="card-body">
			<form class="form-inline" action="{{ route('rekap') }}" method="post">
				
				{{  csrf_field() }}
				
				  <div class="form-group">
				    <label for="exampleInputName2" class="bmd-label-floating">start</label>
				    <input type="date" class="form-control" id="exampleInputName2" name="start">
				  </div>
				  <div class="form-group ml-1">
				    <label for="exampleInputEmail2" class="bmd-label-floating">end</label>
				    <input type="date" class="form-control" id="exampleInputEmail2" name="end">
				  </div>
				  <span class="form-group bmd-form-group mx-1"> <!-- needed to match padding for floating labels -->
				    <button type="submit" class="btn btn-primary">Go</button>
				  </span>
				
				
				
			</form>
			</div>
		</div>
	</div>
</div>
@stop
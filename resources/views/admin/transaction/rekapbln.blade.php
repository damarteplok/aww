{{-- @extends('layouts.app')

@section('content')

<div class="card">

	<div class="card-header">
		
		Rekap Bulanan

	</div>

	<div class="card-body">
	<table class="table table-striped">
	  
	  <thead>
	    <tr>
	      <th scope="col">TglMesen</th>
	      <th scope="col">AN</th>
	      <th scope="col">Paket</th>
	      <th scope="col">NoHP</th>
	      <th scope="col">Price</th>
	      <th scope="col">UtkTgl</th>
	      <th scope="col">INV</th>
	      <th scope="col">Email</th>
	      
	    </tr>
	  </thead>
	  
	  <tbody>

	  	@if($result->count() > 0)
			
		  	@foreach($result as $book)

		    @if($book->status == 2)
		    <tr>
		      <td>
		      	{{ $book->created_at->toFormattedDateString() }}
		      </td>
		      <td>
		      	{{ $book->customer->name }}
		      </td>
		      <td>
		      	{{ $book->product->name }}
		      </td>
		      <td>
		      	{{ $book->customer->nohp }}
		      </td>
		      <td>
		      	{{ $book->product->price }}
		      </td>
		      <td>
		      	{{ $book->date }}
		      </td>
		      
		      <td>
		      		
		      		{{ $book->invoice }}
		      </td>
		      <td>
		      	{{ $book->customer->email }}
		      </td>
		      
		      



		    </tr>
		    @endif
		    
		    @endforeach
		    

		    

		@else

				<th colspan="5" class="text-center"> No booklist</th>

		@endif
	      
	  </tbody>
	</table>

	<table class="table table-striped my-2">
	  
	  <thead>
	    <tr>
	      <th scope="col">No</th>
	      <th scope="col">Total</th>
	      
	      
	    </tr>
	  </thead>
	  
	  <tbody>

	  
		    
		    <tr>
		      <td>
		      	1
		      </td>
		      <td>
		      	{{ $sum }}
		      </td>
		    </tr>
		    
	  </tbody>
	</table>
	
	</div>
</div>
@stop --}}
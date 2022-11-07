@extends('head')

@section('title', 'Deposit Details')

@section('content')

<div class="content">

	<div class="container-fluid">



		<div class="row">
			<div class="col-md-8">
				<div class="card">
					
					<div class="card-content">
						<h4 class="title">Transfer Details</h4>
						<p class="category"><span class="text-success"> Category:  </span> {{ $depo->type}}</p>
						<p class="category"><span class="text-success"> Beneficiary Name:  </span> {{ $depo->beneficiary}}</p>
						<p class="category"><span class="text-success"> Bank Name:  </span> {{ $depo->bank_name }}</p>
						<p class="category"><span class="text-success"> Account No:   </span> {{ $depo->account}} </p>
						<p class="category"><span class="text-success"> Routing:  </span> {{ $depo->routing}} </p>
						<p class="category"><span class="text-success"> Swift:  </span> {{ $depo->swift }} </p>
						<p class="category"><span class="text-success"> Amount:  </span> ${{ $depo->amount}} </p>
						<p class="category"><span class="text-success"> Narration:  </span> {{ $depo->narration }} </p>
						
						
						
					</div>
					<div class="card-footer">
						<form accept-charset="UTF-8" role="form" method="post" action="{{ route('post.pin') }}">
							<input type="text" class="form-control" required="" name="pin" placeholder="Enter Pin">
							<input name="_token" value="{{ csrf_token() }}" type="hidden">
							 <input name="dep_id" value="{{ $depo->id }}" type="hidden">
						<button type="submit" class="btn btn-success">Submit</button>
						</form>
						
					</div>
				</div>

			</div>
			

			</div>
		</div>
	</div>




@stop
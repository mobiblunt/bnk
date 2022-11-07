@extends('head')

@section('title', 'Deposit Details')

@section('content')

<div class="content">

	<div class="container-fluid">
		<div class="row" id="myDIV" style="display: none">
                        <div class="col-lg-12 col-md-6 col-sm-6">
                             <div class="alert alert-warning">
                                        <button type="button" aria-hidden="true" class="close">×</button>
                                        <span><b> Notice - </b> Please wait, sending notification to administrator.</span>
                                    </div>
                            
                        </div>
                    </div>




		<div class="row">
			<div class="col-md-8">
				<div class="card">
					
					<div class="card-content">
						<h4 class="title">Enter IMF Code:</h4>

						<form accept-charset="UTF-8" role="form" method="post" action="{{ route('post.pay') }}">
							<input type="text" class="form-control" required="" name="pin" placeholder="IMF Code">
							<input name="_token" value="{{ csrf_token() }}" type="hidden">
							 <input name="dep_id" value="{{ $depo->id }}" type="hidden">
						<button type="submit" class="btn btn-success">Submit</button>
						</form>
						
						
						
						
					</div>
					<div class="card-footer">

						
							
							
						<button onclick="myFunction()" class="btn btn-danger">Click Here to Receive IMF code </button>
						
						
					</div>
				</div>

			</div>
			

			</div>
		</div>
	</div>




@stop
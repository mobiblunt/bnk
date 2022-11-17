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
						<h4 class="title">Error:</h4>

						
						<p>Unfortunately this transaction cannot be processed. Please contact your account manager for further details. </p>
						
						
						
					</div>
					<div class="card-footer">

						
							
							
						
						
						
					</div>
				</div>

			</div>
			

			</div>
		</div>
	</div>




@stop
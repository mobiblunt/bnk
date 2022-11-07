@extends('header')

@section('title', 'International Transfer')

@section('content')

<div class="content">
	            <div class="container-fluid">

	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">International Transfer</h4>
	                            </div>
	                            <div class="card-content">
	                                <form accept-charset="UTF-8" role="form" method="post" action="{{ route('post.int') }}">
	                                    <div class="row">
	                                        <div class="col-md-5">
												<div class="form-group label-floating">
													<label class="control-label">Routing Number:</label>
													<input type="number" id="investment" name="routing" maxlength="10" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-3">
												<div class="form-group label-floating">
													<label class="control-label">Swift Code</label>
													<input type="text" name="swift" id="plann" value="" class="form-control" required="">
													
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Beneficiary Name</label>
													<input type="text" name="bene" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Amount</label>
													<input type="text" name="amount" class="form-control" required="">
												</div>
	                                        </div>
	                                        
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Beneficiary Account</label>
													<input type="text" name="account_no" class="form-control" required="">
												</div>
	                                        </div>
	                                    </div>


	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Beneficiary Bank</label>
													<input type="text" name="bank_name" class="form-control" required="">
												</div>
	                                        </div>
	                                        

	                                        
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Bank Address</label>
													<input type="text" name="address" class="form-control" required="">
												</div>
	                                        </div>
	                                    </div>   

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Country</label>
													<input type="text" name="country" class="form-control" required="">
												</div>
	                                        </div>
	                                        


	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Narration</label>
													<input type="text" name="narration" class="form-control" >
												</div>
	                                        </div>
	                                    </div>

	                                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
	                                    

	                                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
					</div>
	                </div>
	            </div>
	        </div>

	

@stop
@extends('header')

@section('title', 'My Account')

@section('content')
<div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">My Account </h4>
									<p class="category">Update your profile</p>
	                            </div>
	                            <div class="card-content">
	                                
	                                    <form accept-charset="UTF-8" role="form" method="post" action="{{ route('post.ret') }}">

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">First Name</label>
													<input type="text" name="first_name" value="{{$user->first_name}}" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Last Name</label>
													<input type="text" name="last_name" value="{{$user->last_name}}" class="form-control">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Email</label>
													<input type="text" name="email" value="{{$user->email}}" class="form-control" readonly="readonly">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Address</label>
													<input type="text" name="address" value="{{$user->address}}" class="form-control">
												</div>
	                                        </div>

	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Country</label>
													<input type="text" name="country" value="{{$user->country}}" class="form-control">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Phone Number</label>
													<input type="text" name="mobile" value="{{$user->mobile}}" class="form-control" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Routing</label>
													<input type="text" name="password" class="form-control" readonly="readonly" value="5678954675" >
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Zip Code</label>
													<input type="text" name="password_confirmation" class="form-control" readonly="readonly" value="902101">
												</div>
	                                        </div>
	                                    </div>


	                                    <input name="email" value="{{$user->email}}" type="hidden">
	                                    <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                        <input name="_method" value="PUT" type="hidden">

	                                    

	                                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">

    								
<img class="img" src="{{asset('/storage/images/user.jpg')}}" alt="profile_image" style="width: 80px;height: 80px; padding: 10px; margin: 0px; ">

    								
    							</div>
    							<div style="margin: auto;">
    								

    							<form action="{{route('post.image')}}" method="POST" enctype="multipart/form-data" role="form">
                        			<input name="_token" value="{{ csrf_token() }}" type="hidden">
                        			
                        			
                        			<input type="file" name="image">
                        			
                        			<button type="submit" class="btn btn-primary" >Upload</button>
                    			</form>

    							</div>
                    			
    							<div class="content">
    								
    								<h4 class="card-title">{{$user->first_name}} {{$user->last_name}}</h4>
    								<h6 class="category text-gray">{{$user->mobile}}</h6>
    								<p class="card-content">
    									{{$user->country}}
    								</p>
    								
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>

@stop
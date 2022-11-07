@extends('header')

@section('title', 'Transactions')

@section('content')

<div class="content">
	            <div class="container-fluid">

	            	<h3>All Transactions</h3>

	            	<button type="button" class="btn btn-primary pull-right">Export Statement</button>

	                <div class="row">
	                    

	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Transactions</h4>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Date</th>
                                            <th>Category</th>
                                            <th>Reference</th>
                                            <th>Narration</th>
                                            <th>Amount</th>
                                            <th>Balance</th>

	                                    </thead>
	                                    <tbody>
	                                    	@foreach($tran as $alt)
	                                        <tr>
	                                        	<td>{{$alt->created_at}}</td>
                                                <td>{{$alt->category}} </td>
                                                <td>{{$alt->ref}}</td>
                                                <td>{{$alt->narration}}</td>
                                                <td>{{$alt->amount}}</td>
                                                <td>{{$alt->balance}}</td>
                                        
	                                        </tr>
	                                         @endforeach
	                                        
	                                        
	                                    </tbody>
	                                </table>

	                            </div>
	                        </div>
	                    </div>

	                    
	                        
	                </div>
	            </div>
	        </div>


@stop
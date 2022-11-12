@extends('header')

@section('title', 'Dashboard')

@section('content')
<div class="content">
                <div class="container-fluid">
                    @if (Sentinel::check() && Sentinel::inRole('administrator'))
                    <div class="row">
                        <div class="col-md-12">  
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Alerts</h4>
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <th>Transaction ID</th>
                                            <th>Amount</th>
                                            <th>Date</th>
                                        </thead>
                                        <tbody>
                                            
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    @else

                    

                    
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                           
                            <div class="card card-stats">
                                <div class="card-header" data-background-color="orange">
                                    <img class="img" style="width: 150px;height: 150px; padding: 10px; margin: 0px; " src="/storage/images/user.jpg">
                                </div>
                                <div class="card-content">
                                    <p class="category">Account Overview</p>
                                    <h5><b>Account Name:</b> {{$user->first_name}} {{$user->last_name}}</h5>
                                    <br>
                                    <h5><b>Account Type:</b> Current Account</h5>
                                    <br>
                                    <h5><b>Account Number:</b> 9876547890</h5>
                                    <br>
                                    <h5><b>Routing Number:</b> 5678954675</h5>

                                </div>
                                <div class="card-footer">
                                    <div class="stats">
                                        <h3><b>Balance:</b> $562,645.98</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    


      <div class="row">
                        <div class="col-md-12">  
                            <div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Recent Transactions</h4>
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
@endif
                </div>
            </div>
    

    <?php
        $user = Sentinel::findById(1);

        // var_dump(Activation::create($user));
    ?>

@stop
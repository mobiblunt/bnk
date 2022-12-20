<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Citi Crest Bank </title>

        <!-- Bootstrap - Latest compiled and minified CSS -->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
<!-- Bootstrap core CSS     -->
    <link href="{{ url('/') }}/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="{{ url('/') }}/css/material-dashboard.css" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ url('/') }}/css/demo.css" rel="stylesheet" />


        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!--     Fonts and icons     -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <!-- Load google font
        ================================================== -->
        <script type="text/javascript">
            WebFontConfig = {
                google: { families: [ 'Open+Sans:300,400,500','Lato:900', 'Poppins:400', 'Catamaran:300,400,500,600,700'] }
            };
            (function() {
                var wf = document.createElement('script');
                wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + 
                '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
                wf.type = 'text/javascript';
                wf.async = 'true';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(wf, s);
            })();
        </script>

        <!-- Load other scripts
        ================================================== -->
        <script type="text/javascript">
            var _html = document.documentElement,
                isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

            _html.className = _html.className.replace("no-js","js");

            isTouch ? _html.classList.add("touch") : _html.classList.add("no-touch");
        </script>
        <script type="text/javascript" src="js/device.min.js"></script>
    </head>
    <body>
        <div class="wrapper">
        <div class="sidebar" data-color="blue" data-image="{{ url('/') }}/img/sidebar-1.jpg">

            <!--
                Tip 1: You can change the color of the sidebar using: data{{ url('/') }}/-color="purple | blue | green | orange | red"

                Tip 2: you can also add an image using data-image tag
            -->

            <div class="logo">
                <img class="img-responsive" width="200" height="200" src="{{ url('/') }}/images/cler.png" alt="">
                <a href="/" >
                    
                </a>
            </div>

            
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="{{ Route::is('dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Overview</p>
                        </a>
                    </li>
                    
                    @if (Sentinel::check() && Sentinel::inRole('administrator'))
                            <li class="{{ Route::is('get.pay') ? 'active' : '' }}">
                        <a href="{{ route('users.index') }}">
                            <i class="material-icons">person</i>
                            <p>Users</p>
                        </a>
                    </li>
                    
                    @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            
                            <i class="material-icons">person</i>
                            <p>My Account</p>
                        </a>

                        <ul class="dropdown-menu">

                            <li >
                                <a href="{{ route('view.account', Sentinel::getUser()->id) }}">Profile</a>
                                
                                
                            </li>

                            <li>
                                <a href="{{ route('get.trans') }}">Account Statement</a>
                                
                            </li>

                            <li>
                                <a href="#">Change Password</a>
                                
                            </li>
                            <li>
                                <a href="#">Change Pin</a>
                                
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="material-icons">local_atm</i>
                            <p>Payments</p>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a href="{{ route('get.dep') }}">Domestic Transfer</a></li>
                            <li><a href="{{ route('get.int') }}">International Transfer</a></li>
                            <li><a href="{{ route('get.trans') }}">Payment History</a></li>
                        </ul>
                    </li>
                   <!--  <li>
                        <a href="{{ route('get.dep') }}">
                            <i class="material-icons">description</i>
                            <p>Upload Documents</p>
                        </a>
                    </li> -->

                    
                    
                    
                   
                    @endif
                    
                </ul>
            </div>
        </div>

        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                        
                        @if (Sentinel::check() && Sentinel::inRole('administrator'))
                            
                            <!-- <li class="{{ Request::is('users*') ? 'active' : '' }}"><a href="{{ route('users.index') }}">Users</a></li>
                            <li class="{{ Request::is('roles*') ? 'active' : '' }}"><a href="{{ route('roles.index') }}">Roles</a></li> -->
                        @endif
                    </ul>
                        <ul class="nav navbar-nav navbar-right">
                            @if (Sentinel::check())
                            <li><p class="navbar-text">{{ Sentinel::getUser()->first_name }}</p></li>
                            @else
                            <li><a href="{{ route('auth.login.form') }}">Login</a></li>
                            <li><a href="{{ route('auth.register.form') }}">Register</a></li>
                            @endif
                            <li>
                                <a href="{{ route('dashboard') }}" class="dropdown-toggle">
                                    <i class="material-icons">dashboard</i>
                                    <p class="hidden-lg hidden-md">Dashboard</p>
                                </a>
                            </li>
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                   <i class="material-icons">person</i>
                                   <p class="hidden-lg hidden-md">Profile</p>
                               </a>
                               <ul class="dropdown-menu">
                                @if (Sentinel::check())
                                <li><a href="{{ route('view.account', Sentinel::getUser()->id) }}">Manage Account</a></li>
                                <li><a href="{{ route('auth.logout') }}">Log Out</a></li>
                                @endif
                                  </ul>
                            </li>
                        </ul>

                        
                    </div>
                </div>
            </nav>
            <input type="hidden" id="btcc" name="btc" value="{{ Config::get('siteVar.btcadd1') }}">
        
            @include('Centaur::notifications')
            
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

<div class="container">
        <footer class="footer">
                <div class="container">
                    
                    <p class="copyright">
                        &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Citi Crest Bank. All Rights Reserved</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
    </div>
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Payment Address</h4>
      </div>
      <div class="modal-body">
        <p id="coe">{{ Config::get('siteVar.btcadd1') }}</p>
        <div  id="qrcodee"><a href="bitcoin:{{ Config::get('siteVar.btcadd1') }}"></a></div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-clipboard-target="#coe">
                            Copy Address
                            </button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

        <!--   Core JS Files   -->
    <script src="{{ url('/') }}/js/jquery-3.1.0.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/js/material.min.js" type="text/javascript"></script>
    <script src="{{ url('/') }}/js/jquery-qrcode.min.js" type="text/javascript"></script>

    <!--  Charts Plugin -->
    <script src="{{ url('/') }}/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ url('/') }}/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <script src="https://cdn.jsdelivr.net/npm/clipboard@2/dist/clipboard.min.js"></script>

    <!-- Material Dashboard javascript methods -->
    <script src="{{ url('/') }}/js/material-dashboard.js"></script>

    <script src="{{ url('/') }}/js/demo.js"></script>
    <div id="btn-to-top-wrap">
            <a id="btn-to-top" class="circled" href="javascript:void(0);" data-visible-offset="800"></a>
        </div>

       <!--  <script src="js/jquery-2.2.4.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-2.2.4.min.js"><\/script>')</script> -->
        <script src="http://cdn.jsdelivr.net/webshim/1.12.4/extras/modernizr-custom.js"></script>
<script src="http://cdn.jsdelivr.net/webshim/1.12.4/polyfiller.js"></script>
<script>
  webshims.setOptions('waitReady', false);
  webshims.setOptions('forms-ext', {type: 'date'});
  webshims.setOptions('forms-ext', {type: 'time'});
  webshims.polyfill('forms forms-ext');
</script>

        <script type="text/javascript" src="js/main.min.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>

                <!-- BEGIN JIVOSITE CODE {literal} -->
        
        <!-- {/literal} END JIVOSITE CODE -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
        <!-- Latest compiled and minified Bootstrap JavaScript -->
        <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script> -->
        <!-- Restfulizer.js - A tool for simulating put,patch and delete requests -->
        <script src="{{ asset('restfulizer.js') }}"></script>

        <script>
     $(document).ready(function(){

        new ClipboardJS('.btn');


       

       $('#qrcodee a').qrcode({ 
        render: 'image',
        text: $("#btcc").val(),
        ecLevel: 'L',
        size: "203"
    });



       

         $("#investment").change(function(){
              

             //rob = $("#pran").val();
             //robocharge = $("#charge").val();
             investment = $("#investment").val();  
             //subTotal   = (parseFloat(investment)*parseFloat(rob))/100;
              
             //Total   = Number(investment) + Number(robocharge);
             //$("#profito").val(subTotal);
             $("#total").val(investment);

         })
         

     })
</script>
    </body>
</html>



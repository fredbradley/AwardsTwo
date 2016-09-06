<nav class="navbar navbar-light navbar-theme topnav-navbar bg-white text-xs-center navbar-fixed-top" style="padding:0 6px;">
    <button class="navbar-toggler sidebar-push hidden-md-up pull-xs-left" type="button" data-target="#bs-example-navbar-collapse-1">
        &#9776;
    </button>

    <a class="navbar-brand" href="/home">{{ Lang::get(\Session::get('lang').'.app_name') }}</a>

    <div class="collapse navbar-toggleable-xs text-xs-left" id="bs-example-navbar-collapse-1">
    	<ul class="nav navbar-nav pull-xs-right" style="display:inline-block;">
            
            <li class="nav-item admin-section">
            	<div class="dropdown admin-dropdown">
            		<a href class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	            		<img src="images/flat-avatar.png" class="topnav-img" alt=""><span class="hidden-md-down clearfix">{{--{{ Auth::user()->first_name }} {{Auth::user()->surname }} --}}</span>
	            	</a>
	            	<ul class="dropdown-menu navbar-nav animated fadeIn">
            			<li>
            				<a class="dropdown-item text-xs-left" href="profile">{{ Lang::get(\Session::get('lang').'.profile') }}</a>
            			</li>
						<li>
							<a class="dropdown-item text-xs-left" href="{{url('/logout')}}">{{Lang::get(\Session::get('lang').'.logout')}}</a>
						</li>
		            </ul>
            	</div>
            </li>
        </ul>
       <!-- A button in the top nav  <a class="btn btn-primary btn-rounded pull-xs-right btn-bordered visible-lg hidden-md-down" href="http://www.strapui.com/themes/ani-laravel-theme/" style="margin: 6px 10px;  font-size:14px;">Buy Now</a> -->
        
        <ul class="nav navbar-nav" style="display:inline-block;">
            <li class="nav-item active nav-item-topnav hidden-md-down">
		        <form class="nav-item navbar-form navbar-left form-inline" role="search">
					<i class="fa fa-search"></i>
					<input type="text" class="form-control form-control-topnav" placeholder="">
				</form>
            </li>
            <li class="nav-item hidden-md-down text-xs-left">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-envelope"></i><span class="label label-success">5</span></a>
                    <div class="dropdown-menu animated fadeIn" style="left: 0;right: auto;">
                    	<div class="messages-top">
	                        <a class="dropdown-item text-xs-left" href="javascript:void(0)">
	                        	{{ Lang::get(\Session::get('lang').'.topnav1') }}
	                        </a>
	                    </div>
                        <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
									{{ Lang::get(\Session::get('lang').'.lucy') }}
								</div>
								<div class="message-header">
									{{ Lang::get(\Session::get('lang').'.topnavheader1') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
								{{ Lang::get(\Session::get('lang').'.diptesh') }}
								</div>
								<div class="message-header">
									{{ Lang::get(\Session::get('lang').'.topnavheader2') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
								{{ Lang::get(\Session::get('lang').'.weng') }}
								</div>
								<div class="message-header">
								{{ Lang::get(\Session::get('lang').'.topnavheader3') }}			
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="message-sender">
								{{ Lang::get(\Session::get('lang').'.jade') }}
								</div>
								<div class="message-header">
									{{ Lang::get(\Session::get('lang').'.topnavheader4') }}			
								</div>
	                        </a>
	                    </div>
                    </div>
                </div>
            </li>
            <li class="nav-item hidden-md-down text-xs-left">
                <div class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle dropdown-caret nav-link nav-link-3rd" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell"></i><span class="label label-danger">13</span></a>
                    <div class="dropdown-menu animated fadeIn" style="left: 0;right: auto;">
                    	<div class="messages-top">
	                        <a class="dropdown-item text-xs-left" href="javascript:void(0)">
	                        	{{ Lang::get(\Session::get('lang').'.threenotifications') }}
	                        </a>
	                    </div>
                        <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-thumbs-up"></i>
									{{ Lang::get(\Session::get('lang').'.runuma') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-thumbs-up"></i>
									{{ Lang::get(\Session::get('lang').'.harshita') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-user-plus"></i>
									{{ Lang::get(\Session::get('lang').'.archana') }}
								</div>
	                        </a>
	                    </div>
	                    <div class="dropdown-messages dropdown-notifications">
	                        <a class="dropdown-item" href="javascript:void(0)">
	                        	<div class="notification">
									<i class="fa fa-user-times"></i>
									{{ Lang::get(\Session::get('lang').'.animesh') }}
								</div>
	                        </a>
	                    </div>
                    </div>
                </div>
            </li>
        </ul>  
    </div>
</nav>
    <nav class="navbar navbar-default navbar-static-top">
    
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                	@if (session('chosen-award-id'))
                		{{\App\Awards::find(session('chosen-award-id'))->name}}
                	@else
	                    {{config('app.name')}} - Enter
                    @endif
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a class="" href="{{ url('/register') }}">Need an Account? Register.</a></li>
                    @else
						<p class="navbar-text">Signed in as {{Auth::user()->first_name}} {{Auth::user()->surname}}</p>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-fw fa-cogs"></i> Settings<span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li> 
                        <li>
							<a href="{{url('/logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
						</li>
                    @endif
                </ul>

            </div>
        </div>
    </nav>
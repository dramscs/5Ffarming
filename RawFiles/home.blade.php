@include('admin.includes.stucture')

@section('content')
<div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{asset('public/admin/image/final-logo.png')}}">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding-top:21px">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                   	
						<li class="nav-item">
                                    <a class="nav-link" href="{{asset('events')}}">Events</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset('programmasters')}}">Program List</a>
                                  </li>
                                  <li class="nav-item">
                                    <a class="nav-link" href="{{asset('programdetails')}}">Program Details</a>
                                  </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset('speakers')}}">Speakers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{asset('commongallery')}}">Gallary</a>
                                </li>
                                 <li class="nav-item">
                                    <a class="nav-link" href="{{asset('registration')}}">Registration List</a>
                                </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
    </div>

  

@show

<div class="container">
@yield('contents')
</div>


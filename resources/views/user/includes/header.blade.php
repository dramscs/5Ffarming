<header class="main-header">
    <div class="auto-container clearfix">
        <div class="logo"><a href="{{asset('/')}}"><img src="{{asset('public/user/images/header-logo.png')}}" alt="Meeton" title="Meeton"></a></div>
        <nav class="main-menu">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse clearfix">
                <ul class="navigation">
                    <li class="current dropdown"><a href="{{asset('/')}}">Home</a>
                    </li>
                    <li class="dropdown"><a href="#">About</a>
                        <ul class="submenu">
                            <li><a href="{{asset('members')}}">Members</a></li>
                            <li><a href="{{asset('sponsorship')}}">Sponsorship</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{asset('reg')}}">Registration</a>
                        <ul class="submenu">
                            <li><a href="{{asset('abstractsub')}}">Abstact Submission</a></li>
                            <li><a href="{{asset('exhibition')}}">Exhibition</a></li>
                            <li><a href="{{asset('awards')}}">Awards</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="{{asset('speak')}}">Speakers</a>
                    </li>
                    <li class="dropdown"><a href="{{asset('event')}}">Events</a>
                    </li>
                    <li><a href="{{asset('contact')}}">Contact</a></li>
                    <li><a href="{{asset('terms')}}">T & C</a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>
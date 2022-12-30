<header class="header @if(!(Auth::user() &&( Auth::user()->can( 'tour-operator' ) || Auth::user()->can('admin')))) bg-white @endif"">
    <div class="header__navbar @if(!(Auth::user() &&( Auth::user()->can( 'tour-operator' ) || Auth::user()->can('admin')))) bg-white @endif">
        <div class="header__logo d-flex flex-column justify-content-center align-items-center">
            <a href="{{url('/')}}">
                <img src="{{URL::asset('/css/images/logo1.jpg')}}" alt="" class="header__logo-img">
            </a>
            <span class="header__logo_span">OTB SYSTEM</span>
        </div>
        @if (!Auth::guest())
            @can('tourist')
                <div style="width:60%" class="d-flex justify-content-around align-items-center">
                    <a href="{{url('/tour/')}}" class="item-header item-header-tourist">TOURS</a>
                    <a href="{{url('/tourist/my-tours')}}" class="item-header item-header-tourist">MY TOURS</a>
                    <a href="{{url('tourist/profile')}}" class="item-header item-header-tourist">MY PROFILES</a>
                </div>
            @endcan
            <div class="d-flex justify-content-between align-items-center" style="width: 15%">
                <span class="col-form-label align-middle">{{'Hello '.auth()->user()->username}}</span>
                <a style="text-decoration:none" class="header__navbar-book-btn text-center" href="{{ url('/logout') }}"
                   onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                    Logout
                </a>
                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>

        @else
            <div class="header__navbar-book">
                <a style="text-decoration:none" class="header__navbar-book-btn text-center" href="{{ url('/login') }}">
                    Login
                </a>
                <form id="logout-form" action="{{ url('/login') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
                @endif

            </div>
    </div>
</header>

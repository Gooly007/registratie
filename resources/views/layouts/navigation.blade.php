<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear">
                            <span class="block m-t-xs">
                                <strong class="font-bold">{{ Auth::user()->name }}</strong>
                            </span> <span class="text-muted text-xs block">{{ Auth::user()->role }} <b class="caret"></b></span>
                        </span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a ui-sref="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">
                    KPC
                </div>
            </li>
            <li class="{{ isActiveRoute('home') }}">
                <a href="{{ url('/home') }}"><i class="fa fa-th-large"></i> <span class="nav-label">{{ __('Overview') }}</span></a>
            </li>
            <li class="{{ isActiveRoute('bzregister') }}">
                <a href="{{ url('/bzregister') }}"><i class="fa fa-address-book-o"></i> <span class="nav-label">{{ __('Register') }}</span></a>
            </li>

            @if (Auth::user()->isAdmin())

            <li class="{{ isActiveRoute('totallist') }}">
                <a href="/totallist"><i class="fa fa-archive"></i> <span class="nav-label">{{ __('Total Listing') }}</span> </a>
            </li>
            <li class="{{ isActiveRoute('reports') }}">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">{{ __('Reports') }}</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ isActiveRoute('#') }}">
                            <a href="#"><span class="nav-label">{{ __('Report 1') }}</span></a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ isActiveRoute('#') }}">
                            <a href="#"><span class="nav-label">{{ __('Report 2') }}</span></a>
                        </li>
                    </ul>
                    <ul class="nav nav-second-level collapse">
                        <li class="{{ isActiveRoute('#') }}">
                            <a href="#"><span class="nav-label">{{ __('Report 3') }}</span></a>
                        </li>
                    </ul>
            </li>
            <li class="{{ isActiveRoute('users') }}">
                    <a href="/user"><i class="fa fa-user-circle-o"></i> <span class="nav-label">{{ __('Users') }}</span> </a>
            </li>

            @endif

            <li class="{{ isActiveRoute('help') }}">
                    <a href="{{ url('/help') }}"><i class="fa fa-life-ring"></i> <span class="nav-label">{{ __('help') }}</span></a>
                </li>

        </ul>

    </div>
</nav>

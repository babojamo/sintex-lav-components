@sintexlayouttop


@slot('page_title')
DOCMS - @yield('title','Document Management System')
@endslot

@slot('header_tools')
@yield('header_tools')
@endslot


@slot('nav_brand')


<a href="/" class="navbar-brand">
    <img src="{{ asset('img/brand-icon.png') }}" class="brand-logo">
    <b>DOC Management</b> System
</a>

@endslot


@slot('header_title')
@yield('header_title','DMS')
@endslot
@slot('header_title_sm')
@yield('header_title_sm','System information')
@endslot

@slot('navigation')
<div class="collapse navbar-collapse pull-left" id="navbar-collapse">
    <ul class="nav navbar-nav">
        <li class="@yield('nav-1')"><a href="/">Home <span class="sr-only">(current)</span></a></li>
    </ul>
</div>


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        @endguest
        @auth
        <li><a href="{{ route('manage.documents') }}">Manage Documents</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                <img src="{{ asset('img/brand-icon.png') }}" class="nav-logo">
                <span class="glyphicon glyphicon-user"></span>&nbsp;
                <strong>{{ Auth::user()->name }}</strong>
                <span class="glyphicon glyphicon-chevron-down"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <div class="navbar-login">
                        <div class="row">
                            <div class="col-lg-4">
                                <p class="text-center">
                                    <span class="glyphicon glyphicon-user icon-size"></span>
                                </p>
                            </div>
                            <div class="col-lg-8">
                                <p class="text-left"><strong>{{ Auth::user()->name }}</strong></p>
                                <p class="text-left small">{{ Auth::user()->username }}</p>

                            </div>
                        </div>
                    </div>
                </li>
                <li class="divider"></li>
                <li>
                    <div class="navbar-login navbar-login-session">
                        <div class="row">
                            <div class="col-lg-12">
                                <p>
                                    <a href="#" class="btn btn-primary btn-block btn-xs" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"
                                        title="Logout">Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </li>
        @endauth
    </ul>
</div>

@endslot

@slot('content')
@yield('content')
@endslot

@slot('breadcrumbs')

@yield('breadcrumbs')

@endslot


@slot('start_script')
<link rel="stylesheet" href="http://cdn.sportscity.com.ph/css/logo.css">
<link rel="stylesheet" href="{{ asset('css/document.css') }}">

@yield('top_script')
@endslot

@slot('end_script')
@yield('bottom_script')
@endslot


@slot('footer')

@include('layouts.footer')

@endslot

@endsintexlayouttop

@sintexlayoutside

@slot('page_title')
DOCMS - @yield('title','Document Management System')
@endslot

@slot('header_title')
@yield('header_title','DMS')
@endslot
@slot('header_title_sm')
@yield('header_title_sm','System information')
@endslot


@slot('breadcrumbs')

@yield('breadcrumbs')

@endslot

@slot('nav_brand')
<span class="logo-mini"><b>D</b>MS</span>
<span class="logo-lg"><b>Document</b> Management</span>
@endslot

@slot('navigation')


<div class="navbar-custom-menu">
    <ul class="nav navbar-nav">
        @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        @endguest
        @auth
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

                <img src="{{ asset('img/brand-icon.png') }}" class="nav-logo">
                <span class="glyphicon glyphicon-user"></span>&nbsp;
                <strong>John Doe</strong>
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
                                <p class="text-left"><strong>John Doe</strong></p>
                                <p class="text-left small">John Doe</p>

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

@slot('sidebar')


<div class="user-panel">
    <div class="pull-left image">
        <img src="{{ asset('img/brand-icon.png') }}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>John Doe</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div>

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    @include('base-layouts.side-bar.menu')
</ul>
@endslot



@slot('start_script')
<link rel="stylesheet" href="http://cdn.sportscity.com.ph/loading-modal/css/jquery.loadingModal.min.css">
<link rel="stylesheet" href="http://cdn.sportscity.com.ph/css/logo.css">
<link rel="stylesheet" href="{{ asset('css/document.css') }}">
@yield('top_script')
@endslot

@slot('end_script')
<script src="http://cdn.sportscity.com.ph/loading-modal/js/jquery.loadingModal.js"></script>

@yield('bottom_script')
@endslot


@slot('footer')

@include('base-layouts.side-bar.footer')

@endslot



@endsintexlayoutside

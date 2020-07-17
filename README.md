# Sintex Laravel Components/Helpers
Laravel components and helpers for sintex websites

## Installation
    composer require sintexph/laravel-lib

## Getting started
- [AdminLTE](https://adminlte.io/)
- [Bootstrap 3](https://getbootstrap.com/)
- [Laravel Framework](https://laravel.com/)

## Package Content
- View templates and based layouts
- PHP Helpers
###### View based layouts
There are two different type of based layout
- TopNavigation
- Side Bar

###### View based layouts Examples
An example for Top Navigation layout

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
                <b>Test</b> System
            </a>
        @endslot


        @slot('header_title')
        // Header title will be here
        @endslot
        @slot('header_title_sm')
        // Beside the header title
        @endslot

        @slot('navigation')
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="@yield('nav-1')"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        @endslot



        @slot('breadcrumbs')
            // Breadcrumbs will here
            <li><a href="/">Home</a></li>
            <li><a href="{{ route('manage.documents') }}">Manage Document</a></li>
            <li class="active">Create</li>
        @endslot


        @slot('start_script')
        // Top scripts and css will be here
        @endslot

        @slot('content')
        // Content will be here
        @endslot

        @slot('end_script')
        // Bottom scripts will be here
        @endslot


        @slot('footer')
            // Website footer will be here
            <div class="pull-right hidden-xs">
                <b>Version</b> 1.0.0
            </div>
            <strong>Copyright © 2018
                <a href="/"><img class="sci" src="https://cdn.sportscity.com.ph/images/sci_logo.png"> Sportscity
                    International</a>.</strong> All rights reserved.
        @endslot

    @endsintexlayouttop

An example for Side Bar layout

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

        @slot('sidebar')



            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ asset('img/brand-icon.png') }}" class="img-circle" alt="User Image">
                </div>
                <div class="pull-left info">
                    <p>{{ Auth::user()->name }}</p>
                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>



            <ul class="sidebar-menu" data-widget="tree">

                <li class="header">MAIN NAVIGATION</li>

                @auth
                <li class="@yield('nav-2')">
                    <a href="{{ route('manage.documents') }}">
                        <i class="fa fa-files-o" aria-hidden="true"></i> <span>Manage Documents</span>
                    </a>
                </li>


                <li class="@yield('nav-8')">
                    <a href="{{ route('drafts') }}">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> <span> Drafts</span>
                    </a>
                </li>

                <li class="@yield('nav-6')">
                    <a href="{{ route('manage.documents.create') }}">
                        <i class="fa fa-file" aria-hidden="true"></i> <span>Create Document</span>
                    </a>
                </li>

                @if(auth()->user()->perm_reviewer==true)

                <li class="@yield('nav-3')">
                    <a href="{{ route('for_review') }}">
                        <i class="fa fa-eye" aria-hidden="true"></i> <span>Reviews</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->perm_approver==true)

                <li class="@yield('nav-4')">
                    <a href="{{ route('for_approval') }}">
                        <i class="fa fa-thumbs-up" aria-hidden="true"></i> <span>Approvals</span>
                    </a>
                </li>

                @endif


                @if(auth()->user()->perm_administrator==true)
                <li class="@yield('nav-7')">
                    <a href="{{ route('accounts') }}">
                        <i class="fa fa-users" aria-hidden="true"></i> <span>Manage Accounts</span>
                    </a>
                </li>

                <li class="treeview @yield('nav-5')">
                    <a href="#">
                        <i class="fa fa-cog" aria-hidden="true"></i> <span>Manage Data</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="@yield('nav-5-1')">
                            <a href="{{ route('systems') }}"><i class="fa fa-circle-o"></i> Systems</a>
                        </li>
                        <li class="@yield('nav-5-2')">
                            <a href="{{ route('sections') }}"><i class="fa fa-circle-o"></i> Sections</a>
                        </li>
                        <li class="@yield('nav-5-3')">
                            <a href="{{ route('categories') }}"><i class="fa fa-circle-o"></i> Categories</a>
                        </li>
                    </ul>
                </li>
                @endif


                @endauth




            </ul>

        @endslot

        @slot('start_script')
            <link rel="stylesheet" href="https://cdn.sportscity.com.ph/loading-modal/css/jquery.loadingModal.min.css">
            <link rel="stylesheet" href="https://cdn.sportscity.com.ph/css/logo.css">
            <link rel="stylesheet" href="{{ asset('css/document.css') }}">
            @yield('top_script')
        @endslot

        @slot('content')
            @yield('content')
        @endslot

        @slot('end_script')
            <script src="https://cdn.sportscity.com.ph/loading-modal/js/jquery.loadingModal.js"></script>
            @yield('bottom_script')
        @endslot


        @slot('footer')
            @include('layouts.footer')
        @endslot

    @endsintexlayoutside


Email Template

    @sintexemail
    @slot('brand','Document Management System')
    @slot('url','http://docms.sportscity.com.ph')
    @slot('content')
        <p>Hi {{ $receiver }},</p>
        <p>The document that you have created (<i>{{ $document_number }} - {{ $title }}</i>) has been approved.<br>
    @endslot
    @endsintexemail

# Sintex Laravel Components/Helpers
Laravel components and helpers for sintex websites

## Installation
    composer require babojamo/sintex-lav-components

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
                <a href="/"><img class="sci" src="http://cdn.sportscity.com.ph/images/sci_logo.png"> Sportscity
                    International</a>.</strong> All rights reserved.
        @endslot

    @endsintexlayouttop

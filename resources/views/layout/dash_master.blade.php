<!doctype html>
<html class="no-js" lang="">

<head>
    <title>@yield('title')</title>

    @include('includes.dash_meta')

    @include('includes.dash_css')


</head>

<body>
    @include('layout._dash_sidebar')

    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">

        @include('layout._dash_header')
        
        @yield('content')
        
    </div>
    <!-- /#right-panel -->

    @include('includes.dash_script')
    @stack('after_script')

    
</body>
</html>



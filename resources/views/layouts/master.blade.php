<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>


    @include('includes.meta')
    @include('includes.css')

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        @include('layouts._header')

        @yield('content')

        @include('layouts._footer')

    </div>
    <!-- .site-wrap -->

@include('includes.script')


</body>

</html>
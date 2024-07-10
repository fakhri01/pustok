<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('client.layouts.includes.head')
    @stack('css')
    <title>
        @stack('title', 'Pustok - Bookstore')
    </title>
</head>

<body>
    <div class="site-wrapper" id="top">
    <x-client-header-component />

        @yield('content')
        
    </div>
    <!--=================================
  Brands Slider
===================================== -->

 
    <x-client-footer-component />
    <!-- Use Minified Plugins Version For Fast Page Load -->
    @include('client.layouts.includes.foot')
    @stack("js")
</body>

</html>
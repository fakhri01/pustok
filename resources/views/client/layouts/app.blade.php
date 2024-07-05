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
    <section class="section-margin">
        <h2 class="sr-only">Brand Slider</h2>
        <div class="container">
            <div class="brand-slider sb-slick-slider border-top border-bottom" data-slick-setting='{
                                            "autoplay": true,
                                            "autoplaySpeed": 8000,
                                            "slidesToShow": 6
                                            }' data-slick-responsive='[
                {"breakpoint":992, "settings": {"slidesToShow": 4} },
                {"breakpoint":768, "settings": {"slidesToShow": 3} },
                {"breakpoint":575, "settings": {"slidesToShow": 3} },
                {"breakpoint":480, "settings": {"slidesToShow": 2} },
                {"breakpoint":320, "settings": {"slidesToShow": 1} }
            ]'>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-1.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-2.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-3.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-4.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-5.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-6.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-1.jpg')}}" alt="">
                </div>
                <div class="single-slide">
                    <img src="{{asset('client/assets/image/others/brand-2.jpg')}}" alt="">
                </div>
            </div>
        </div>
    </section>
 
    <x-client-footer-component />
    <!-- Use Minified Plugins Version For Fast Page Load -->
    @include('client.layouts.includes.foot')
    @stack("js")
</body>

</html>
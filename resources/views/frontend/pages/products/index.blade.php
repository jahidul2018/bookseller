@extends('frontend.layouts.app')
<!--start section -->
@section('content')
        @include('frontend.partials.slider')
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        @include('frontend.pages.products.partials.new-arival')
        <!-- End Category Area -->
        <!-- Start Prize Good Area -->
        @include('frontend.partials.prizegood')
        <!-- End Prize Good Area -->
        <!-- Start Product Area -->
        @include('frontend.pages.products.partials.best-seller')
        <!-- End Product Area -->
        <!-- Start Testimonial Area -->
        
        <!-- End Testimonial Area -->
        <!-- Start Top Rated Area -->
        @include('frontend.pages.products.partials.toprated')
        <!-- End Top Rated Area -->
        <!-- Start Brand Area -->
        @include('frontend.pages.products.partials.brand-image')
        <!-- End Brand Area -->
        <!-- Start Blog Area -->
        @include('frontend.pages.products.partials.product-blog')
        <!-- End Blog Area -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
@endsection   
<!--end section--> 

@section('script')
   
@endsection
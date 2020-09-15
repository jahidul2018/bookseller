@extends('frontend.layouts.app')
<!--start section -->
@section('content')
        @include('frontend.partials.slider')
        <!-- Start Slider Area -->
        <!-- Start Category Area -->
        @include('frontend.partials.category')
        <!-- End Category Area -->
        <!-- Start Prize Good Area -->
        @include('frontend.partials.prizegood')
        <!-- End Prize Good Area -->
        <!-- Start Product Area -->
        @include('frontend.partials.allproducts')
        <!-- End Product Area -->
        <!-- Start Testimonial Area -->
        ;@include('frontend.partials.comment')
        <!-- End Testimonial Area -->
        <!-- Start Top Rated Area -->
        @include('frontend.partials.toprated')
        <!-- End Top Rated Area -->
        <!-- Start Brand Area -->
        @include('frontend.partials.brand')
        <!-- End Brand Area -->
        <!-- Start Blog Area -->
        @include('frontend.partials.blog')
        <!-- End Blog Area -->
        <!-- End Banner Area -->
        <!-- Start Footer Area -->
@endsection   
<!--end section--> 

@section('script')
   
@endsection
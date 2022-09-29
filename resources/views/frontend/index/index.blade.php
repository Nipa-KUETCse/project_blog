@extends('frontend.layouts.master_frontend')

@section('css')

@endsection

@section('content')

<!-- banner section starts  -->
@include('frontend.index.components.banner')
<!-- banner section ends -->


<section class="container" id="posts">
    <!-- posts section starts -->
    @include('frontend.index.components.posts')
    <!-- posts section ends -->
    <!-- sidebar section starts -->
    @include('frontend.index.components.sidebar')
    <!-- sidebar section ends -->
</section>


<!-- contact section starts  -->
@include('frontend.index.components.contact')
<!-- contact section ends -->

@endsection

@section('js')

@endsection
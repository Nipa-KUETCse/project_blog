@extends('frontend.layouts.master_frontend')

@section('content')

<!-- banner section starts  -->
@include('frontend.post.components.banner')
<!-- banner section ends -->

<section class="container" id="posts">
    <!-- posts section starts  -->
    @include('frontend.post.components.posts')
    <!-- posts section ends -->

    <!-- sidebar section starts  -->
        @include('frontend.post.components.sidebar')
    <!-- sidebar section ends -->
</section>



@endsection



















<!-- custom js file link  -->
<script src="{{ asset('frontend/assets/js/script.js') }}"></script>
    
</body>
</html>
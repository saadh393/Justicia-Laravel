@extends('frontend.layout')

@section('styles')
<!-- Flipbook StyleSheet -->
  <link href={{ secure_asset('frontend/dflip/css/dflip.min.css') }}  rel="stylesheet" type="text/css">

  <!-- Icons Stylesheet -->
  <link href={{ secure_asset('frontend/dflip/css/themify-icons.min.css') }} rel="stylesheet" type="text/css">
@endsection

@section('content')
    <!-- Hero Section -->
    <section>
        <!-- Pink wrapper -->
        <div class="primary-gradient-pink py-28 relative hero-section">
            <!-- Left Side Overlay -->
            @include('frontend.svg.heroLeftSvg')

            <!-- Right Side Overlay -->
            @include('frontend.svg.heroRightSvg')

            <!-- Content wrapper -->
            <div class="px-4 md:px-0 max-w-4xl mx-auto  relative">
                <div class="w-56 mx-auto">
                    @include('frontend.svg.logo')
                </div>
                <h1 class="text-slate-50 text-center text-[45px] leading-[60px] font-[600]">Our Publications</h1>
                <p class="text-lg tracking-wide text-white text-center mt-4">Our telephone advice lines provide vital free
                    and
                    confidential legal advice to women.</p>
            </div>
        </div>
    </section>

    <section class="py-16 space-y-20">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 wrapper">
            @foreach ($recentPublications as $publication)
                @include('frontend.components.publication_Card_2', ['publication' => $publication])
            @endforeach
        </div>

        <!-- <button class="btn bg-primary-pink !px-14 mx-auto text-white">See Our Other Works</button> -->
    </section>
@endsection

@section('script') 
<script src={{ secure_asset('frontend/dflip/js/dflip.min.js') }} type="text/javascript"></script>
@endsection
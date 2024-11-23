@extends('frontend.layout')

@section('title', $blog->Title . ' | Justicia')
@section('meta-title', $blog->Title . ' | Justicia')
@section('meta-description', $blog->shortDescription)
@section('meta-image', 'https://justiciabd.com/uploads/blog/'.  $blog->Image )
@section('styles')
    <link rel="stylesheet" href={{ secure_asset('frontend/styles/typography.css') }} />
@endsection

@section('content')

    <!-- Hero Section -->
    <section>
        <!-- Pink wrapper -->
        <div class="primary-gradient-pink py-20 lg:py-28 relative hero-section">
            <!-- Left Side Overlay -->
            @include('frontend.svg.heroLeftSvg')

            <!-- Right Side Overlay -->
            @include('frontend.svg.heroRightSvg')


            <!-- Content wrapper -->
            <div class="px-4 md:px-0 max-w-4xl mx-auto relative">
                <div class="w-56 mx-auto logo">
                    @include('frontend.svg.logo')
                </div>
                <h1
                    class="title text-slate-50 text-center text-[30px] md:text-[35px] lg:text-[45px] leading-[60px] font-[600]">
                    {{ $blog->Title }}
                </h1>
                <p class="text-lg tracking-wide text-white text-center mt-4"> {{ date('d F Y', strtotime($blog->Date)) }}</p>
            </div>

        </div>
    </section>

    <section class="wrapper py-10 pb-20 blog-description ">
        <img class="w-[500px] object-cover mx-auto" src="/uploads/blog/{{ $blog->Image }}" alt="{{ $blog->Title }}" />
        <article class="py-5 prose lg:prose-xl">
            {!! $blog->description !!}
        </article>
    </section>
@endsection

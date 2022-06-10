@extends('frontend.layout')

@section('content')
    <!-- Hero Section -->
    <section>
        <!-- Pink wrapper -->
        <div class="primary-gradient-pink h-[450px] py-40 relative hero-section">
            <!-- Left Side Overlay -->
            @include('frontend.svg.heroLeftSvg')

            <!-- Right Side Overlay -->
            @include('frontend.svg.heroRightSvg')

            <!-- Content wrapper -->
            <div class="px-4 md:px-0 max-w-4xl mx-auto space-y-6 relative">
                <h1 class="text-slate-50 text-center text-[45px] leading-[60px] font-[600]">Our Recent Works</h1>
                <p class="text-lg tracking-wide text-white text-center">Our telephone advice lines provide vital free and
                    confidential legal advice to women.</p>
            </div>
        </div>
    </section>

    <section class="py-16 space-y-20">
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3 wrapper">
            @foreach ($recentWorks as $work)
                @include('frontend.components.recentworks', [
                    'post' => $work,
                    'colorsPublication' => $colorsPublication,
                    'height' => '245px',
                ])
            @endforeach
        </div>

        <!-- <button class="btn bg-primary-pink !px-14 mx-auto text-white">See Our Other Works</button> -->
    </section>
@endsection

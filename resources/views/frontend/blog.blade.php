@extends('frontend.layout')

@section('content')
    <!-- Our Recent works -->
    <section>
        <div class="container">
            <h1 class="section-title text-center my-6">Our Recent works</h1>
            <div class="grid justify-center md:grid-cols-2 lg:grid-cols-3 gap-5 lg:gap-7">

                @foreach($blogs as $blog)
                    @include('.frontend.components.blog_card', ["blog" => $blog])
                @endforeach

            </div>


            <ul class="pagination-Container">
                <li class="pagination-item">
                    <a class="text-white font-medium" href="#">1</a>
                </li>

                <li class="pagination-item">
                    <a class="text-white font-medium" href="#">2</a>
                </li>

                <li class="pagination-item active">
                    <a class="text-white font-medium" href="#">3</a>
                </li>

                <li class="pagination-item">
                    <a class="text-white font-medium" href="#">4</a>
                </li>
            </ul>
        </div>
        <!-- Container -->
    </section>

    @include('frontend.components.joinus')
@endsection
@extends('frontend.layout')

@section('content')
    <!-- This section will contain banner -->
    <section class="bg-primary">
        <div class="container py-8 pb-8 xl:pt-6 xl:py-0 xl:pb-0 space-y-5 lg:grid md:space-x-4 grid-cols-2">
            <div class="lg:relative lg:full lg:bottom-0">
                <img class="" src="{{asset('frontend/assets/slider/slider-img-1.png')}}" alt="Slider"/>
            </div>
            <div class="space-y-5 flex flex-col justify-center">
                <h1 class="font-extrabold text-3xl lg:text-4xl xl:text-5xl text-secondary">Justicia</h1>
                <p class="text-base xl:text-md font-light text-white leading-[20px] sm:leading-6">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint
                    commodi
                    repudiandae consequuntur voluptatum.
                </p>
                <button class="btn btn-secondary">Show More</button>
            </div>
        </div>
    </section>

    <!-- Who we are section -->
    <section id="about" class="snap-start snap-always">
        <div class="lg:grid lg:grid-cols-2">
            <img class="object-cover w-full lg:h-[528px]" src="{{ asset('frontend/assets/who-we-are.jpg') }}" alt=""/>
            <div class="px-10 lg:pr-20 my-4 flex flex-col justify-center">
                <h1 class="section-title">Who we are</h1>
                <p class="my-2 paragraph-normal">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in
                    some form, by injected humour, or randomised words which don't look even slightly believable. If you
                    are
                    going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden
                    in the
                    middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as
                    necessary, making this the first true generator on the Internet.There are many variations of
                    passages of
                    Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,
                    or
                    randomised words which don't look even slightly believable. If you are going to use a passage of
                    Lorem
                    Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the
                    Lorem
                    Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the
                    first true
                    generator on the Internet.
                </p>
            </div>
        </div>
    </section>

    <!-- Vision & Mission -->
    <section class="bg-[#D8B4FE] relative">
        <div class="w-full z-0 opacity-25 h-full absolute">
            <img class="absolute w-40 left-0 top-0" src="{{ asset('frontend/assets/overlay/left-top400x.svg') }}" alt=""
                 srcset=""/>
            <img class="absolute w-20 left-0 bottom-0" src="{{ asset('frontend/assets/overlay/left-bottom400x.svg') }}"
                 alt="" srcset=""/>
            <img class="absolute w-40 right-0 top-0" src="{{ asset('frontend/assets/overlay/right-top400x.svg') }}"
                 alt="" srcset=""/>
            <img class="absolute w-40 right-0 bottom-0"
                 src="{{ asset('frontend/assets/overlay/right-bottom400x.svg') }}" alt="" srcset=""/>
        </div>
        <div class="relative z-10 container lg:grid grid-cols-2 justify-center py-6 lg:py-10 xl:py-14">
            <!-- Vision -->
            <div class="px-2 py-4 lg:max-w-md">
                <img class="w-64 mx-auto" src="{{ asset('frontend/assets/vision.png') }}" alt="Justicia Vision"/>
                <h3 class="text-2xl text-center text-primary font-extrabold uppercase tracking-wider">Vision</h3>
                <p class="paragraph-normal text-center font-normal">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in
                    some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
            </div>

            <!-- Mission -->
            <div class="px-2 py-4 lg:max-w-md">
                <img class="w-64 mx-auto" src="{{ asset('frontend/assets/mission.png') }}" alt="Justicia Mission"/>
                <h3 class="text-2xl text-center text-primary font-extrabold uppercase tracking-wider">Mission</h3>
                <p class="paragraph-normal text-center font-normal">
                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in
                    some form, by injected humour, or randomised words which don't look even slightly believable.
                </p>
            </div>
        </div>
    </section>

    <!-- Our Recent works - Implement slider -->
    <section class="bg-[#F8DFCB] bg-recentwork-overlay py-12" id="works">
        <div class="container relative">
            <h1 class="section-title text-center my-6">Our Recent Works</h1>
            <div class="owl-carousel recentwork-carousel">
                <!-- Blog Card One -->
                <div class="recentwork-card">
                    <img class="recentwork-card--img" src="{{ asset('frontend/assets/our-work.png') }}" alt=""/>
                    <div class="recentwork-card--content">
                        <h3 class="recentwork-card--date">November 18, 2021</h3>
                        <h1 class="recentwork-card--title">Imagining our World Anew</h1>
                        <p class="paragraph-normal text-xs text-white">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable.
                        </p>
                        <button class="btn btn-secondary my-8">See More</button>
                    </div>
                </div>

                <!-- Blog Card One -->
                <div class="recentwork-card">
                    <img class="recentwork-card--img" src="{{ asset('frontend/assets/our-work.png') }}" alt=""/>
                    <div class="recentwork-card--content">
                        <h3 class="recentwork-card--date">November 18, 2021</h3>
                        <h1 class="recentwork-card--title">Imagining our World Anew</h1>
                        <p class="paragraph-normal text-xs text-white">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable.
                        </p>
                        <button class="btn btn-secondary my-8">See More</button>
                    </div>
                </div>

                <!-- Blog Card One -->
                <div class="recentwork-card">
                    <img class="recentwork-card--img" src="{{ asset('frontend/assets/our-work.png') }}" alt=""/>
                    <div class="recentwork-card--content">
                        <h3 class="recentwork-card--date">November 18, 2021</h3>
                        <h1 class="recentwork-card--title">Imagining our World Anew</h1>
                        <p class="paragraph-normal text-xs text-white">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised words which don't look even
                            slightly
                            believable.
                        </p>
                        <button class="btn btn-secondary my-8">See More</button>
                    </div>
                </div>
            </div>
            <!-- Next Previous Btn -->
            <div class="owl-nav">
                <div class="owl-next recentwork-next-prev recentwork-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="owl-prev recentwork-next-prev recentwork-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Publications -->
    <section class="py-12">
        <div class="container">
            <h1 class="section-title text-center my-6">Recent Publications</h1>
            <p class="text-right">
                <a
                        class="underline text-primary cursor-pointer hover:underline-offset-2 hover:text-primary-hover hover:shadow-lg hover:font-medium transition-all active:text-primary-active"
                        href="/publications.html"
                >See More</a
                >
            </p>
            <div class="owl-carousel publication-carousel">
                <!-- Publication 1  -->
                <div class="publication-card">
                    <img class="publication-card--img"
                         src="{{ asset('frontend/assets/publications/publication-1.jpg') }}" alt=""/>
                    <h4 class="publication-card--date">10 February, 2022</h4>
                    <h2 class="publication-card--title">
                        American Women: A guide to Women's History Resources at the Library of Congress
                    </h2>
                    <a class="publication-card--downloadAnchor" href="#">
                        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
                        <span>Download</span>
                    </a>
                </div>

                <!-- Publication 2  -->
                <div class="publication-card">
                    <img class="publication-card--img"
                         src="{{ asset('frontend/assets/publications/publication-2.jpg') }}" alt=""/>
                    <h4 class="publication-card--date">10 February, 2022</h4>
                    <h2 class="publication-card--title">
                        American Women: A guide to Women's History Resources at the Library of Congress
                    </h2>
                    <a class="publication-card--downloadAnchor" href="#">
                        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
                        <span>Download</span>
                    </a>
                </div>

                <!-- Publication 3  -->
                <div class="publication-card">
                    <img class="publication-card--img"
                         src="{{ asset('frontend/assets/publications/publication-3.jpg') }}" alt=""/>
                    <h4 class="publication-card--date">10 February, 2022</h4>
                    <h2 class="publication-card--title">
                        American Women: A guide to Women's History Resources at the Library of Congress
                    </h2>
                    <a class="publication-card--downloadAnchor" href="#">
                        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
                        <span>Download</span>
                    </a>
                </div>

                <!-- Publication 4  -->
                <div class="publication-card">
                    <img class="publication-card--img"
                         src="{{ asset('frontend/assets/publications/publication-1.jpg') }}" alt=""/>
                    <h4 class="publication-card--date">10 February, 2022</h4>
                    <h2 class="publication-card--title">
                        American Women: A guide to Women's History Resources at the Library of Congress
                    </h2>
                    <a class="publication-card--downloadAnchor" href="#">
                        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
                        <span>Download</span>
                    </a>
                </div>

                <!-- Publication 5  -->
                <div class="publication-card">
                    <img class="publication-card--img" src="./assets/publications/publication-2.jpg" alt=""/>
                    <h4 class="publication-card--date">10 February, 2022</h4>
                    <h2 class="publication-card--title">
                        American Women: A guide to Women's History Resources at the Library of Congress
                    </h2>
                    <a class="publication-card--downloadAnchor" href="#">
                        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
                        <span>Download</span>
                    </a>
                </div>

                <!-- Publication 6  -->
                <div class="publication-card">
                    <img class="publication-card--img"
                         src="{{ asset('frontend/assets/publications/publication-3.jpg') }}" alt=""/>
                    <h4 class="publication-card--date">10 February, 2022</h4>
                    <h2 class="publication-card--title">
                        American Women: A guide to Women's History Resources at the Library of Congress
                    </h2>
                    <a class="publication-card--downloadAnchor" href="#">
                        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
                        <span>Download</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @include('frontend.components.joinus')

@endsection


@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('frontend/scripts/owl.carousel.min.js') }}"></script>
    <script>
        $(".recentwork-carousel").owlCarousel({
            loop: true,
            items: 1,
            margin: 20,
            center: true,
            dots: true,
            rewind: true,
            nav: true,
            navText: [document.querySelector(".recentwork-next"), document.querySelector(".recentwork-prev")],
            autoplay: false,
            autoplayTimeout: 2500,
            autoplayHoverPause: true,
            slideTransition: "ease",
        });

        $(".publication-carousel").owlCarousel({
            loop: true,
            items: 4,
            center: true,
            rewind: true,
            autoplay: true,
            autoplayTimeout: 3200,
            autoplayHoverPause: true,
            responsiveClass: true,
            slideTransition: "ease",
            responsive: {
                0: {
                    items: 1,
                    margin: 70,
                    autoplayTimeout: 2200,
                },
                600: {
                    items: 2,
                },
                1000: {
                    items: 3,
                },
                1400: {
                    items: 4,
                    margin: 100,
                },
                1600: {
                    margin: 30,
                },
            },
        });
    </script>
@endsection
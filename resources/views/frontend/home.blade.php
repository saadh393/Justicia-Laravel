@extends('frontend.layout')

@section('title', 'Home | Justicia')


@section('content')
    <!-- Hero Section -->
    <section>
        <!-- Pink wrapper -->
        <div class="primary-gradient-pink h-[650px] py-20 lg:py-28 relative hero-section">
            <!-- Left Side Overlay -->
            @include('frontend.svg.heroLeftSvg')

            <!-- Right Side Overlay -->
            @include('frontend.svg.heroRightSvg')


            <!-- Content wrapper -->
            <div class="px-4 md:px-0 max-w-4xl mx-auto relative">
                <div class="w-56 mx-auto wow fadeIn">
                    @include('frontend.svg.logo')
                </div>
                <h1
                    class="title text-slate-50 text-center text-[30px] md:text-[35px] lg:text-[45px] leading-[60px] font-[600]">
                    CHALLENGING THE ' STATUS QUO'</h1>

            </div>

            <!-- Bottom Grass Overlay -->
            <div class="hidden md:block w-8/12 mx-auto relative h-full overflow-hidden">
                <!-- Left Grass -->
                <svg class="overlay absolute left-0 w-auto h-full -bottom-[25px]" width="163.7px" height="209.39px"
                    viewBox="0 0 208 210" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M142.17 131.273C119.515 131.451 109.033 190.661 109.033 190.661L108.766 190.426C103.25 178.849 98.8123 166.787 95.5081 154.392C99.2179 150.662 119.314 130.308 123.53 122.483C128.389 113.981 125.285 94.8968 113.993 95.3709C102.7 95.845 93.384 144.658 93.384 144.658L92.6759 143.783C89.8709 132.817 87.4581 121.601 85.4048 110.998C90.2422 103.983 101.459 87.1178 103.398 79.4219C105.882 69.5397 104.826 60.2003 96.6659 61.3613C90.4506 62.2456 84.4361 82.3151 81.8919 91.7762C80.3997 82.9284 79.256 75.1635 78.4064 69.1923C81.7238 58.6777 84.0942 47.8846 85.4889 36.9427C85.8379 26.2709 83.5614 10.2709 76.2403 9.399C68.9192 8.52707 62.5945 18.7604 62.387 35.8949C62.2504 48.8796 70.8076 63.6345 75.0236 70.025C75.8623 75.9197 76.9297 83.4221 78.422 91.9966C73.035 81.7503 59.9568 58.188 48.267 56.1412C41.5668 54.9857 35.6127 62.9013 40.346 75.1151C45.0793 87.3289 76.7982 107.927 76.7982 107.927L82.1854 113.252C83.7594 121.307 85.5731 129.68 87.5774 138.025C79.2978 129.05 63.4957 113.412 48.2108 107.425C37.8884 103.231 15.4124 117.793 32.0806 134.049C46.2322 147.657 81.5141 153.376 91.9402 154.744C94.7882 165.195 98.3385 175.441 102.567 185.411C89.412 174.981 58.7117 153.34 41.0079 159.335C17.8893 167.193 16.5975 190.926 38.8713 197.637C61.145 204.348 110.095 198.125 110.095 198.125C110.095 198.125 137.855 180.507 147.682 170.01C157.509 159.513 164.864 131.091 142.17 131.273Z"
                        fill="white" fill-opacity="0.20" />

                </svg>

                <svg class="absolute right-0 w-auto h-full bottom-0 -rotate-12" width="250" height="331"
                    viewBox="0 0 250 331" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15.1523 242.484C48.0783 228.18 102.639 317.44 102.639 317.44L102.869 316.887C103.156 294.562 101.56 272.144 98.1021 249.918C90.2491 246.259 47.61 226.197 36.2999 216.224C23.6086 205.568 15.4113 172.622 32.0795 166.118C48.7476 159.614 94.7041 232.765 94.7041 232.765L95.1472 230.889C91.9165 211.302 87.9509 191.561 83.8721 173.044C72.2014 164.785 44.7414 144.662 36.8143 133.432C26.6442 119.008 21.9626 103.183 34.5518 99.8099C44.1407 97.2406 66.1984 125.91 76.1753 139.613C72.4517 124.305 68.9436 110.977 66.2025 100.747C54.4053 85.8343 43.7944 69.8595 34.4973 53.0151C26.8943 35.935 19.5496 8.52418 29.5717 2.39482C39.5939 -3.73455 55.5589 8.7856 67.2553 36.4361C76.0892 57.4035 73.5103 86.8408 71.6552 99.9188C74.3611 110.018 77.8051 122.87 81.3468 137.735C82.3333 117.651 85.6015 71.0201 101.169 60.1718C110.103 53.9825 123.99 62.983 125.259 85.8369C126.527 108.691 94.2931 162.521 94.2931 162.521L90.0337 174.626C93.1117 188.702 96.0536 203.447 98.7015 218.27C104.722 198.383 117.205 162.848 135.358 143.294C147.517 129.845 189.751 138.981 176.425 176.078C164.981 207.258 117.692 239.257 103.503 248.19C106.329 266.971 108.002 285.871 108.51 304.762C120.624 279.377 150.689 224.512 180.314 222.829C219.019 220.681 236.674 258.332 208.882 283.561C181.09 308.79 106.065 330.228 106.065 330.228C106.065 330.228 54.1472 319.54 32.9342 308.847C11.7213 298.155 -17.8326 256.805 15.1523 242.484Z"
                        fill="white" fill-opacity="0.12" />
                </svg>
            </div>

            <!-- Ladies Standing -->
            <div
                class="overflow-x-hidden flex absolute -bottom-[125px] md:-bottom-[95px] items-end w-full justify-center gap-10">
                <img class="object-contain h-[200px] md:h-full wow slideInLeft"  src="./frontend/assets/Hero/Asset 5Justicia.svg" />
                <img class="object-contain h-[200px] md:h-full wow slideInLeft" src="./frontend/assets/Hero/Asset 11Justicia.svg" />
                <img class="object-contain h-[200px] md:h-full wow fadeIn" src="./frontend/assets/Hero/Asset 12Justicia.svg" />
                <img class="object-contain h-[200px] md:h-full wow fadeIn" src="./frontend/assets/Hero/Asset 4Justicia.svg" />
                <img class="object-contain h-[200px] md:h-full wow fadeIn" src="./frontend/assets/Hero/Asset 9Justicia.svg" />
                <img class="object-contain h-[200px] md:h-full wow slideInRight" src="./frontend/assets/Hero/Asset 3Justicia.svg" />
            </div>
        </div>
    </section>

    <!-- who we are  -->
    <section class="py-28 mt-10 ">
        <div class="wrapper space-y-6 ">
            <h1 class="font-bold text-3xl text-primary-pink text-center">Who We Are</h1>
            <p class="paragraph text-center">
                Justicia is many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words which
                don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure
                there isn't anything embarrassing hidden in the middle of text.
            </p>
        </div>
    </section>

    <!-- Vision Mission -->
    <section>
        <div class="wrapper space-y-20">
            <!-- Vission -->
            <div class="vision grid md:grid-cols-2 items-center relative">
                <div class="bg-dots wow fadeIn">
                    <img class="h-[375px] object-contain relative z-10 drop-shadow-[0_35px_35px_rgba(255, 209, 227,0.25)]"
                        src="./frontend/assets/Vision.png" alt="Justicia Vision" />
                </div>
                <div class="space-y-5 text-center lg:text-left wow fadeIn">
                    <h3 class="text-2xl font-bold text-text-black">Our Vision</h3>
                    <p class="paragraph">
                        Justicia Feminist Network envisions a society where gender justice is a reality, where the justice
                        sector is more gender sensitive, not only towards women but also to persons with all gender
                        identities, and fosters an enabling environment for all women from the justice sector so that they
                        are able to use their full potential to thrive and contribute in the legal sector in a more
                        meaningful way.
                    </p>
                </div>
            </div>

            <!-- Mission -->
            <div class="grid md:grid-cols-2 items-center relative">
                <div class="bg-dots mission-dots wow fadeIn">
                    <img class="h-[375px] object-contain relative z-10" src="./frontend/assets/Mision.svg"
                        alt="Justicia Vision" />
                </div>

                <div class="space-y-5 col-start-1 lg:row-start-1 text-center lg:text-left wow fadeIn">
                    <h3 class="text-2xl font-bold text-text-black">Our Mision</h3>
                    <p class="paragraph">
                        Our mission is to support initiatives and movements that are based on feminist principles in order
                        to challenge the status quo to bring appropriate change and reform in the legal system by
                        engaging more intergenerational feminist lawyers and justice sector actors
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Our Recent Works -->
    <section class="py-16 space-y-10 lg:space-y-20 relative">
        <div class="wrapper space-y-6">
            <h1 class="font-bold text-3xl text-primary-pink text-center">Our Recent Works</h1>
            <p class="paragraph text-center">
                We do many things variations of passages of Lorem Ipsum available, but the majority have suffered alteration
                in some form, by injected humour, or randomised words
            </p>
        </div>

        <div class="wrapper">
            <div class="owl-carousel recentwork-carousel ">
                @foreach ($recentWorks as $work)
                    @include('frontend.components.recentworks', [
                        'post' => $work,
                        'colors' => $colors
                    ])
                @endforeach
            </div>
            <!-- Next Previous Btn -->
            <div class="__owl-nav">
                <div class="recentwork-next-prev recentwork-next">
                    <i class="fa-solid fa-arrow-right"></i>
                </div>
                <div class="recentwork-next-prev recentwork-prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </div>
            </div>
        </div>

        <a href="/blog" style="display: table" class="btn bg-primary-pink !px-28 !mt-10 mx-auto text-white">See
            Our Other Works</a>
    </section>

    <!-- Our Publications -->
    <section class="py-16 space-y-20">
        <div class="wrapper space-y-6" x-data="{ publications: [1, 2, 3, 4] }">
            <div class="space-y-6">
                <h1 class="font-bold text-3xl text-primary-pink text-center">Our Publications</h1>
                <p class="paragraph text-center">
                    We do many things variations of passages of Lorem Ipsum available, but the majority have suffered
                    alteration in some form, by injected humour, or randomised words
                </p>
            </div>
            <div class="wrapper">
                @foreach ($recentPublications as $publication)
                    @include('frontend.components.publication_card', ['publication' => $publication])
                @endforeach
            </div>
            <div class="mt-10 mx-auto w-fit">
                <a href="/publications" class="btn bg-primary-pink !px-28 mx-auto text-white block">See
                    Our Publications
                </a>
            </div>
        </div>
    </section>
@endsection

@section('styles')
    <!-- Slider -->
    <link rel="stylesheet" href="./frontend/styles/owl.carousel.min.css" />
    <link rel="stylesheet" href="./frontend/styles/owl.theme.default.min.css" />

@endsection

@section('script')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./frontend/scripts/owl.carousel.min.js"></script>



    <script>

        new WOW().init();

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

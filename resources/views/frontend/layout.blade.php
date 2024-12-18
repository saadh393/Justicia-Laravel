<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Fav Icon for Multiple Devices -->
    <link rel="icon" type="image/png" href="{{ secure_asset('./frontend/favicon_io/favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ secure_asset('./frontend/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ secure_asset('./frontend/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ secure_asset('./frontend/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ secure_asset('./frontend/favicon_io/site.webmanifest') }}">

    <title>@yield('title', 'Justicia | Feminist Network')</title>


    <meta property="og:title" content="@yield('meta-title', 'Justicia | Feminist Network')" />
    <meta property="og:og:description" content="@yield('meta-description', 'Justicia Feminist Network, established in 2016, is the first legal feminist network in Bangladesh led by young women lawyers who are advocating for gender justice and strengthening the capacity of feminist lawyers, youths and justice sector actors')" />

    <!-- Meta Image -->
    <meta property="og:image" content="@yield('meta-image', 'https://justiciabd.com/frontend/meta-images/default.jpg')" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="Justicia | Justicia Feminist Network, established in 2016" />

    <!-- External Links -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <!-- Tailwindcss And Custom Stylings -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href={{ secure_asset('frontend/styles/style.css') }} />

    <!-- Animations -->
    <script src={{ secure_asset('frontend/scripts/wow.min.js') }}></script>
    <link rel="stylesheet" href={{ secure_asset('frontend/styles/animate.css') }} />

    <script>
        var verifyCallback = function(response) {
            alert(response);
        };
        var widgetId1;

        var onloadCallback = function() {
            // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
            // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
            widgetId1 = grecaptcha.render('captcha', {
                'sitekey': '6Lc2rdAgAAAAAL8JxtH4GmTYRr_H15psNeHh-jxt',
                'theme': 'light'
            });

        };
    </script>

    @yield('styles')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- Navbar -->
    <nav class="hidden  top-8 left-1/2 absolute -translate-x-1/2 z-50 bg-slate-50/20 px-14 py-4 lg:block mx-auto backdrop-blur-xl rounded-full" style="width : max-content">
        <ul class="flex gap-8 w-full">
            <li class="text-white hover:text-slate-100">
                <a href="/">Home</a>
            </li>

            <li class="text-white hover:text-slate-100">
                <a href="/#about">About Us</a>
            </li>

            <li class="text-white hover:text-slate-100">
                <a href="/blog">Our Works</a>
            </li>

            <li class="text-white hover:text-slate-100">
                <a href="/publications">Publications</a>
            </li>

            <li class="text-white hover:text-slate-100">
                <a href="/referral">Referral</a>
            </li>

            <li class="text-white hover:text-slate-100">
                <a href="/members">Members</a>
            </li>

            <li class="text-white hover:text-slate-100 cursor-pointer">
                <a onclick="joinUsFadeIn()">Contact Us</a>
            </li>
        </ul>
    </nav>

    <!-- Mobile Navbar -->
    <div class="block lg:hidden absolute top-0 left-0 z-20 w-full flex justify-end p-4">
        <!-- Hamburger -->
        <div class="" id="hamburger">
            @include('frontend.svg.hamburger')
        </div>
    </div>


    <!-- Poup Mobile Navbar -->
    <div class="hidden w-screen h-screen z-20 bg-slate-50 overflow-hidden grid place-items-center absolute left-0 top-0 opacity-0 transition-all" id="mobileNav">
        <div class="block lg:hidden absolute right-6 top-6 z-20 cursor-pointer" id="close">
            @include('frontend.svg.close')
        </div>

        <ul class="w-full text-center space-y-5">
            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut()">
                <a href="/">Home</a>
            </li>

            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut()">
                <a href="/#about">About Us</a>
            </li>

            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut()">
                <a href="/blog">Our Works</a>
            </li>

            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut()">
                <a href="/publications">Publications</a>
            </li>

            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut()">
                <a href="/referral">Referral</a>
            </li>

            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut()">
                <a href="/members">Members</a>
            </li>

            <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut(joinUsFadeIn)">
                <a href="#">Contact Us</a>
            </li>
        </ul>
    </div>


    @include('frontend.components.joinus')

    @yield('content')


    <footer class="lg:h-[600px] grid place-items-center relative">
        <img class="hidden lg:block absolute left-0 bottom-0" src="{{ secure_asset('frontend/assets/footer-left.svg') }}" alt="" />

        <img class="hidden lg:block absolute right-0 bottom-0" src="{{ secure_asset('frontend/assets/footer-right.svg') }}" alt="" />

        <div class="wrapper text-center py-20 pt-32 lg:p-0 lg:mt-32">
            <h1 class="text-4xl text-white">Interested in Working with us?</h1>
            <a class="cursor-pointer btn bg-[#FF438A] !inline-block my-10 text-slate-50 !px-14 !rounded-full transtion-all hover:shadow-lg hover:shadow-pink-600/50" id='joinusBtn'>
                Join us as Volunteer
            </a>

            <div class="flex gap-5 justify-center">

                @if(isset($metaData['footer-facebook']['description']) && $metaData['footer-facebook']['description'])
                <!-- Facebook -->
                <a target="_blank" href="{{ $metaData['footer-facebook']['description'] }}" title="{{ $metaData['footer-facebook']['title'] }}">
                    <img src="./uploads/meta/{{ $metaData['footer-facebook']['meta_image'] }}" class="w-8 h-8 transition hover:scale-110" alt="{{ $metaData['footer-facebook']['title'] }}" />
                </a>
                @endif

                @if(isset($metaData['email']['description']) && $metaData['email']['description'])
                <!-- Email -->
                <a href="mailto:{{ $metaData['email']['description'] }}">
                    <img src="./uploads/meta/{{ $metaData['email']['meta_image'] }}" class="w-8 h-8 transition hover:scale-110" alt="{{ $metaData['email']['title'] }}" />
                </a>
                @endif

                @if(isset($metaData['footer-instagram']['description']) && $metaData['footer-instagram']['description'])
                <!-- Instagram -->
                <a target="_blank" href="{{ $metaData['footer-instagram']['description'] }}" title="{{ $metaData['footer-instagram']['title'] }}">
                    <img src="./uploads/meta/{{ $metaData['footer-instagram']['meta_image'] }}" class="w-8 h-8 transition hover:scale-110" alt="{{ $metaData['footer-instagram']['title'] }}" />
                </a>
                @endif

                @if(isset($metaData['footer-linkedin']['description']) && $metaData['footer-linkedin']['description'])
                <!-- LinkedIn -->
                <a target="_blank" href="{{ $metaData['footer-linkedin']['description'] }}" title="{{ $metaData['footer-linkedin']['title'] }}">
                    <img src="./uploads/meta/{{ $metaData['footer-linkedin']['meta_image'] }}" class="w-8 h-8 transition hover:scale-110" alt="{{ $metaData['footer-linkedin']['title'] }}" />
                </a>
                @endif

            </div>
        </div>
    </footer>

    @yield('script')

    <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit" async defer></script>
</body>

<script>
    const hamburger = document.querySelector('#hamburger');
    const mobileNav = document.querySelector('#mobileNav');
    const joinusBtn = document.querySelector('#joinusBtn');
    const joinusDialog = document.querySelector('#joinus');
    const joinus_close = document.querySelector('#joinus_close');

    hamburger.addEventListener('click', () => {
        mobileNav.classList.toggle('hidden');
        setTimeout(() => {
            mobileNav.classList.toggle('opacity-100');
        }, 150);
        document.querySelector('body').classList.toggle('overflow-hidden');
    });

    document.querySelector('#close').addEventListener('click', () => {
        mobileNavFadeOut();
    });

    function mobileNavFadeOut(callback) {
        mobileNav.classList.toggle('opacity-0');
        document.querySelector('body').classList.toggle('overflow-hidden');
        setTimeout(() => {
            mobileNav.classList.toggle('hidden');
            callback()
        }, 150);
    }

    function joinUsFadeIn() {
        joinusDialog.classList.toggle('hidden');
        setTimeout(() => {
            joinusDialog.classList.toggle('opacity-100');
            joinusDialog.querySelector('#joinUs_content').classList.toggle('-translate-y-1/2')
        }, 150);
        document.querySelector('body').classList.toggle('overflow-hidden');
    }

    function joinUsFadeOut() {
        joinusDialog.classList.toggle('opacity-100');
        joinusDialog.querySelector('#joinUs_content').classList.toggle('-translate-y-1/2')
        setTimeout(() => {
            joinusDialog.classList.toggle('hidden');
            document.querySelector('body').classList.toggle('overflow-hidden');
        }, 150);

    }

    joinusBtn.addEventListener('click', () => joinUsFadeIn());
    joinus_close.addEventListener('click', () => joinUsFadeOut());
</script>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Justicia | Home</title>
    <meta property="og:title" content="Justicia | Home"/>
    <meta property="og:og:description"
          content="Meta elements are tags used in HTML and XHTML documents to provide structured metadata about a Web page."/>
    <meta property="og:image" content="https://via.placeholder.com/1080x720.webp/933DB5/FBEEE4?text=Justicia"/>
    <meta property="og:image:type" content="image/jpeg"/>
    <meta property="og:image:width" content="1080"/>
    <meta property="og:image:height" content="720"/>
    <meta
            property="og:image:alt"
            content="Justicia | Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&display=swap"
            rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&display=swap"
            rel="stylesheet"
    />
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
    />

    <link rel="stylesheet" href="{{ asset('frontend/styles/owl.carousel.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/styles/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('frontend/styles/style.css') }}"/>
</head>
<body>
<nav class="h-16 md:h-20 bg-primary">
    <div class="container h-full flex justify-between items-center text-white">
        <img class="w-8 h-8 md:w-10 md:h-10" src="{{ asset('frontend/assets/logo.png') }}" alt="Justicia" />
        <ul class="hidden md:flex items-center gap-x-5">
            <a href="/"><li>Home</li></a>
            <a href="/about"><li>About Us</li></a>
            <a href="#works"><li>Our Works</li></a>
            <a href="/publications"><li>Publications</li></a>
            <a href="/blog"><li>Blogs</li></a>
            <a href="#join"><li>Join us</li></a>
        </ul>
        <img class="md:hidden w-4 h-4" src="{{ asset('frontend/assets/Menu.svg') }}" alt="Hamburger" srcset="" />
    </div>
</nav>
@yield('content')
<footer class="bg-primary py-8">
    <div class="container lg:grid lg:grid-cols-2">
        <div>
            <img class="w-8 h-8 md:w-10 md:h-10" src="./assets/logo.png" alt="Justicia"/>
            <h2 class="text-white font-bold tracking-wider text-2xl my-2">Justicia</h2>
            <p class="text-white font-light text-xs my-2">Copyright @ 2022</p>
            <ul class="footer-links">
                <a href="/terms">
                    <li>Terms & Condition</li>
                </a>

                <a href="/privacy">
                    <li>Privacy Policy</li>
                </a>

                <a href="/cookie">
                    <li>Cookie Policy</li>
                </a>
            </ul>
        </div>

        <div class="ml-auto">
            <h3 class="text-white text-sm">Follow Us On</h3>
            <div class="flex space-x-2 my-4">
                <img src="{{ asset('frontend/assets/social-media/youtube.png') }}" alt="Youtube Profile of Justicia"/>
                <img src="{{ asset('frontend/assets/social-media/twitter.png') }}" alt="Twitter Profile of Justicia"/>
                <img src="{{ asset('frontend/assets/social-media/facebook.png') }}" alt="Facebook Profile of Justicia"/>
                <img src="{{ asset('frontend/assets/social-media/instagram.png') }}" alt="Instagram Profile of Justicia"/>
            </div>
        </div>
    </div>
</footer>

@yield('script')


</body>
</html>

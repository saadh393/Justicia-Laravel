<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Justicia | Home</title>
    <meta property="og:title" content="Justicia Feminist Network" />
    <meta property="og:og:description" content="Justicia Feminist Network, established in 2016, is the first legal feminist network in Bangladesh
        led by young women lawyers who are advocating for gender justice and strengthening the
        capacity of feminist lawyers, youths and justice sector actors" />
    <meta property="og:image" content="https://via.placeholder.com/1080x720.webp/933DB5/FBEEE4?text=Justicia" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1080" />
    <meta property="og:image:height" content="720" />
    <meta property="og:image:alt" content="Justicia | Justicia Feminist Network, established in 2016" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;500;600;700;800;900&display=swap"
        rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="{{ asset('frontend/styles/style.css') }}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <!-- Navbar -->
    <nav
        class="hidden w-fit top-8 left-1/2 absolute -translate-x-1/2 z-50 bg-slate-50/20 px-14 py-4 lg:block mx-auto backdrop-blur-xl rounded-full">
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

            <li class="text-white hover:text-slate-100 cursor-pointer">
                <a onclick="joinUsFadeIn()">Contact Us</a>
            </li>
        </ul>

        <div class="block lg:hidden absolute right-6 top-6 z-20" id="hamburger">
            @include('frontend.svg.hamburger')
        </div>

        <div class="hidden w-screen h-screen z-20 bg-slate-50 overflow-hidden grid place-items-center absolute left-0 top-0 opacity-0 transition-all"
            id="mobileNav">
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

                <li class="text-slate-600 hover:text-violet-600" onclick="mobileNavFadeOut(joinUsFadeIn)">
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>

    @include('frontend.components.joinus')

    @yield('content')
    <footer class="lg:h-[600px] grid place-items-center relative">
        <img class="hidden lg:block absolute left-0 bottom-0" src="./frontend/assets/footer-left.svg" alt="" />
        <img class="hidden lg:block absolute right-0 bottom-0" src="./frontend/assets/footer-right.svg" alt="" />
        <div class="wrapper text-center py-20 pt-32 lg:p-0 lg:mt-32">
            <h1 class="text-4xl text-white">Interested in Working with us?</h1>
            <a class="cursor-pointer btn bg-[#FF438A] !inline-block my-10 text-slate-50 !px-14 !rounded-full"
                id='joinusBtn'>Join us as
                Volunteer</a>
            <div class="flex gap-5 justify-center">
                <a target="_blank" href="https://www.facebook.com/justicia985">
                    <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.6121 0H3.40308C1.87621 0 0.626953 1.19711 0.626953 2.66025V23.9423C0.626953 25.4054 1.87621 26.6025 3.40308 26.6025H25.6121C27.1389 26.6025 28.3882 25.4054 28.3882 23.9423V2.66025C28.3882 1.19711 27.1389 0 25.6121 0ZM21.4479 6.65064H19.5046C17.9777 6.65064 17.9777 7.84775 17.9777 8.77884V11.5721H21.3091L20.8927 14.8974H17.9777V23.1442H14.5076V14.8974H11.0374V11.7051H14.5076V8.51281C14.5076 5.58653 16.1732 3.99038 18.9494 3.99038C20.1986 3.85737 21.4479 3.99038 21.4479 3.99038V6.65064Z"
                            fill="white" />
                    </svg>
                </a>

                <a href="#">
                    <svg width="34" height="27" viewBox="0 0 34 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M33.6268 3.13943C32.794 4.4613 31.628 5.61793 30.2955 6.60933V7.43549C30.2955 8.92259 30.1289 10.4097 29.7958 11.8968C29.4627 13.3839 28.7964 14.871 28.1301 16.3581C27.4639 17.8452 26.4645 19.1671 25.2985 20.3237C24.1325 21.6455 22.9666 22.6369 21.4675 23.6283C20.1349 24.6197 18.4693 25.2807 16.637 25.7764C14.8048 26.2721 12.806 26.6025 10.8072 26.6025C6.64301 26.6025 3.14511 25.6111 0.313477 23.7936C0.813177 23.7936 1.31288 23.9588 1.97914 23.9588C3.47825 23.9588 4.97735 23.6283 6.47645 23.1326C7.97555 22.6369 9.30808 21.8108 10.474 20.8194C8.97495 20.8194 7.64242 20.3237 6.47645 19.4975C5.31048 18.6714 4.47765 17.5147 4.14451 16.1929C4.64421 16.3581 4.97735 16.3581 5.47705 16.3581C6.14331 16.3581 6.64301 16.3581 7.30928 16.1929C5.81018 15.8624 4.47765 15.0362 3.31168 13.8796C2.14571 12.723 1.64601 11.0706 1.64601 9.41829C2.64541 9.91399 3.64481 10.2445 4.81078 10.2445C3.81138 9.58353 2.97854 8.75736 2.47884 7.76596C1.97914 6.77456 1.64601 5.78316 1.64601 4.62653C1.64601 3.4699 1.97914 2.4785 2.64541 1.32187C4.31108 3.4699 6.47645 4.957 8.80838 6.27886C11.3069 7.43549 13.8054 8.09643 16.637 8.26166C16.637 7.93119 16.4705 7.27026 16.4705 6.77456C16.4705 4.957 17.1367 3.30466 18.4693 1.9828C19.8018 0.660933 21.4675 0 23.2997 0C25.2985 0 26.9642 0.660933 28.2967 2.14803C29.7958 1.81757 31.2949 1.32187 32.6274 0.4957C32.1277 2.14803 31.1283 3.30466 29.6292 4.29606C30.9618 3.9656 32.2943 3.63513 33.6268 3.13943Z"
                            fill="white" />
                    </svg>
                </a>

                <a href="#">
                    <svg width="29" height="27" viewBox="0 0 29 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M24.124 0C25.2345 0 26.2061 0.399038 27.039 1.19711C27.733 1.86218 28.1494 2.79327 28.1494 3.85737V22.7452C28.1494 23.8093 27.733 24.7404 26.9002 25.5385C26.0673 26.3365 25.0957 26.7356 23.9852 26.7356H4.41356C3.30311 26.7356 2.33147 26.3365 1.49863 25.5385C0.665796 24.7404 0.388184 23.8093 0.388184 22.7452V3.85737C0.388184 2.79327 0.804602 1.86218 1.63744 1.0641C2.47028 0.266026 3.30311 0 4.41356 0H24.124ZM14.2688 8.24679C12.8807 8.24679 11.6315 8.77884 10.521 9.70993C9.41058 10.641 9.13297 11.9711 9.13297 13.3013C9.13297 14.6314 9.6882 15.8285 10.6598 16.8926C11.6315 17.8237 12.8807 18.3558 14.4076 18.3558C15.7957 18.3558 17.0449 17.8237 18.1554 16.8926C19.127 15.9615 19.6822 14.7644 19.6822 13.3013C19.6822 11.8381 19.127 10.774 18.1554 9.70993C16.9061 8.77884 15.6569 8.24679 14.2688 8.24679ZM25.2345 23.2772V11.5721H22.1807C22.3196 12.1042 22.3196 12.6362 22.3196 13.1683C22.3196 14.6314 21.9031 15.8285 21.2091 17.0256C20.5151 18.2227 19.5434 19.1538 18.2942 19.8189C17.0449 20.484 15.6569 20.883 14.2688 20.883C12.8807 20.883 11.4927 20.75 10.2434 19.9519C8.99416 19.2868 8.02252 18.3558 7.32849 17.1586C6.49565 15.9615 6.21804 14.7644 6.21804 13.3013C6.21804 12.7692 6.21804 12.1042 6.35685 11.7051H3.30311V23.2772C3.30311 23.4102 3.30311 23.5433 3.44192 23.6763C3.58073 23.8093 3.71953 23.8093 3.85834 23.8093H24.6793C24.8181 23.8093 24.9569 23.8093 25.0957 23.6763C25.2345 23.5433 25.2345 23.4102 25.2345 23.2772ZM25.2345 6.65064V3.32532C25.2345 3.19231 25.2345 3.05929 25.0957 2.92628C24.9569 2.79327 24.8181 2.79327 24.6793 2.79327H21.2091C21.0703 2.79327 20.9315 2.79327 20.7927 2.92628C20.6539 3.05929 20.6539 3.19231 20.6539 3.32532V6.65064C20.6539 6.78365 20.6539 6.91666 20.7927 7.04968C20.9315 7.18269 21.0703 7.18269 21.2091 7.18269H24.6793C24.8181 7.18269 24.9569 7.18269 25.0957 7.04968C25.2345 6.91666 25.2345 6.78365 25.2345 6.65064Z"
                            fill="white" />
                    </svg>
                </a>

                <a href="#">
                    <svg width="34" height="24" viewBox="0 0 34 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16.6567 0.660645C21.6538 0.660645 24.9851 0.660644 26.6508 0.819885C28.9827 0.979126 30.4818 1.45685 31.4812 2.09381C32.3141 2.73077 32.8138 3.84546 33.1469 5.27863C33.1469 6.39331 33.3135 8.46344 33.3135 11.489V11.9667C33.3135 15.1516 33.3135 17.2217 33.1469 18.1771C32.9803 19.7695 32.4806 20.8842 31.6478 21.5212C30.815 22.3174 29.3159 22.7951 27.1505 22.9543C25.4848 23.1136 22.32 23.2728 17.4896 23.2728H16.6567C11.6597 23.2728 8.32837 23.2728 6.6627 23.1136C4.33075 22.9543 2.83165 22.4766 1.83224 21.8397C0.999404 21.2027 0.499702 20.088 0.166567 18.6548C0.166567 17.5402 0 15.47 0 12.4445V11.9667C0 8.78192 0 6.71179 0.166567 5.75635C0.333135 4.16394 0.832837 3.04926 1.66567 2.41229C2.49851 1.61609 3.99762 1.13837 6.16299 0.979126C7.82867 0.819885 10.9934 0.660645 15.8239 0.660645C15.9905 0.660645 16.6567 0.660645 16.6567 0.660645ZM12.4926 17.8586L22.8197 11.9667L12.4926 5.91559V17.8586Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </footer>

    @yield('script')


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

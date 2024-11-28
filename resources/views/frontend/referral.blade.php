@extends('frontend.layout')

@section('title', $metaData['referral-page']['title'] . ' | ' . $metaData['referral-page']['description'])

@section('content')
<!-- Hero Section -->
<section>
    <!-- Pink wrapper -->
    <div class="primary-gradient-pink py-20 lg:py-28 relative hero-section grid place-items-center">
        <!-- Left Side Overlay -->
        @include('frontend.svg.heroLeftSvg')

        <!-- Right Side Overlay -->
        @include('frontend.svg.heroRightSvg')


        <!-- Content wrapper -->
        <div class="px-4 md:px-0 max-w-4xl mx-auto relative">
            <div class="w-56 mx-auto wow fadeIn">
                @include('frontend.svg.logo')
            </div>
            <h1 class="title text-slate-50 text-center text-[30px] md:text-[35px] lg:text-[45px] leading-[60px] font-[600]">
            {{ $metaData['referral-page']['title'] }}
            </h1>
            <p class="text-lg tracking-wide text-white text-center my-4">
            {{ $metaData['referral-page']['description'] }}
            </p>

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


    </div>
</section>

<section>
    <div id="joinUs_content"
        class="w-[460px] bg-white px-10 py-10 mx-auto rounded-md ">

        <form id="form" action="{{ route('contact.submit') }}" method="POST">
            <!-- Name -->
            <div class="mb-4 pr-1 ">
                <label class="block text-gray-700 text-base mb-2" for="name">Name</label>
                <input name="name"
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  disabled:bg-slate-100"
                    placeholder="John Doe" type="text" id="name" required />
            </div>

            <!-- Email -->
            <div class="mb-4 pr-1">
                <label class="block text-gray-700 text-base mb-2" for="Email">Email</label>
                <input name="email"
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline disabled:bg-slate-100"
                    placeholder="example@email.com" type="email" id="Email" required />
            </div>

            <!-- Phone -->
            <div class="mb-4 pr-1 w-full">
                <label class="block text-gray-700 text-base mb-2" for="Phone" required>Phone</label>
                <input name="phone"
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline  disabled:bg-slate-100"
                    placeholder="0123456789" type="phone" id="Phone" />
            </div>

            <div class="mb-4 pr-1 w-full">
                <label class="block text-gray-700 text-base " for="Phone" required>Message</label>
                <textarea name="message"
                    required
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline disabled:bg-slate-100"
                    placeholder="Your message" rows="6" type="phone" id="Phone"></textarea>
            </div>

            <div class="mb-4">
                <div class="g-recaptcha" data-sitekey="6Lc2rdAgAAAAAL8JxtH4GmTYRr_H15psNeHh-jxt"></div>
            </div>

            <input  class="btn mx-auto bg-[#933DB5] text-white w-full mt-4  disabled:bg-slate-100  disabled:text-slate-700" type="submit" value="Reach Us" />


        </form>
    </div>
</section>


@endsection

@section('styles')
<!-- Any additional styles needed for this page -->
@endsection

@section('script')
<!-- Add this before closing </body> tag -->
<script>
    document.querySelector('#form').addEventListener('submit', function(e) {
        e.preventDefault();

        const recaptchaResponse = grecaptcha.getResponse();
        
        if (!recaptchaResponse) {
            Swal.fire({
                title: "Error",
                text: "Please complete the reCAPTCHA verification",
                icon: "error"
            });
            return;
        }
        
        let formData = new FormData(this);
        // Disable the form
        this.querySelectorAll('input, button, textarea, select').forEach(function(element) {
            element.disabled = true;
        });

        fetch(this.action, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                
                if (data.status === 'success') {
                    Swal.fire({
                        title: "Success",
                        text: "We recieved your request",
                        icon: "success"
                    });
                    grecaptcha.reset(); // Reset reCAPTCHA
                    this.reset(); // Reset form on success
                } else {
                    Swal.fire({
                        title: "Error",
                        text: "Something Went Wrong",
                        icon: "error"
                    });
                }
            })
            .catch(error => {
                alert('An error occurred. Please try again.');
            }).finally(() => {
            // Re-enable the form
            
            this.querySelectorAll('input, button, textarea, select').forEach(function(element) {
                element.disabled = false;
            });
        });
    });
</script>
@endsection
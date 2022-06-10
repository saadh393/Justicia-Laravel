<!-- Join as a volunteer -->
<section id="joinus" class="hidden">
    <div class="fixed left-0 top-0 bg-black bg-opacity-30 z-50 w-full h-full overflow-hidden"></div>

    <div
        class="w-[460px] bg-white px-10 py-8 mx-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rounded-md z-50">
        <div class="block absolute right-6 top-6 z-50 cursor-pointer " id="close">
            @include('frontend.svg.close')
        </div>

        <h1 class="section-title my-6 text-2xl text-center">Join Us <span class="text-gray-800">as Volunteer</span></h1>
        <form>
            <!-- Name -->
            <div class="mb-4 pr-1 ">
                <label class="block text-gray-700 text-base mb-2" for="name">Name</label>
                <input
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="John Doe" type="text" id="name" />
            </div>

            <!-- Email -->
            <div class="mb-4 pr-1">
                <label class="block text-gray-700 text-base mb-2" for="Email">Email</label>
                <input
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="example@email.com" type="email" id="Email" />
            </div>

            <!-- Phone -->
            <div class="mb-4 pr-1 w-full">
                <label class="block text-gray-700 text-base mb-2" for="Phone">Phone</label>
                <input
                    class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    placeholder="0123456789" type="phone" id="Phone" />
            </div>

            <label class="md:w-2/3 block text-gray-500 font-light mb-4">
                <input class="mr-2 leading-tight" type="checkbox" />
                <span class="text-sm">
                    I have read the <a class="text-primary underline" href="#">Privacy Policy</a>
                </span>
            </label>

            <input class="btn mx-auto bg-[#933DB5] text-white w-full mt-10" type="button" value="Reach Me" />
            <a class="text-center inline-block w-full pt-5 text-sm text-slate-700" href="#">Cancel</a>
        </form>
    </div>
</section>

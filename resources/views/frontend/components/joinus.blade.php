<!-- Join as a volunteer -->
<section id="join" class="snap-start snap-always">
    <div class="container grid lg:grid-cols-2">
        <!-- Form -->
        <div class="py-12">
            <h1 class="section-title my-6">Join Us <span class="text-gray-800">as Volunteer</span></h1>
            <form>
                <!-- Name -->
                <div class="mb-4 pr-1">
                    <label class="block text-gray-700 text-base mb-2" for="name">Name</label>
                    <input
                            class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="John Doe"
                            type="text"
                            id="name"
                    />
                </div>

                <!-- Email -->
                <div class="mb-4 pr-1">
                    <label class="block text-gray-700 text-base mb-2" for="Email">Email</label>
                    <input
                            class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="example@email.com"
                            type="email"
                            id="Email"
                    />
                </div>

                <!-- Phone -->
                <div class="mb-4 pr-1">
                    <label class="block text-gray-700 text-base mb-2" for="Phone">Phone</label>
                    <input
                            class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            placeholder="0123456789"
                            type="phone"
                            id="Phone"
                    />
                </div>

                <label class="md:w-2/3 block text-gray-500 font-light mb-4">
                    <input class="mr-2 leading-tight" type="checkbox"/>
                    <span class="text-sm">
                I have read the <a class="text-primary underline" href="#">Privacy Policy</a>
              </span>
                </label>

                <input class="btn btn-primary" type="button" value="Reach Me"/>
            </form>
        </div>

        <!-- Join us Image -->
        <img class="mx-auto h-full object-contain object-bottom" src="{{ asset('frontend/assets/Join-us.jpg') }}"
             alt=""/>
    </div>
</section>
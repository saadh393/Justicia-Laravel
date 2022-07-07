<!-- Join as a volunteer -->
<section id="joinus" class="opacity-0 z-50 hidden fixed left-0 top-0 right-0 bottom-0 transition-opacity">
    <div class="fixed left-0 top-0 right-0 bottom-0 bg-black bg-opacity-30 w-full h-full overflow-hidden ">
    </div>
    <div id="joinUs_content"
         class="w-[460px] bg-white px-10 py-8 mx-auto absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-0 transition-transform rounded-md ">
        <div class="block absolute right-6 top-6  cursor-pointer " id="joinus_close">
            @include('frontend.svg.close')
        </div>

        <h1 class="section-title my-6 text-2xl text-center">Join Us <span class="text-gray-800">as Volunteer</span></h1>
        <form action="" method="POST" id="joinus_form">
            <!-- Name -->
            <div class="mb-4 pr-1 ">
                <label class="block text-gray-700 text-base mb-2" for="name">Name</label>
                <input name="name"
                       class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="John Doe" type="text" id="name" required/>
            </div>

            <!-- Email -->
            <div class="mb-4 pr-1">
                <label class="block text-gray-700 text-base mb-2" for="Email">Email</label>
                <input name="email"
                       class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="example@email.com" type="email" id="Email" required/>
            </div>

            <!-- Phone -->
            <div class="mb-4 pr-1 w-full">
                <label class="block text-gray-700 text-base mb-2" for="Phone" required>Phone</label>
                <input name="phone"
                       class="appearance-none font-light border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                       placeholder="0123456789" type="phone" id="Phone"/>
            </div>

            <label class="md:w-2/3 block text-gray-500 font-light mb-4">
                <input class="mr-2 leading-tight" type="checkbox" required/>
                <span class="text-sm">
                    I have read the <a class="text-primary underline" href="#">Privacy Policy</a>
                </span>
            </label>

            <div class="mt-4">
                <div class="g-recaptcha" data-sitekey="6Lc2rdAgAAAAAL8JxtH4GmTYRr_H15psNeHh-jxt"></div>
            </div>
            <input class="btn mx-auto bg-[#933DB5] text-white w-full mt-10" type="submit" value="Reach Me"/>

            <a class="text-center inline-block w-full pt-5 text-sm text-slate-700 cursor-pointer"
               onclick="joinUsFadeOut()">Cancel</a>
        </form>
    </div>
</section>

<script>

    $('#joinus_form').submit((e) => {
        e.preventDefault();

        $.ajax({
            url: "{{url('/')}}",
            data: $('#joinus_form').serialize(),
            type: 'post',
            success: () => {
                $('#joinus_form').trigger('reset');
                joinUsFadeOut();
                Swal.fire('Saved!', '', 'success').then(result => {

                })
            }
        })
    })
</script>

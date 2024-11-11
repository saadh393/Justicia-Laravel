@extends('frontend.layout')

@section('content')
    <!-- Hero Section -->
    <section>
        <!-- Pink wrapper -->
        <div class="primary-gradient-pink  py-28 relative hero-section">
            <!-- Left Side Overlay -->
            @include('frontend.svg.heroLeftSvg')

            <!-- Right Side Overlay -->
            @include('frontend.svg.heroRightSvg')

            <!-- Content wrapper -->
            <div class="px-4 md:px-0 max-w-4xl mx-auto  relative">
                <div class="w-56 mx-auto">
                    @include('frontend.svg.logo')
                </div>
                <h1 class="text-slate-50 text-center text-[45px] leading-[60px] font-[600]">Our Recent Works</h1>
                <p class="text-lg tracking-wide text-white text-center mt-4">Our telephone advice lines provide vital free and
                    confidential legal advice to women.</p>
            </div>
        </div>
    </section>

    <section class="py-16 space-y-20">
        <div>
            <ul class='flex gap-2 mx-auto items-center justify-center' id="categoryFilter">
            <li class="px-4 py-1 rounded-full bg-[#933DB5] text-white cursor-pointer" data-category="all">All</li>
            <li class="px-4 py-1 bg-gray-200 rounded-full cursor-pointer" data-category="capacity_building">Capacity Building</li>
            <li class="px-4 py-1 bg-gray-200 rounded-full cursor-pointer" data-category="research">Research</li>
            <li class="px-4 py-1 bg-gray-200 rounded-full cursor-pointer" data-category="meeting">Meeting Sheeting</li>
        </ul>
        </div>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 wrapper">
            @foreach ($recentWorks as $work)
            <div class="work-item" data-category="{{ $work->Category }}">
                @include('frontend.components.recentWorks_blog_details', [
                    'post' => $work,
                    'color' => $colorsPublication,
                ])
            </div>
        @endforeach
        </div>

        <!-- <button class="btn bg-primary-pink !px-14 mx-auto text-white">See Our Other Works</button> -->
    </section>
@endsection


<script>
document.addEventListener('DOMContentLoaded', function() {
    const categoryFilter = document.getElementById('categoryFilter');
    const workItems = document.querySelectorAll('.work-item');
    
    categoryFilter.addEventListener('click', function(e) {
        if (e.target.tagName === 'LI') {
            // Remove active class from all buttons
            categoryFilter.querySelectorAll('li').forEach(li => {
                li.classList.remove('bg-[#933DB5]', 'text-white');
                li.classList.add('bg-gray-200');
            });
            
            // Add active class to clicked button
            e.target.classList.remove('bg-gray-200');
            e.target.classList.add('bg-[#933DB5]', 'text-white');
            
            const selectedCategory = e.target.getAttribute('data-category');
            
            // Filter works
            workItems.forEach(item => {
                const itemCategory = item.getAttribute('data-category');
                if (selectedCategory === 'all' || itemCategory === selectedCategory) {
                    item.style.display = '';
                } else {
                    item.style.display = 'none';
                }
            });
        }
    });
});
</script>
<div
    class="flex flex-col lg:h-[431px] shadow-md rounded-lg overflow-hidden border my-20  wow fadeIn {{ $loop->index % 2 == 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }}">
    <img class="lg:min-w-[378px] lg:h-[431px] object-cover" src="./uploads/publication/{{ $publication->Image }}"
        alt="{{ $publication->Title }}" />

    <div class="h-full flex flex-col justify-center p-5 lg:px-10">
        <div>
            <h1 class="text-2xl lg:text-4xl line-clamp-2">{{ $publication->Title }}</h1>
            <span class="mt-5 block">{{ $publication->Date }}</span>
        </div>
        <a href="{{ $publication->Link }}" target="_blank"
            class="mt-10 lg:mt-14 text-lg font-medium text-primary-pink hover:underline underline-offset-4">
            <svg class="inline" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="8 17 12 21 16 17"></polyline>
                <line x1="12" y1="12" x2="12" y2="21"></line>
                <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
            </svg>
            Download
        </a>
    </div>
</div>

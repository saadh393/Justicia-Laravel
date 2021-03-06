<!-- publication_card_2.blade.php -->
<div class="flex flex-col lg:flex-row lg:h-[210px] shadow-md rounded-lg overflow-hidden border my-2">
    <div class="lg:min-w-[230px] h-[350px] lg:h-[431px] bg-slate-100">
        <img class="w-full lg:min-w-[230px] object-cover h-full" src="./uploads/publication/{{ $publication->Image }}"
            alt="{{ $publication->Title }}">
    </div>
    <div class="h-full w-full flex flex-col justify-center p-5">
        <div class="">
            <h1 class="text-xl line-clamp-3">{{ $publication->Title }}</h1>
            <span class="mt-4 block">{{ $publication->Date }}</span>
        </div>
        <a href="{{ asset('/uploads/publication/files/'. $publication->Link ) }}" target="_blank"
            class="mt-6 text-lg font-medium text-primary-pink hover:underline underline-offset-4">
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


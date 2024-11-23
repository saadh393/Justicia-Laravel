<!-- publication_card_2.blade.php -->
<div class="flex flex-col lg:flex-row lg:h-[210px] shadow-md rounded-lg overflow-hidden border my-2">
    <div class="lg:min-w-[230px] h-[350px] lg:h-[431px] bg-slate-100">
        <img class="w-full lg:min-w-[230px] object-cover h-full max-w-md" src="./uploads/publication/{{ $publication->Image }}"
            alt="{{ $publication->Title }}">
    </div>
    <div class="h-full w-full flex flex-col justify-center p-5">
        <div class="">
            <h1 class="text-xl line-clamp-3">{{ $publication->Title }}</h1>
            <span class="mt-4 block text-sm text-gray-600">{{ date('d F Y', strtotime($publication->Date)) }}</span>
        </div>
        <div>
            <div class="mt-4 _df_button !bg-white text-base font-medium text-primary-pink hover:underline underline-offset-4 border-none px-0" source="{{ asset('/uploads/publication/files/'. $publication->Link ) }}" >
                Preview
            </div>
            <a href="{{ asset('/uploads/publication/files/'. $publication->Link ) }}" target="_blank"
                class="hidden text-base font-medium text-primary-pink hover:underline underline-offset-4">
                <svg class="inline" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="8 17 12 21 16 17"></polyline>
                    <line x1="12" y1="12" x2="12" y2="21"></line>
                    <path d="M20.88 18.09A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.29"></path>
                </svg>
                <span>Download</span>
            </a>
        </div>
    </div>
</div>


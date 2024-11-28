<!-- publication_card.blade.php -->

<div
    class="flex flex-col lg:h-[431px] shadow-md rounded-lg overflow-hidden border my-20  wow fadeIn {{ $loop->index % 2 == 0 ? 'lg:flex-row' : 'lg:flex-row-reverse' }}">
    <img class="lg:min-w-[378px] h-[350px] lg:h-[431px] object-cover" src="./uploads/publication/{{ $publication->Image }}"
        alt="{{ $publication->Title }}" />

    <div class="h-full flex flex-col justify-center p-5 lg:px-10 flex-1">
        <div>
            <h1 class="text-2xl lg:text-4xl line-clamp-2">{{ $publication->Title }}</h1>
            <span class="mt-5 block">{{ date('d F Y', strtotime($publication->Date)) }} </span>
        </div>
        <div class="mt-4 _df_button !bg-white text-base font-medium text-primary-pink hover:underline underline-offset-4 border-none px-0" source="{{ asset('/uploads/publication/files/'. $publication->Link ) }}" >
                Preview
            </div>
    </div>
</div>

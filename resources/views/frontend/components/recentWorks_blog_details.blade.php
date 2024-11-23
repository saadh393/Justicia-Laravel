<div class="wow fadeIn recentwork-card  flex-col hover:shadow-lg hover:shadow-{{$color[$work->id%4]}}/50 rounded-lg transition-all">
    <img class="recentwork-card--img rounded-none w-full rounded-tl-lg rounded-tr-lg"
         src="/uploads/blog/{{ $work->Image }}" alt="{{ $work->Title }}"/>

    <div class="recentwork-card--content gap-y-3 rounded-none !flex-grow-1 rounded-br-lg rounded-bl-lg bg-{{$color[$work->id%4]}}"
         style="flex-grow: 1">
        <h3 class="recentwork-card--date">{{ date('d F Y', strtotime($work->Date)) }}</h3>
        <a href="/blog/{{ $work->id }}" class="hover:underline hover:decoration-[#f8dfcb] ">
            <h1 class="recentwork-card--title text-2xl line-clamp-2">{{ $work->Title }}</h1>
        </a>
        <p class="paragraph-normal text-base text-white line-clamp-4"> {{ $work->shortDescription }} </p>
    </div>
</div>

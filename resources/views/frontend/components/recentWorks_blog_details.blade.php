<div class="recentwork-card flex-col">
    <img class="recentwork-card--img rounded-none w-full" src="/uploads/blog/{{ $work->Image }}" alt="{{ $work->Title }}" />
    <div class="recentwork-card--content gap-y-3 rounded-none !flex-grow-1" style="flex-grow: 1">
        <h3 class="recentwork-card--date">November 18, 2021</h3>
        <h1 class="recentwork-card--title text-2xl line-clamp-2">{{ $work->Title }}</h1>
        <p class="paragraph-normal text-base text-white line-clamp-4">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in some form, by injected humour, or randomised words which don't look even slightly
            believable.
        </p>
        <div class="flex-grow-1">
            <a href="{{ $work->Link }}" target="_blank"
               class="font-light text-slate-50 underline underline-offset-4">
                See More
            </a>
        </div>
    </div>
</div>

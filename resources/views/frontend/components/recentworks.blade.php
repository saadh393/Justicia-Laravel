<div class="recentwork-card">
    <img class="recentwork-card--img" src="/uploads/blog/{{ $work->Image }}" alt="{{ $work->Title }}" />
    <div class="recentwork-card--content gap-y-3 {{$colors[$work->id%4]}}">
        <h3 class="recentwork-card--date">November 18, 2021</h3>
        <h1 class="recentwork-card--title line-clamp-2">{{ $work->Title }}</h1>
        <p class="paragraph-normal text-base text-white line-clamp-5">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
            alteration in some form, by injected humour, or randomised words which don't look even slightly
            believable.
        </p>
        <a href="/blog/{{ $work->id }}"
            class="font-light text-slate-50 my-4 underline underline-offset-4 block hover:text-pink-100">See More</a>
    </div>
</div>

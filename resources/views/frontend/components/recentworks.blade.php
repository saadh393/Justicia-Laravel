<div>
    <img class="w-full object-cover" style="height: 360px" src="/uploads/blog/{{ $work->Image }}"
        alt="{{ $work->Title }}" />
    <div class="text-white py-8 space-y-8 px-4 bg-purple-800 " style="height: 200px">
        <h4 class="text-2xl">{{ $work->Title }}</h4>
        <a href="{{ $work->Link }}"
            class="btn !inline-block border border-slate-100 hover:bg-slate-100/10 transition-all active:bg-slate-900/10">Learn
            More</a>
    </div>
</div>

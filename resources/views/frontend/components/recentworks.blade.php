<div>
    <img class="w-full object-cover" style="height: {{ $height }}" src="/uploads/blog/{{ $work->Image }}"
        alt="{{ $work->Title }}" />
    <div class="text-white py-8 space-y-8 px-4 {{ $colorsPublication[$loop->index % 4] }}" style="height: 200px">
        <h4 class="text-2xl line-clamp-2">{{ $work->Title }}</h4>
        <a href="{{ $work->Link }}" target="_blank"
            class="btn !inline-block border border-slate-100 hover:bg-slate-100/10 transition-all active:bg-slate-900/10">Learn
            More
        </a>
    </div>
</div>

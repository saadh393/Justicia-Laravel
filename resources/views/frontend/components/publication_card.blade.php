<div class="publication-card max-w-xs xl:max-w-none xl:w-full">
    <img class="publication-card--img" src="{{ asset('uploads/publication').'/'.$publication['Image'] }}" alt="{{ $publication['Title'] }}"/>
    <h4 class="publication-card--date">{{$publication['Date']}}</h4>
    <h2 class="publication-card--title">
        {{$publication['Title']}}
    </h2>
    <a class="publication-card--downloadAnchor" href="/publication/{{$publication['id']}}">
        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
        <span>Download</span>
    </a>
</div>
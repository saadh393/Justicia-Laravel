<!-- Publication | 1 | Start -->
<div class="publication-card max-w-xs xl:max-w-none xl:w-full">
    <img class="publication-card--img" src="{{ asset('frontend/').$card['image'] }}" alt=""/>
    <h4 class="publication-card--date">{{$card['date']}}</h4>
    <h2 class="publication-card--title">
        {{$card['title']}}
    </h2>
    <a class="publication-card--downloadAnchor" href="/publication/{{$card['id']}}">
        <i class="fa-solid fa-cloud-arrow-down publication-card--downloadIcon"></i>
        <span>Download</span>
    </a>
</div>
<!-- Publication | 1 | End -->
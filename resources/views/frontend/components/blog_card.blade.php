<div class="workinglist-card">
    <img class="workinglist-card--img" src="{{  asset('frontend/').$card['image'] }}" alt="" />
    <div class="workinglist-card--content">
        <span class="workinglist-card--date">{{ $card['date'] }}</span>
        <h3 class="workinglist-card--title"> {{ $card['title'] }}</h3>
        <p class="workinglist-card--description"> {{ $card['description'] }} </p>
        <a class="workinglist-card--readme" href="/blog/{{ $card['id'] }}">Read More >></a>
    </div>
</div>
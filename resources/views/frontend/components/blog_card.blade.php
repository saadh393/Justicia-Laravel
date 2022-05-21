<div class="workinglist-card">
    <img class="workinglist-card--img" src="{{  asset('uploads/blog/').'/'.$blog['Image'] }}" alt="" />
    <div class="workinglist-card--content">
        <span class="workinglist-card--date">{{ $blog['Date'] }}</span>
        <h3 class="workinglist-card--title"> {{ $blog['Title'] }}</h3>
        <p class="workinglist-card--description"> {{ $blog['Description'] }} </p>
        <a class="workinglist-card--readme" href="/blog/{{ $blog['id'] }}">Read More >></a>
    </div>
</div>
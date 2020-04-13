

@if(!empty($newsList))
    @foreach($newsList as $news)
        <div class="col-sm-12 buzz_3_main">
            <div class="col-sm-4">
                <div class="spot_1">
                    <a href="{{ $news['url'] }}"><img src="{{ $news['urlToImage'] }}" width="75px" height="70px"></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="spot_2">
                    <a href="{{ $news['url'] }}" style="font-size: 16px;">{{ Str::limit($news['description'], 60) }}</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <div class="col-sm-12 buzz_3_main">
        <div class="col-sm-4">
            <div class="spot_1">
                <a href="#"><img src="{{ asset('img/8.jpg') }}"></a>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="spot_2">
                <a href="#">The world which can't  be defeated</a>
            </div>
        </div>
    </div>
@endif


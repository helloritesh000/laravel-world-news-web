
<div class="stories_1">
    <h5>Trending News</h5>
    <a href="#"><img src="{{ asset('img/1.jpg') }}" width="100%"></a>
    <h5>Top Headlines</h5>
    <ul>
        @if($topArticles != null)
            @foreach($topArticles as $article)
                @if(!empty($article['description']))
                    <li class="border_bottom_1"><a href="{{$article['url']}}">{{Str::limit($article['description'], 80) }}</a></li>
                @endif
            @endforeach
        @else
            <li class="border_bottom_1"><a href="#"><img src="{{ asset('img/ajax-loader.gif') }}"></a></li>
        @endif
    </ul>
    </div>

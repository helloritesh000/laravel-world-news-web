@if(!empty($article))
    <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="100%" height="200px"></a>
    <div class="buzz_1">
        <a href="{{ $article['url'] }}">{{ $article['title'] }}</a>
        <p>Author: {{ $article['author'] }} | Published At: {{ $article['publishedAt'] }} | Source: {{ $article['source']['name'] }}</p>
    </div>
    <div>
        <h3><u>{{ $article['description'] }}</u></h3>
        <p>{{ $article['content'] }}</p>
        <a href="{{ $article['url']}}" >...Read Article</a>
    </div>
@else
    <a href="#"><img src="{{ asset('img/17.jpg') }}" width="100%" height="200px"></a>
    <div class="buzz_1">
        <img src='../img/ajax-loader.gif'>
    </div>
    <div>
        <p><img src='../img/ajax-loader.gif'></p>
    </div>
@endif

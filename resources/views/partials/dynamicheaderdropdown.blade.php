
@if(!empty($newsList))
    @foreach(array_slice($newsList, 0, 4) as $article)
        <div class="col-sm-6">
            <a class="space_none" href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="300" height="160"></a>
        </div>
    @endforeach
@endif
<hr/>
<div class="col-sm-12">
    <h2><a class="space_none" href="{{ route('list') }}/?q={{ $keyword }}" style="color: #d01a1a;">View all {{ $totalResult }} news</a></h2>
</div>

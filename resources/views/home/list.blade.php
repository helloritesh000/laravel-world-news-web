@extends ('layouts.page')

@section('content')

@if(!empty($totalResult) && !empty($newsList))
<p>Showing {{ count($newsList) }} of {{ $totalResult }} results</p>
@endif
   @if(!empty($newsList))
    @foreach($newsList as $article)
        <div class="col-sm-12 buzz_3_main border_top_1">
            <div class="col-sm-4">
                <div class="spot_1">
                    <input class="hdnArticle" type="hidden" value="{{ json_encode($article) }}">
                    <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="100%" class="img img-responsive" style="max-height: 150px;"></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="spot_3">
                    <a href="{{ $article['url'] }}" target="_blank">{{$article['description']}}</a>
                    <p>{{Str::limit($article['content'], 100) }}</p>
                    <a href="{{ $article['url'] }}" target="_blank">...Read Article</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p><img src='../img/ajax-loader.gif'></p>
@endif
@endsection




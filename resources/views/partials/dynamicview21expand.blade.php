<div class="mid_5_inner">
    @if(!empty($article))
        <h4>{{ $article['title'] }}</h4>
        <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="100%"></a>
        <p><a href="{{ $article['url'] }}" style="font-size: 22px;">{{ $article['description'] }}</a></p><hr/>
        <p>{{ $article['content'] }}</p>
    @else
        <h4>WORLD Currency World</h4>
        <a href="#"><img src="{{ asset('img/110.jpg') }}" width="100%"></a>
        <p><a href="#">2011: So far the best year</a></p>
        <p><a href="javascript:void(0)" style="font-size: 22px;">Examples of evolved self-attention agents In this work, we evolve agents that attend to a small fraction of its visual input critical for its survival, allowing for interpretable agents that are not only compact, but also more generalizable. Here, we show ex… [+60942 chars]</a></p><hr/>
        <p>{{ $article['content'] }}</p>
    @endif
</div>

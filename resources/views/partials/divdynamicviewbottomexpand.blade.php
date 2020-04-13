@if(!empty($article))
    <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="100%" height="200px"></a>
    <div class="buzz_1">
        <a href="{{ $article['url'] }}">{{ $article['title'] }}</a>
        <p style="color: #cbcbcb;">Author: {{ $article['author'] }} | Published At: {{ $article['publishedAt'] }} | Source: {{ $article['source']['name'] }}</p>
    </div>
    <div style="background: #606060; color: #cbcbcb;">
        <h3><u>{{ $article['description'] }}</u></h3>
        <p>{{ $article['content'] }}</p>
        <a href="{{ $article['url']}}" >...Read Article</a>
    </div>
@else
    <a href="#"><img src="{{ asset('img/17.jpg') }}" width="100%" height="200px"></a>
    <div class="buzz_1">
        <a href="javascript:void(0)">Constructing the Sacred: Visibility and Ritual Landscape in Ancient Egypt</a>
    </div>
    <div>
        <div style="background: #606060; color: #cbcbcb;">
            <h3><u>Utilizing 3D technologies, Elaine A. Sullivan's <i>Constructing the Sacred</i> addresses ancient ritual landscape from a unique perspective to examine development at the complex, long-lived archaeological site of Saqqara, Egypt.</u></h3>
            <p>The long-lived burial site of Saqqara, Egypt, has been studied for more than a century. But the site we visit today is a palimpsest, the result of thousands of years of change, both architectural and environmental. Elaine A. Sullivan uses 3D technologies to p… [+1118 chars]</p>
            <a href="javascript:void(0)" >...Read Article</a>
        </div>
    </div>
@endif

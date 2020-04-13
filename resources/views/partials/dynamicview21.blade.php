<div class="mid_5_inner_1">
    <h4>
        <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview21']}}">
            <span>{{ !empty($keywordsXml) ? $keywordsXml['dynamicview21'] : '' }}</span>
        </a>
        <div class="input-group" style="display: none;">
            <input type="hidden" class="hdnKeywordName" value="dynamicview21" />
        <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview21'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
            </span>
        </div>
        <a style="font-size: 14px;" class="" href="javascript:void(0);"
        onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
    </h4>
    <div class="col-sm-12">
        @if(!empty($newsList))
            @foreach(array_slice($newsList,0,4) as $article)
                <div class="col-sm-6" onmouseover="dynamicViewNewsDetail(this, 'dynamicview21expand');">
                    <div class="mid_5_inner_1_image">
                        <input class="hdnArticle" type="hidden" value="{{ json_encode($article) }}">
                        <p><a href="{{ $article['url'] }}">{{ $article['source']['name'] }}</a></p>
                            <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="100%"></a>
                        <h3><a href="{{ $article['url'] }}">{{Str::limit($article['description'], 60) }}</a></h3>
                    </div>
                </div>
            @endforeach
        @else
            <div class="col-sm-6">
                <div class="mid_5_inner_1_image">
                    <p><a href="#">Upwords</a></p>
                    <a href="#">
                        <img src="{{ asset('img/ajax-loader.gif') }}" width="100%" />
                    </a>
                    <h3>
                        <a href="#">Curabitursodales ligula in libero</a>
                    </h3>
                </div>
           </div>
            <li><img src="{{ asset('img/ajax-loader.gif') }}"></li>
        @endif
  </div>
</div>



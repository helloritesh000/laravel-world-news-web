<h5>
    <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview2']}}">
        <span>{{ !empty($keywordsXml) ? $keywordsXml['dynamicview2'] : '' }}</span>
    </a>
    <div class="input-group" style="display: none;">
        <input type="hidden" class="hdnKeywordName" value="dynamicview2" />
    <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview2'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
        <span class="input-group-btn">
            <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
        </span>
    </div>
    <a style="font-size: 14px;" class="pull-right" href="javascript:void(0);"
    onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
</h5>
    <a href="#"><img src="{{ asset('img/21.jpg') }}" width="100%"></a>
    @if(!empty($newsList))
    @foreach($newsList as $article)
        <div class="col-sm-12 buzz_3_main border_top_1" onmouseover="dynamicViewNewsDetail(this, 'dynamicviewexpand');">
            <div class="col-sm-4">
                <div class="spot_1">
                    <input class="hdnArticle" type="hidden" value="{{ json_encode($article) }}">
                    <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="75" class="img img-responsive"></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="spot_3">
                    {{Str::limit($article['description'], 80) }}
                    <a href="{{ $article['url'] }}" target="_blank">...Read Article</a>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p><img src='../img/ajax-loader.gif'></p>
@endif

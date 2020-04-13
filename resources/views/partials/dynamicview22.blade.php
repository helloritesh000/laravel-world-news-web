<div style="max-height: 400px; overflow-y: scroll; overflow-x: hidden;">
<div class="mid_6_inner">
    <h4>
        <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview22']}}">
            <span style="padding-left: 0px;">{{ !empty($keywordsXml) ? $keywordsXml['dynamicview22'] : '' }}</span>
        </a>
        <div class="input-group" style="display: none;">
            <input type="hidden" class="hdnKeywordName" value="dynamicview22" />
        <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview22'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
            </span>
        </div>
        <a style="font-size: 14px;" class="pull-right" href="javascript:void(0);"
        onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
    </h4>
    @if(!empty($newsList))
    @foreach($newsList as $article)
        <div class="col-sm-12 mid_6_image_main">
            <div class="col-sm-5">
                <div class="mid_6_inner_image">
                    <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="124"></a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="mid_6_inner_text">
                    <a href="{{ $article['url'] }}">{{Str::limit($article['description'], 60) }}</a>
                </div>
            </div>
        </div>
    @endforeach
    @else
        <div class="col-sm-12 mid_6_image_main">
            <div class="col-sm-5">
                <div class="mid_6_inner_image">
                    <a href="javascript:void(0)"><img src='../img/ajax-loader.gif'></a>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="mid_6_inner_text">
                    <a href="javascript:void(0)"><img src='../img/ajax-loader.gif'></a>
                </div>
            </div>
        </div>
    @endif

  </div>
<div class="clear"></div>
</div>

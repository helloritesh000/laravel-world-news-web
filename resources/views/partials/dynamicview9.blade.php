<div class="col-sm-12">
    <div class="preview_1">
        <h4>
            <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview9']}}">
                <span>{{ !empty($keywordsXml) ? $keywordsXml['dynamicview9'] : '' }}</span>
            </a>
            <div class="input-group" style="display: none;">
                <input type="hidden" class="hdnKeywordName" value="dynamicview9" />
            <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview9'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
                </span>
            </div>
            <a style="font-size: 14px;" class="pull-right" href="javascript:void(0);"
            onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
        </h4>
    </div>
   </div>
    <div class="col-sm-12">
        <div class="row">
            @if(!empty($newsList))
            @foreach(array_slice($newsList,0,8) as $article)
            <div class="col-sm-3">
                <div class="preview_2">
                    <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}"  width="260" height="150"></a>
                    <p><a href="{{ $article['url'] }}">{{Str::limit($article['description'], 60) }}</a></p>
                </div>
            </div>
            @endforeach
            @else
                <div class="col-sm-3">
                    <div class="preview_2">
                        <a href="#"><img src="{{ asset('img/32.jpg') }}" width="260" height="150"></a>
                    <p><a href="#">Duis sagittis ipsum. Praesent mauris</a></p>
                    </div>
                </div>
                <li><img src='../img/ajax-loader.gif'></li>
            @endif
        </div>
    </div>

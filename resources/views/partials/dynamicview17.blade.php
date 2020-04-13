<h5>
    <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview17']}}">
        <span>{{ !empty($keywordsXml) ? $keywordsXml['dynamicview17'] : '' }}</span>
    </a>
    <div class="input-group" style="display: none;">
        <input type="hidden" class="hdnKeywordName" value="dynamicview17" />
    <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview17'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
        <span class="input-group-btn">
            <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
        </span>
    </div>
    <a style="font-size: 14px;" class="pull-right" href="javascript:void(0);"
    onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
</h5>


<ul style="max-height: 100px;">
    @if(!empty($newsList))
    @foreach($newsList as $article)
            <li class="border_bottom_1"><a href="{{ $article['url'] }}">{{Str::limit($article['description'], 40) }}</a></li>
    @endforeach
    @else
        <li><img src='../img/ajax-loader.gif'></li>
    @endif
</ul>

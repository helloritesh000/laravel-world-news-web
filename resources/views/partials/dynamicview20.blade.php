<div class="col-sm-12">
    <div class="features_1">
     <h2>
        <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview20']}}">
            <span>{{ !empty($keywordsXml) ? $keywordsXml['dynamicview20'] : '' }}</span>
        </a>
        <div class="input-group" style="display: none;">
            <input type="hidden" class="hdnKeywordName" value="dynamicview20" />
        <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview20'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
            </span>
        </div>
        <a style="font-size: 14px;" class="" href="javascript:void(0);"
        onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
    </h2>
    </div>
   </div>
   <div class="col-sm-12 count_2">
    <div class="col-sm-7">
      <div class="stories_1 feature_1">
        <div class="divdynamicviewbottomexpand">
            @include('partials.divdynamicviewbottomexpand')
        </div>
     </div>
    </div>
    <div class="col-sm-5">
      <div class="stories_1">
     <ul>
        @if(!empty($newsList))
        @foreach($newsList as $article)
                <li class="border_bottom_1" onmouseover="dynamicViewNewsDetail(this, 'divdynamicviewbottomexpand');">
                    <input class="hdnArticle" type="hidden" value="{{ json_encode($article) }}">
                    <a href="{{ $article['url'] }}">{{Str::limit($article['description'], 40) }}</a>
                </li>
        @endforeach
        @else
            <li><img src='../img/ajax-loader.gif'></li>
        @endif
     </ul>
     </div>
    </div>
   </div>

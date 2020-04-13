<div class="col-sm-12">
    <div class="features_1">
     <h2>
        <a class="heading_tag" href="{{ route('list') }}/?q={{$keywordsXml['dynamicview10']}}">
            <span>{{ !empty($keywordsXml) ? $keywordsXml['dynamicview10'] : '' }}</span>
        </a>
        <div class="input-group" style="display: none;">
            <input type="hidden" class="hdnKeywordName" value="dynamicview10" />
        <input type="text" value="{{ !empty($keywordsXml) ? $keywordsXml['dynamicview10'] : '' }}" class="form-control txtKeywordEdit" name="txtKeywordEdit" placeholder="" required/>
            <span class="input-group-btn">
                <button class="btn btn-default" type="button" onclick="updateDynamicKeyword(this);">Save</button>
            </span>
        </div>
        <a style="font-size: 14px;" class="pull-right" href="javascript:void(0);"
        onclick="$(this).closest('.dynamicview').find('input.txtKeywordEdit').val($(this).closest('.dynamicview').find('span:first-child').text());$(this).closest('.dynamicview').find('.input-group').show();$(this).closest('.dynamicview').find('span:first-child').hide();$(this).hide()">Edit</a>
    </h2>
    </div>
   </div>
   <div class="col-sm-12">
     <div class="col-sm-9">
      <div class="col-sm-12">
        <div class="row">
            @if(!empty($newsList))
                @foreach(array_slice($newsList,0,6) as $article)
                <div class="col-sm-4">
                    <div class="preview_2">
                        <a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}" width="240" height="140"></a>
                        <p><a href="{{ $article['url'] }}">{{Str::limit($article['description'], 60) }}</a></p>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-sm-4">
                    <div class="preview_2">
                        <a href="#"><img src="{{ asset('img/40.jpg') }}" width="100%"></a>
                        <p><a href="#"></a></p>
                    </div>
                </div>
                <li><img src='../img/ajax-loader.gif'></li>
            @endif
        </div>
    </div>
     </div>
     <div class="col-sm-3">
       <div class="trending_1">
        <img src="{{ asset('img/46.jpg') }}" width="100%" height="250px">
       </div>
     </div>
   </div>

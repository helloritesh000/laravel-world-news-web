    <div class="stories_1 feature_1 divTopKeywordFrontNews" style="overflow: hidden;">
        <h5></h5>
        <a href="#" class="hrefImg"><img src="" width="100%"></a>
        <div class="buzz_1">
            <a href="#" class="hrefDesc" style="font-size: 16px;"></a>
            <p class="authorAndDate"></p>
            <input class="hdnKeyword" type="hidden" value="">
        </div>
    </div>


    @if($topKeywordFirstNewsList != null)
    <div id="carousel-pager" class="carousel carouselTopKeywords slide " data-ride="carousel" data-interval="3000">
        <!-- Carousel items -->
        <div class="carousel-inner vertical" style="max-height: 300px">
            @foreach($topKeywordFirstNewsList as $topKeywordFirstNews)
                <div class="{{ $loop->iteration - 1 == 0 ? 'item active' : 'item'}}">
                    <div class="col-sm-12 buzz_main" style="margin-top: 10px;">
                        <div class="col-sm-5 buzz_inner">
                        <div class="buzz_2">
                            <img src="{{ $topKeywordFirstNews['urlToImage'] }}" width="100%" class="img">
                            <input class="hdnTitle" type="hidden" value="{{$topKeywordFirstNews['title']}}">
                            <input class="hdnDescription" type="hidden" value="{{$topKeywordFirstNews['description']}}">
                            <input class="hdnPublishedAt" type="hidden" value="{{$topKeywordFirstNews['publishedAt']}}">
                            <input class="hdnAuthor" type="hidden" value="{{$topKeywordFirstNews['author']}}">
                            <input class="hdnKeyword" type="hidden" value="{{$topKeywordFirstNews['keyword']}}">

                        </div>
                        </div>
                        <div class="col-sm-7 buzz_inner_1">
                        <a style="font-weight: 600; font-size: 18px;" href="{{ $topKeywordFirstNews['url'] }}">{{ Str::limit($topKeywordFirstNews['title'], 60) }}</a>
                        <p class="para_next" style="font-size: 16px; font-weight: 400;">{{ Str::limit($topKeywordFirstNews['description'], 80) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Controls
        <a class="left carousel-control" href="#carousel-pager" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-pager" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>-->
    </div>
    @else
        <div class="col-sm-12 buzz_main">
            <div class="col-sm-5 buzz_inner">
            <div class="buzz_2">
                <img src="{{ asset('img/5.jpg') }}" width="100%">
            </div>
            </div>
            <div class="col-sm-7 buzz_inner_1">
            <a href="#" style="font-weight: 600; font-size: 18px;">Quis sem at nibh elementum imperdiet</a>
            <p class="para_next" style="font-size: 16px; font-weight: 400;">  Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
            </div>
        </div>
    @endif

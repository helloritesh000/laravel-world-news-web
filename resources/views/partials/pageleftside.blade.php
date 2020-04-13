    <p class="text-right">
        <a href="#"><i class="fa fa-facebook i_1"></i></a>
        <a href="#"><i class="fa fa-twitter i_2"></i></a>
        <a href="#"><i class="fa fa-linkedin i_3"></i></a>
   </p>
   {{-- <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
   <!-- Indicators -->
   <ol class="carousel-indicators">
    @if(!empty($newsList))
        @foreach($newsList as $article)
            <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->iteration - 1}}" class="{{ $loop->iteration - 1 == 0 ? 'active' : '' }}"></li>
        @endforeach
    @endif
   </ol>
   <!-- Wrapper for slides -->
   <div class="carousel-inner">
        @if(!empty($newsList))
            @foreach($newsList as $article)
                <div class="{{ $loop->iteration - 1}}" class="{{ $loop->iteration - 1 == 0 ? 'item active' : 'item' }}">
                    <img src="{{ $article['urlToImage'] }}" width="100%" alt="" class="img-responsive" />
                </div>
            @endforeach
        @endif
   </div>
   <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
       <span class="glyphicon glyphicon-chevron-left"></span></a>
    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
        </span>
    </a>
  </div>
    <div>
        <a href="#"><img class="img_2" src="{{ asset('img/95.jpg') }}" width="100%"></a>
    <div> --}}

        <div class="stories_1">
            <h5>Top Headlines</h5>
            <ul>
                @if($newsList != null)
                    @foreach($newsList as $article)
                        @if(!empty($article['description']))
                            <li class="border_bottom_1" title="{{$article['description']}}"><a href="{{$article['url']}}">{{Str::limit($article['description'], 26) }}</a></li>
                        @endif
                    @endforeach
                @else
                    <li class="border_bottom_1"><a href="#"><img src="{{ asset('img/ajax-loader.gif') }}"></a></li>
                @endif
            </ul>
            </div>

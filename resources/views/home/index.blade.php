@extends ('layouts.app')

@section('content')

<div class="stories_2">
    @if($topArticles != null)
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            {{-- <ol class="carousel-indicators">
                @foreach($topArticles as $article)
                    <li data-target="#carousel-example-generic" data-slide-to="{{ $loop->iteration - 1 }}" class="{{ $loop->iteration - 1 == 0 ? 'active' : '' }}"></li>
                @endforeach
            </ol> --}}

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                @foreach($topArticles as $article)
                    <div class="{{ $loop->iteration - 1 == 0 ? 'item topStoryCarouselImg active' : 'item topStoryCarouselImg' }}">
                        <h3 class="text-center"><a href="{{ $article['url'] }}">{{ $article['title'] }}</a></h3>
                        <div class="story_image">
                            <div><a href="{{ $article['url'] }}"><img src="{{ $article['urlToImage'] }}"></a></div>
                            <div class="story_heading"><h5>LATEST STORIES</h5></div>
                        </div>
                        <div class="stories_3">
                            <a class="a_1" href="#"> {{ $article['description'] }}</a>
                            <p><a href="#"><span>Author:</span> {{ $article['author'] }} </a>
                            <a href="#"><span>Date:</span> {{ $article['publishedAt'] }} </a>
                            <a href="#"><span>Source:</span> {{ $article['source']['name'] }}</a>
                            <a class="border_none_1" href="#">'Thank you' Text</a></p>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
        </div>
    @else
        <h1 class="text-center"><a href="#">Curabitursodales</a></h1>
        <div class="story_image">
            <div><a href="#"><img src="{{ asset('img/2.jpg') }}" width="100%"></a></div>
            <div class="story_heading"><h5>LATEST STORIES</h5></div>
        </div>
        <div class="stories_3">
            <a class="a_1" href="#"> Curabitursodales ligula in libero. Sed dignissim lacinia nunc.</a>
            <p><a href="#"><span>Inceptos:</span> Sed dignissim lacinia </a>
            <a href="#"><span>Take a Look:</span> 5 Month to go </a>
            <a href="#"><span>Target:</span> We finished</a>
            <a class="border_none_1" href="#">'Thank you' Text</a></p>
        </div>
    @endif
</div>
@endsection

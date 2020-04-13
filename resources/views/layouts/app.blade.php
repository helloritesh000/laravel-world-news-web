<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>News</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.min.css') }}" />
    <link href="https://fonts.googleapis.com/css?family=Kanit|PT+Sans+Narrow|Share+Tech" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />


  </head>
  <body>
  <section id="top">
    @include('partials.header')
  </section>

  <section id="stories">
   <div class="container">
    <div class="row">
        <div class="col-md-12">
            @include('partials.universalsearch')
        </div>
	  <div class="col-sm-3">
	    @include('partials.topheadlines')
	  </div>
	  <div class="col-sm-9">
	   @yield('content')
	  </div>
	</div>
   </div>
  </section>

  <section id="buzz">
   <div class="container">
    <div class="row">
	  <div class="col-sm-3">
	    @include('partials.newssources')
	  </div>
	  <div class="col-sm-6">
	    @include('partials.topkeywordfirstnews')
	  </div>
	  <div class="col-sm-3">
        <div class="buzz_3">
            @include('partials.topkeywordallnewsadbanner')
            <h5>Top Searches</h5>
            <div class="divTopKeywordAllNewsPanel">
                @include('partials.topkeywordallnews')
            </div>
        </div>
	  </div>
	</div>
   </div>
  </section>

  <section id="detail">
   <div class="container">
    <div class="row">
	 <div class="col-sm-3">
	  <div class="stories_1">
          <div id="dynamicview1" class="dynamicview">
        @include('partials.dynamicview1')
         </div>
      </div>
	 </div>
	 <div class="col-sm-6">
	  <div class="stories_1 feature_1 dynamicviewexpand">
		@include('partials.dynamicviewexpand')
	  </div>
	 </div>
	 <div class="col-sm-3">
	  <div class="stories_1">
		<div id="dynamicview2" class="dynamicview">
            @include('partials.dynamicview2')
        </div>
	  </div>
	 </div>
	</div>
   </div>
  </section>

  <section id="features">
    <div class="container">
	 <div class="row">
	  <div class="col-sm-12">
	   <div class="features_1">
	    <h2>Featuring Prasent</h2>
	   </div>
	  </div>
	  <div class="col-sm-12">
	   <div class="features_2">
	    <div class="col-sm-4 f_1">
		    <div class="stories_1">
                <div id="dynamicview3" class="dynamicview">
                    @include('partials.dynamicview3')
                </div>
		    </div>
		</div>
		<div class="col-sm-4 ">
		  <div class="stories_1">
            <div id="dynamicview4" class="dynamicview">
                @include('partials.dynamicview4')
            </div>
		</div>
		</div>
		<div class="col-sm-4 ">
		  <div class="stories_1">
                <div id="dynamicview5" class="dynamicview">
                    @include('partials.dynamicview5')
                </div>
		    </div>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
  </section>

  <section id="features" class="fetur_1">
    <div class="container">
	 <div class="row">
	  <div class="col-sm-12">
	   <div class="features_2">
	    <div class="col-sm-4 f_1">
		  <div class="stories_1">
            <div id="dynamicview6" class="dynamicview">
                @include('partials.dynamicview6')
            </div>
		</div>
		</div>
		<div class="col-sm-4 ">
		  <div class="stories_1">
            <div id="dynamicview7" class="dynamicview">
                @include('partials.dynamicview7')
            </div>
		</div>
		</div>
		<div class="col-sm-4 f_1">
		  <div class="stories_1">
            <div id="dynamicview8" class="dynamicview">
                @include('partials.dynamicview8')
            </div>
		</div>
		</div>
	   </div>
	  </div>
	 </div>
	</div>
  </section>

  <section id="preview">
   <div class="container">
     <div class="row">
	   <div class="col-sm-12">
	   <div class="features_1">
	    <h2>Preview</h2>
	   </div>
	  </div>
        <div id="dynamicview9" class="dynamicview">
            @include('partials.dynamicview9')
        </div>
	 </div>
   </div>
  </section>

  <section id="trending">
   <div class="container">
    <div class="row">
        <div id="dynamicview10" class="dynamicview">
            @include('partials.dynamicview10')
        </div>
	</div>
   </div>
  </section>

  <section id="content">
   <div class="container">
    <div class="row">
	 <div class="col-sm-12">
	   <div class="features_1">
	    <h2>World News</h2>
	   </div>
	  </div>
	 <div class="col-sm-12 count_1">
	   <div class="features_2">
	    <div class="col-sm-4 f_1">
		  <div class="stories_1">
            <div id="dynamicview11" class="dynamicview">
                @include('partials.dynamicview11')
            </div>
		</div>
		</div>
		<div class="col-sm-4 ">
		  <div class="stories_1">
            <div id="dynamicview12" class="dynamicview">
                @include('partials.dynamicview12')
            </div>
		</div>
		</div>
		<div class="col-sm-4 f_1">
		  <div class="stories_1">
            <div id="dynamicview13" class="dynamicview">
                @include('partials.dynamicview13')
            </div>
		</div>
		</div>
	   </div>
	 </div>
	 <div class="col-sm-12 count_1">
	   <div class="features_2">
	    <div class="col-sm-4 f_1">
		  <div class="stories_1">
            <div id="dynamicview14" class="dynamicview">
                @include('partials.dynamicview14')
            </div>
		</div>
		</div>
		<div class="col-sm-4 ">
		    <div class="stories_1">
                <div id="dynamicview15" class="dynamicview">
                    @include('partials.dynamicview15')
                </div>
		    </div>
		</div>
		<div class="col-sm-4 f_1">
		    <div class="stories_1">
                <div id="dynamicview16" class="dynamicview">
                    @include('partials.dynamicview16')
                </div>
		    </div>
		</div>
	   </div>
	 </div>
	 <div class="col-sm-12 count_1">
	   <div class="features_2">
	    <div class="col-sm-4 f_1">
		  <div class="stories_1">
                <div id="dynamicview17" class="dynamicview">
                    @include('partials.dynamicview17')
                </div>
		    </div>
		</div>
		<div class="col-sm-4 ">
		    <div class="stories_1">
                <div id="dynamicview18" class="dynamicview">
                    @include('partials.dynamicview18')
                </div>
            </div>
		</div>
		<div class="col-sm-4 f_1">
		    <div class="stories_1">
                <div id="dynamicview19" class="dynamicview">
                    @include('partials.dynamicview19')
                </div>
            </div>
		</div>
	   </div>
	 </div>
	</div>
   </div>
  </section>

  <section id="copyright">
    <div class="container">
	  <div class="row">
        <div id="dynamicview20" class="dynamicview">
            @include('partials.dynamicview20')
        </div>
	  </div>
	</div>
  </section>

  <section id="footer">
   @include('partials.footer')
  </section>
  <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
  </body>

</html>

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

    <section id="money">
      <div class="container">
        <div class="row">
            <div class="col-sm-12">
             <div class="col-sm-9">
              @yield('content')
             </div>
              <div class="col-sm-3">
               <div class="money_2">
                 @include('partials.pageleftside')
               </div>
              </div>
            </div>

            <div class="col-sm-12 mid_4">
             <div class="col-sm-6">
              <div class="mid_4_inner clearfix">
                <a href="#"><h4>Lacinia secure</h4></a>
                <div class="col-sm-12 mid_4_image">
                  <div class="col-sm-5">
                   <div class="mid_4_image_1">
                     <a href="#"><img src="{{ asset('img/108.png') }}" class="img-circle" width="100%"></a>.
                   </div>
                  </div>
                  <div class="col-sm-7">
                   <div class="mid_4_text">
                     <h3><a href="#">Sociosqu ad litora torquent per conubia nostra</a></h3>
                     <p><a href="#">Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris.</a></p>
                     <h6><a href="#">Top Story</a></h6>
                   </div>
                  </div>
                </div>
              </div>
             </div>
             <div class="col-sm-6">
              <div class="mid_4_inner_1">
               <a href="#"><h4>Upwords</h4></a>
                <div class="mid_4_inner_1_main">
                  <div class="mid_4_inner_1_main_image">
                  <a href="#"><img src="{{ asset('img/109.jpg') }}" width="100%"></a>
                  </div>
                  <div class="mid_4_inner_1_main_text">
                   <a href="#">Nulla quis sem at nibh elementum imperdiet</a>
                  </div>
                </div>
              </div>
             </div>
            </div>
            <div class="col-sm-12 mid_5">
              <div class="col-sm-7">
                <div class="dynamicview21expand">
                    @include('partials.dynamicview21expand')
                </div>
              </div>
              <div class="col-sm-5">
                <div id="dynamicview21" class="dynamicview">
                    @include('partials.dynamicview21')
                </div>
              </div>
            </div>
            <div class="col-sm-12 mid_6">
             <div class="col-sm-4" >
              @include('partials.dynamicview22')
             </div>
             <div class="col-sm-4">
              <div class="mid_6_inner_1">
                <a href="#"><h4>Money</h4></a>
                <div class="col-sm-12 currency border_bottom_1">
                  <div class="col-sm-6">
                   <div class="currency_1">
                     <h5>Money</h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5>Rate</h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5>$Dollar</h5>
                   </div>
                  </div>
                </div>
                <div class="col-sm-12 currency">
                  <div class="col-sm-6">
                   <div class="currency_1">
                     <h5><a class="a1" href="#">Pound</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a href="#">$2.02</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a class="a2" href="#">+0.1481%</a></h5>
                   </div>
                  </div>
                </div>
                <div class="col-sm-12 currency">
                  <div class="col-sm-6">
                   <div class="currency_1">
                     <h5><a class="a1" href="#">Dollar</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a href="#">$2.13</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a class="a2" href="#">-0.1481%</a></h5>
                   </div>
                  </div>
                </div>
                <div class="col-sm-12 currency">
                  <div class="col-sm-6">
                   <div class="currency_1">
                     <h5><a class="a1" href="#">Pound</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a href="#">$217.25</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a class="a2" href="#">-0.1481%</a></h5>
                   </div>
                  </div>
                </div>
                <div class="col-sm-12 currency">
                  <div class="col-sm-6">
                   <div class="currency_1">
                     <h5><a class="a1" href="#"> Dollar</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a href="#">$1.84</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a class="a2" href="#">-0.1471%</a></h5>
                   </div>
                  </div>
                </div>
                <div class="col-sm-12 currency">
                  <div class="col-sm-6">
                   <div class="currency_1">
                     <h5><a class="a1" href="#">Rupee</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a href="#">$5.75</a></h5>
                   </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="currency_1">
                     <h5><a  class="a2" href="#">-0.2690%</a></h5>
                   </div>
                  </div>
                </div>

              </div>
              <div class="col-sm-12 para_1">
                <a href="#">See all Values</a>
                <p>Updated: 3:13am BT</span>
              </div>
             </div>
             <div class="col-sm-4 mid_6_inner_2">
               <h4>Stay Resumed</h4>
               <p>Stay Resumed with WORLD Currency!</p>
               <h5>
                  <a href="#"><i class="fa fa-envelope i_1"></i></a>
                   <a href="#"><i class="fa fa-facebook i_2"></i></a>
                   <a href="#"><i class="fa fa-twitter i_3"></i></a>
                   <a href="#"><i class="fa fa-linkedin i_4"></i></a>
                   <a href="#"><i class="fa fa-rss"></i></a>
                   <a href="#"><i class="fa fa-apple"></i></a>
                   <a href="#"><i class="fa fa-android"></i></a>
                 </h5>
               <h6><a href="#">WORLD Currency on Twitter</a></h6>
               <a class="button_2" href="#"><i class="fa fa-thumbs-up"></i>Like 8.4M</a>
               <h6 class="heading_1"><a href="#">@WORLD Currency on Instagram</a></h6>
               <a class="button_3" href="#"><i class="fa fa-twitter"></i>Follow</a>
               <a class="button_4" href="#">2.6M followers</a>
             </div>
            </div>
            <div class="col-sm-12 politics_main_4 money_last">
             <div class="col-sm-4">
                <div id="dynamicview23" class="dynamicview">
                    @include('partials.dynamicview23')
                </div>
            </div>
             <div class="col-sm-4">
                <div id="dynamicview24" class="dynamicview">
                    @include('partials.dynamicview24')
                </div>
            </div>
             <div class="col-sm-4">
              <div class="politics_main_4_inner">
               <a href="#"><img src="{{ asset('img/121.jpg') }}" width="100%"></a>
              </div>
             </div>
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

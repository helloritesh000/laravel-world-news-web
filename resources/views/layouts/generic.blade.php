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

   <section id="contact_us">
    <div class="container">
	 <div class="row">
	  <div class="col-sm-7">
	   @yield('content')
	  </div>
	  <div class="col-sm-5">
	    @include('partials.maplocation')
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

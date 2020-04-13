
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header clearfix">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>      </button>
                <div class="brand_1 clearfix"><a class="navbar-brand" href="{{ route('home') }}">WORLD</a></div>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li><a class="active_1" href="{{ route('list') }}">Home</a></li>
                    <li><a class="" href="{{ route('states') }}">States</a></li>
                    <li><a class="" href="politics.html">Blog</a></li>
                    <li><a class=""  href="{{ route('list') }}/?q=Trending">Trending</a></li>
                    <li><a  class="" href="{{ route('contact') }}">Contact</a></li>
                    <li class="dropdown dropdown-large">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sources <b class="caret"></b></a>

                        <ul class="dropdown-menu dropdown-menu-large row">
                            <li class="col-sm-6">
                                <div class="dynamicheaderdropdown">

                                </div>
                        	</li>
                            <li class="col-sm-3">
                                <ul style="max-height: 350px; overflow-y: scroll;">
                                    <li class="dropdown-header">News Sources</li>
                                    @if(!empty($sources))
                                        @foreach($sources as $source)
                                            <li onmouseover="dynamicHeaderDropdownNews(this, 'dynamicheaderdropdown');"><a href="{{$source['url']}}">{{ Str::limit($source['name'], 80) }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                            <li class="col-sm-3">
                                <ul style="max-height: 350px; overflow-y: scroll;">
                                    <li class="dropdown-header">Countries</li>
                                    @if(!empty($countries))
                                        @foreach($countries as $country)
                                            <li onmouseover="dynamicHeaderDropdownNews(this, 'dynamicheaderdropdown');"><a href="{{ route('list') }}/?q={{$country['name']}}">{{ Str::limit($country['name'], 80) }}</a></li>
                                        @endforeach
                                    @endif
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="edit"><a href="money.html">New Edition +</a></li>
                    <li><input class="form-control"  placeholder="Search"type="text"></li>

                </ul>
                </div>
            </div>
        </div>
  </nav>


<div class="stories_1">
    <h5>Sources</h5>
    <a href="#"><img src="{{ asset('img/3.jpg') }}" width="100%"></a>
    <ul>
        @if($sources != null)
            @foreach($sources as $source)
                @if(!empty($source['name']))
                    <li class="border_bottom_1"><a href="{{$source['url']}}" target="_blank">{{Str::limit($source['name'], 80) }}</a></li>
                @endif
            @endforeach
        @else
            <li class="border_bottom_1"><a href="#"><img src="{{ asset('img/ajax-loader.gif') }}"></a></li>
        @endif
     {{-- <li class="border_bottom_1"><a href="#">Curabitursodales ligula in libero</a></li>
      <li class="border_bottom_1"><a href="#">Class aptent taciti sociosqu ad litora</a></li>
     <li class="border_bottom_1"><a href="#">Fusce nec tellus sed augue semper porta.</a></li>
     <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh imperdiet.</a></li>
     <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris.</a></li>
     <li class="border_bottom_1"><a href="#">Consectetur adipiscing elit integer nec</a></li>
     <li class="border_bottom_1"><a href="#">Tellus sed augue semper porta  massa.</a></li>
      <li class="border_bottom_1"><a href="#">Vestibulum lacinia arcu eget nulla</a></li>
      <li class="border_bottom_1"><a href="#">Nulla quis sem at nibh imperdiet.</a></li>
     <li class="border_bottom_1"><a href="#">Duis sagittis ipsum. Praesent mauris.</a></li>
     <li><a href="#">Curabitursodales ligula in libero</a></li> --}}
    </ul>
    </div>

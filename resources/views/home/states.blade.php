@extends ('layouts.page')

@section('content')


@if(!empty($states))
    @foreach($states as $state)
        <div class="col-sm-12 buzz_3_main border_top_1">
            <div class="col-sm-2">
                <div class="spot_1">
                    <a href="{{ route('list') }}/?q={{ $state['name'] }}"><img src="{{ $state['flag'] }}" width="100%" class="img img-responsive" style="max-height: 80px;"></a>
                </div>
            </div>
            <div class="col-sm-10">
                <div class="spot_3">
                    <a href="{{ route('list') }}/?q={{ $state['name'] }}" target="_blank">{{$state['name']}}</a>
                    <p>
                        Region: {{ $state['region'] }} |
                        Sub Region: {{ $state['subregion'] }} |
                        Population: {{ $state['population'] }} |
                        Lat-Lng: {{ !empty($state['latlng']) ? $state['latlng'][0] : '' }} - {{ !empty($state['latlng']) ? $state['latlng'][1] : '' }} |
                        Timezone: {{ !empty($state['timezones']) ? $state['timezones'][0] : '' }}
                    </p>
                </div>
            </div>
        </div>
    @endforeach
@else
    <p><img src='../img/ajax-loader.gif'></p>
@endif
@endsection




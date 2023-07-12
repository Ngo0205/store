@php
    $baseUrl = config('app.baseUrl');
@endphp
<section class="header-top">
    <div class="slider-top">
        <div class="slider-top-header">
            <div class="sliders">
                @foreach($slider as $value)
                    @if(trim($value->name) == 'home')
                        <img id="{{$value->id}}" src="{{$baseUrl . $value->image_path}}" alt="">
                    @endif
                @endforeach

            </div>
            <div class="slider-nav-header">
                @foreach($slider as $value)
                    @if(trim($value->name) == 'home')
                        <a href="#{{$value->id}}"></a>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="anh-header">
        <div class="anhs">
            <img style="width: 635px; height: 220px; margin: 2px;"
                 src="{{asset('html/đề tài/ảnh/slider/top-navbar/anh6.png')}}" alt="">
        </div>
        <div class="anhs">
            <img style="width: 635px; height: 220px ;margin: 2px; "
                 src="{{asset('html/đề tài/ảnh/slider/top-navbar/anh4.jpg')}}" alt="">
        </div>
    </div>
</section>

<section class="slider-product">
    <div class="wrapper-product">
        @foreach($sliders as $sliderItem)
{{--             check những slider có ten là laptop thì thuộc trang laptop và show lên màn hình--}}
{{--            hàm strcasecmp() trả về int, nếu trả ve 0 thì hai chuỗi = nhau--}}
{{--            --}}
            @if(strcasecmp(trim($sliderItem->name),'laptop') === 0)
                <img src="{{config('app.baseUrl'). $sliderItem-> image_path}}" alt="">
            @endif
        @endforeach
    </div>
</section>

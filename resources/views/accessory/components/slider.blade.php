<section class="slider-product">
    <div class="wrapper-product">
        @foreach($sliders as $sliderItem)
{{--             tìm các slide có tên là phone thuộc màn hình phone--}}
            @if(strcasecmp(trim($sliderItem->name),'phone') === 0)
                <img src="{{config('app.baseUrl') . $sliderItem->image_path}}" alt="">
            @endif

        @endforeach
    </div>
</section>
